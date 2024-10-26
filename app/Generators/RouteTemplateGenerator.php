<?php
namespace App\Generators;
class RouteTemplateGenerator {

    /**
     * Generate the web route content for a specific module.
     *
     * @param string $modulePrefix The prefix for the module.
     * @return string
     */
    public function generateWebRouteContent($modulePrefix)
    {
        return <<<EOT
            <?php

            use Illuminate\Support\Facades\Route;

            Route::prefix('{$modulePrefix}')->group(function () {
                Route::get('/', function () {
                    return '{$modulePrefix} module';
                });
            });
        EOT;
    }

    /**
     * Generate the API route content for a specific module.
     *
     * @param string $modulePrefix The prefix for the module.
     * @return string
     */
    public function generateApiRouteContent($modulePrefix) {
        return <<<EOT
            <?php

            use Illuminate\Support\Facades\Route;

            Route::prefix('api')->group(function () {
                Route::prefix('{$modulePrefix}')->group(function () {
                    Route::get('/', function () {
                        return '{$modulePrefix} api module';
                    });
                });
            });
        EOT;
    }
}

