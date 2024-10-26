<?php
namespace Modules\Admins\Providers;
use App\Providers\ModuleServiceProvider;
class AdminServiceProvider extends ModuleServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->load_routes();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {

    }
}