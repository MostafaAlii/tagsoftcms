<?php
declare (strict_types = 1);
namespace App\Models\Concerns;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
trait HasUuid {
    public static function bootHasUuid(): void {
        static::creating(function (Model $model) {
            $model->uuid = (string) Str::uuid()->toString();
        });
    }
}