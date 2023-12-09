<?php
namespace App\Http\Requests\Auth\Admin;
use Illuminate\Support\Str;
use App\Enums\Admin\AdminStatus;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\{Auth, RateLimiter};

class AdminLoginRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate($request) {
        $this->ensureIsNotRateLimited();
        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => AdminStatus::ACTIVE,], $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
            
        }
        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited(): void {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) 
            return;
        event(new Lockout($this));
        $seconds = RateLimiter::availableIn($this->throttleKey());
        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}