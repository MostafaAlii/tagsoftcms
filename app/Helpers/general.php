<?php

if (!function_exists('get_user_data')) {
    function get_user_data() {
        $guards = ['admin', 'web', 'employee'];
        foreach ($guards as $guard) {
            if (auth($guard)->check())
                return auth($guard)->user();
        }
        return null;
    }
}

if (!function_exists('require_api_routes')) {
    function require_api_routes() {
        $files = glob(base_path('routes/api/*.php'));
        foreach ($files as $file) {
            if ($file != base_path('routes/api/api.php'))
                require_once $file;
        }
    }
}