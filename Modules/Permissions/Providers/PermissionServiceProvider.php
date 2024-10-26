<?php
namespace Modules\Permissions\Providers;
use App\Providers\ModuleServiceProvider;
class PermissionServiceProvider extends ModuleServiceProvider {
    public function boot() {
        $this->load_routes();
    }

    public function register() {

    }
}
