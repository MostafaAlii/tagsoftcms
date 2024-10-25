<?php
namespace Modules\Permissions\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;
use Modules\Permission\Enums\{PermissionStatus};
class Permission extends Model {
    use HasFactory, HasUuid;
    protected $table = 'permissions';
    protected $fillable = ['uuid', 'status'];
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];
    protected $casts = [
        'status' => PermissionStatus::class,
    ];
}
