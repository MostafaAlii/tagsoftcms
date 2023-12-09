<?php
declare(strict_types=1);
namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class AdminProfile extends BaseModel {
    protected $table = 'admin_profiles';
    protected $fillable = ['name','bio','admin_id', 'uuid'];

    public function owner(): BelongsTo {
        return $this->belongsTo(related:Admin::class, foreignKey:'admin_id');
    }
}