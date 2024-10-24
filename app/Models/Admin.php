<?php
declare(strict_types=1);
namespace App\Models;
use App\Enums\Admin\{AdminStatus,AdminType};
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
class Admin extends Authenticatable implements MustVerifyEmail {
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'admins';
    protected $fillable = ['name','email','password' ,'phone', 'status', 'type', 'password'];
    protected $hidden = ['remember_token',];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'status' => AdminStatus::class,
        'type'  => AdminType::class,
    ];

    public function profile(): HasOne {
        return $this->hasOne(related:AdminProfile::class, foreignKey:'admin_id');
    }

    public function scopeActive() {
        return $this->whereStatus('active')->get();
    }
}
