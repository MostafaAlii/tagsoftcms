    <?php
    use Illuminate\Support\Facades\Route;
    Route::prefix(config('modules.general.prefix.api.prefix') . '/' . config('modules.general.prefix.api.version'))->group(function () {
            Route::prefix(config('permissions_module_config.prefix.api'))->group(function () {
                Route::get('/', function () {
                    return 'permissions api module';
                });
            });
    });
