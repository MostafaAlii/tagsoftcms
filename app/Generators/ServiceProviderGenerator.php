<?php
namespace App\Generators;
class ServiceProviderGenerator {
    public function generate($moduleName) {
        $serviceProviderName = $this->getServiceProviderName($moduleName);
        $namespace = "Modules\\{$moduleName}\\Providers";
        $content = $this->getServiceProviderTemplate($namespace, $serviceProviderName);
        return compact('serviceProviderName', 'content');
    }

    private function getServiceProviderName($moduleName) {
        if (str_ends_with($moduleName, 's') && strlen($moduleName) > 2) {
            return rtrim($moduleName, 's') . 'ServiceProvider';
        }
        return "{$moduleName}ServiceProvider";
    }

    private function getServiceProviderTemplate($namespace, $serviceProviderName) {
        return <<<EOT
                <?php
                namespace {$namespace};
                use App\Providers\ModuleServiceProvider;
                class {$serviceProviderName} extends ModuleServiceProvider {
                    /**
                     * Bootstrap any application services.
                     *
                     * @return void
                     */
                    public function boot() {
                        \$this->loadAllModulesConfig();
                        \$this->load_routes();
                    }

                    /**
                     * Register any application services.
                     *
                     * @return void
                     */
                    public function register() {

                    }
                }
                EOT;
    }
}
