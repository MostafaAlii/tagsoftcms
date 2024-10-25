<?php

namespace Modules\Permissions\Providers;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider {
    public function boot() {
        dd('permission service provider');
    }

    public function register() {
        
    }
}
