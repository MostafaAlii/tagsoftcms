<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{File, Log};
class ModuleServiceProvider extends ServiceProvider {
    public function boot() {
        $this->registerModuleProviders();
    }

    public function register() {
        //
    }

    protected function registerModuleProviders() {
        $modulesPath = base_path('Modules');
        if (File::exists($modulesPath)) {
            $modules = File::directories($modulesPath);
            foreach ($modules as $module) {
                $moduleName = basename($module);
                if (strlen($moduleName) > 1 && substr($moduleName, -1) === 's') {
                    $moduleNameSingular = substr($moduleName, 0, -1);
                } else {
                    $moduleNameSingular = $moduleName;
                }
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$moduleNameSingular}ServiceProvider";
                if (class_exists($providerClass)) {
                    $this->app->register($providerClass);
                } else {
                    Log::warning("Service Provider for module {$moduleName} not found.");
                }
            }
        }
    }
}
