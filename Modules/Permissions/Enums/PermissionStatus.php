<?php
namespace Modules\Permission\Enums;
enum PermissionStatus: string {
    case ACTIVE = 'active';
    case IN_ACTIVE = 'inactive';
    public static function status($value): string {
        if ($value == self::ACTIVE) {
            return '<span class="badge badge-success">' . trans('general.active') . '</span>';
        } elseif ($value == self::IN_ACTIVE) {
            return '<span class="badge badge-warning">' . trans('general.in_active') . '</span>';
        } else {
            return '<span class="badge badge-default">' . trans('general.not_status_assigned') . '</span>';
        }
    }
}
