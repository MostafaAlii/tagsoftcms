<?php
namespace App\Generators;
class RouteTemplateGenerator {
    public function generateWebRouteContent($modulePrefix) {
        return <<<EOT
            <?php

            use Illuminate\Support\Facades\Route;
            Route::prefix(config('modules.general.prefix.web'))->group(function () {
                Route::prefix(config('{$modulePrefix}_module_config.prefix.web'))->group(function () {
                    Route::get('/', function () {
                        return '{$modulePrefix} module';
                    });
                });
            });
        EOT;
    }

    public function generateApiRouteContent($modulePrefix) {
        return <<<EOT
            <?php

            use Illuminate\Support\Facades\Route;

            Route::prefix(config('modules.general.prefix.api.prefix') . '/' . config('modules.general.prefix.api.version'))->group(function () {
                    Route::prefix(config('{$modulePrefix}_module_config.prefix.api'))->group(function () {
                        Route::get('/', function () {
                            return '{$modulePrefix} api module';
                        });
                    });
            });
        EOT;
    }
}

