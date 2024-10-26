<?php
namespace Modules\Permissions\Providers;
use App\Providers\ModuleServiceProvider;

class PermissionServiceProvider extends ModuleServiceProvider {
    public function boot() {
        $this->loadAllModulesConfig();
        $this->load_routes();
        //dd(config());
    }

    public function register() {

    }
}
