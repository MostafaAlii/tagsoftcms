    <?php

    use Illuminate\Support\Facades\Route;
    Route::prefix(config('modules.general.prefix.web'))->group(function () {
        Route::prefix(config('permissions_module_config.prefix.web'))->group(function () {
            Route::get('/', function () {
                return 'permissions module';
            });
        });
    });
