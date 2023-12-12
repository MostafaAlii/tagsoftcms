<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadRepositories();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    /*protected function loadRepositories() {
        $repositoryPath = app_path('Repositories/Eloquents');
        $files = scandir($repositoryPath);
        foreach ($files as $file) {
            if (!str_ends_with($file, '.php')) 
                continue;
            $filename = basename($file, '.php');
            $repositoryClass = "App\\Repositories\\Eloquents\\{$filename}";
            $interface = "App\\Repositories\\Contracts\\{$filename}Interface";
            if (class_exists($repositoryClass) && interface_exists($interface)) 
                $this->app->bind($interface, $repositoryClass);
        }
    }*/

    protected function loadRepositories() {
        $repositoryPath = app_path('Repositories/Eloquents');
        $contractPath = app_path('Repositories/Contracts');
        if (!is_dir($repositoryPath) || !is_dir($contractPath)) 
            return;
        $repositoryFiles = scandir($repositoryPath);
        $contractFiles = scandir($contractPath);
        foreach ($repositoryFiles as $file) {
            if (!str_ends_with($file, '.php')) 
                continue;
            $filename = basename($file, '.php');
            $repositoryClass = "App\\Repositories\\Eloquents\\{$filename}";
            $interface = "App\\Repositories\\Contracts\\{$filename}Interface";
            if (class_exists($repositoryClass) && interface_exists($interface)) 
                $this->app->bind($interface, $repositoryClass);
            
        }
    }
}