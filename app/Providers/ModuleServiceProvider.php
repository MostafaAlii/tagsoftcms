<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{File, Log};

class ModuleServiceProvider extends ServiceProvider {
    protected $ds = DIRECTORY_SEPARATOR;
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

    protected function load_routes() {
        $moduleName = str_replace('ServiceProvider', '', class_basename($this));
        $moduleNamePlural = ucfirst(strtolower($moduleName)) . 's';
        $routesPath = base_path("Modules/{$moduleNamePlural}/routes/*.php");
        $routeFiles = glob($routesPath);
        if (empty($routeFiles)) {
            Log::warning('No route files found in: ' . $routesPath);
        } else {
            Log::info('Route files found: ' . json_encode($routeFiles));
        }
        foreach ($routeFiles as $routeFile) {
            $this->loadRoutesFrom($routeFile);
            Log::info('Loaded route file: ' . $routeFile);
        }
    }

    protected function loadAllModulesConfig() {
        $modulesPath = base_path('Modules');
        if (File::exists($modulesPath)) {
            $modules = File::directories($modulesPath);
            foreach ($modules as $module) {
                $moduleName = strtolower(basename($module));
                $configPath = $module . $this->ds . 'config' . $this->ds . 'config.php';
                if (File::exists($configPath)) {
                    config([
                        "{$moduleName}_module_config" => File::getRequire($configPath),
                    ]);
                    Log::info("Configuration loaded for module: {$moduleName}");
                } else {
                    Log::warning("Config file not found for module: {$moduleName}");
                }
            }
        } else {
            Log::warning("Modules directory not found at path: {$modulesPath}");
        }
    }

}
