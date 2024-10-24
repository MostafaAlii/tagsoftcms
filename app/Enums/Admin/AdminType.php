<?php
namespace App\Enums\Admin;
enum AdminType: string {
    case SUPERVISOR = 'supervisor';
    case ADMIN = 'admin';

    public static function status($value): string {
        if ($value == self::ADMIN) {
            return '<span class="badge badge-success">' .trans('general.admin') .'</span>';
        } elseif ($value == self::SUPERVISOR){
            return '<span class="badge badge-primary">' .trans('general.supervisor') .'</span>';
        } else {
            return '<span class="badge badge-default">' .trans('general.not_type_assigned') .'</span>';
        }
    }
}
