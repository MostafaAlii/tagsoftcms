<?php
namespace App\Http\Controllers\Auth\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Admin\AdminLoginRequest;
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
class AdminAuthenticatedSessionController {
    public function create(): View {
        return view('auth.admin.login');
    }

    public function store(AdminLoginRequest $request): RedirectResponse {
        $request->authenticate($request);
        $request->session()->regenerate();
        $notification = array(
                'message' => 'Welcome',
                'alert-type' => 'success'
            );
        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function destroy(Request $request): RedirectResponse {
        Auth::guard('admin')->logout();
        $request->session()->forget('guard.admin');
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}