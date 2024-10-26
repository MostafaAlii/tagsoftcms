<?php
namespace App\Console\Commands\Modules;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class CreateModule extends Command {
    protected $signature = 'make:module {name}';
    protected $description = 'Create a new module with optional Models';
    protected $modelName;
    public function handle() {
        $moduleName = $this->argument('name');
        $this->modelName = Str::singular($moduleName);
        $modulePath = base_path('Modules/' . Str::plural($moduleName));

        if (File::exists($modulePath)) {
            $this->error("Module {$moduleName} already exists!");
            return;
        }

        File::makeDirectory($modulePath, 0755, true);
        $this->info("Module {$moduleName} created successfully!");

        if ($this->confirm('Do you want to create a Models folder?')) {
            $modelsPath = $modulePath . '/Models';
            File::makeDirectory($modelsPath, 0755, true);
            $this->info("Models folder created successfully!");
            $this->createModel($modelsPath, $moduleName);
            if ($this->isTranslationPackageInstalled()) {
                $this->createTranslationModel($modelsPath, $moduleName);
            }
        }

        if ($this->confirm('Do you want to create Controllers?')) {
            $this->createControllers($modulePath, $moduleName);
        }

        if ($this->confirm('Do you want to create Migration, Seeder, and Factory files?')) {
            $this->createDatabaseFiles($modulePath);
        }
        $this->createConfigFolder($modulePath, $moduleName);
        $this->createRoutes($modulePath, $moduleName);
        $this->createResourceFolders($modulePath, $moduleName);
        $this->createServiceProvider($moduleName);
    }

    protected function createRoutes($modulePath, $moduleName) {
        $routesPath = $modulePath . '/routes';
        File::makeDirectory($routesPath, 0755, true);
        $webRouteFile = $routesPath . '/' . strtolower($moduleName) . '.php';
        $apiRouteFile = $routesPath . '/api.php';
        File::put($webRouteFile, "<?php\n\nuse Illuminate\Support\Facades\Route;\n\nRoute::prefix('" . strtolower($moduleName) . "')->group(function () {\n    // Web routes for {$moduleName}\n});\n");
        File::put($apiRouteFile, "<?php\n\nuse Illuminate\Support\Facades\Route;\n\nRoute::prefix('" . strtolower($moduleName) . "')->group(function () {\n    // API routes for {$moduleName}\n});\n");
        $this->info("Routes folder and files created successfully!");
    }

    /*protected function createConfigFolder($modulePath, $moduleName) {
        $configPath = $modulePath . '/config';
        $configFile = $configPath . '/config.php';
        if (!File::exists($configPath)) {
            File::makeDirectory($configPath, 0755, true);
            $this->info("Config folder created successfully!");
        }
        if (!File::exists($configFile)) {
            $configContent = "<?php\n\nreturn [\n    // Configuration options for the {$moduleName} module\n];\n";
            File::put($configFile, $configContent);
            $this->info("Config file created successfully in {$configPath}!");
        }
    }*/

    protected function createConfigFolder($modulePath, $moduleName) {
        $configPath = $modulePath . '/config';
        $configFile = $configPath . '/config.php';
        if (!File::exists($configPath)) {
            File::makeDirectory($configPath, 0755, true);
            $this->info("Config folder created successfully!");
        }
        if (!File::exists($configFile)) {
            $modulePrefix = strtolower($moduleName);
            $configContent = <<<EOT
                <?php

                return [
                    'prefix' => [
                        'web' => '{$modulePrefix}',
                        'api' => '{$modulePrefix}',
                    ]
                ];
                EOT;
            File::put($configFile, $configContent);
            $this->info("Config file created successfully in {$configPath}!");
        }
    }

    protected function createResourceFolders($modulePath, $moduleName) {
        $resourcesPath = $modulePath . '/resources';
        File::makeDirectory($resourcesPath, 0755, true);
        File::makeDirectory($resourcesPath . '/css', 0755, true);
        File::makeDirectory($resourcesPath . '/js', 0755, true);
        File::makeDirectory($resourcesPath . '/views', 0755, true);
        $this->info("Resources folder with css, js, and views created successfully!");
        $defaultLang = config('app.locale');
        $langPath = $resourcesPath . '/lang/' . $defaultLang;
        File::makeDirectory($langPath, 0755, true);
        $translationFile = $langPath . '/' . Str::lcfirst(Str::singular($moduleName)) . '.php';
        File::put($translationFile, "<?php\n\nreturn [\n    // Translation strings for {$moduleName}\n];\n");
        $this->info("Lang folder with default language created successfully!");
    }

    protected function createControllers($modulePath, $moduleName) {
        $controllersPath = $modulePath . '/Http/Controllers';
        $path = $modulePath . '/Http/';
        File::makeDirectory($controllersPath . '/Backend', 0755, true);
        File::makeDirectory($controllersPath . '/Frontend', 0755, true);
        File::makeDirectory($controllersPath . '/Api', 0755, true);
        $this->info("Controllers directories (Backend, Frontend, Api) created successfully!");

        if ($this->confirm('Do you want the controller to be a resource controller?')) {
            $this->createResourceController($controllersPath . '/Backend', $moduleName, "{$this->modelName}Controller");
            $this->createResourceController($controllersPath . '/Frontend', $moduleName, "{$this->modelName}Controller");
            $this->createResourceController($controllersPath . '/Api', $moduleName, "{$this->modelName}Controller");
        } else {
            $this->createRegularController($controllersPath . '/Backend', $moduleName, "{$this->modelName}Controller");
            $this->createRegularController($controllersPath . '/Frontend', $moduleName, "{$this->modelName}Controller");
            $this->createRegularController($controllersPath . '/Api', $moduleName, "{$this->modelName}Controller");
        }
        if ($this->confirm('Do you want to create Middleware and Requests folders?')) {
            $this->createAdditionalFolders($path, $moduleName);
        }
    }

    protected function createResourceController($path, $moduleName, $controllerName) {
        $folderName = $this->getFolderNameFromPath($path);
        $controllerFile = $path . '/' . $controllerName . '.php';
        $namespace = "Modules\\{$moduleName}\\Http\\Controllers\\{$folderName}";
        $controllerContent = "<?php\n\nnamespace {$namespace};\n\nuse Illuminate\\Http\\Request;\nuse App\\Http\\Controllers\\Controller;\n\nclass {$controllerName} extends Controller\n{\n    public function index() {\n        // Code for listing resources\n    }\n\n    public function create() {\n        // Code for showing create form\n    }\n\n    public function store(Request \$request) {\n        // Code for storing resource\n    }\n\n    public function show(\$id) {\n        // Code for showing single resource\n    }\n\n    public function edit(\$id) {\n        // Code for showing edit form\n    }\n\n    public function update(Request \$request, \$id) {\n        // Code for updating resource\n    }\n\n    public function destroy(\$id) {\n        // Code for deleting resource\n    }\n}\n";
        File::put($controllerFile, $controllerContent);
        $this->info("Resource Controller {$controllerName} created successfully in {$path}!");
    }

    protected function createRegularController($path, $moduleName, $controllerName) {
        $folderName = $this->getFolderNameFromPath($path);
        $controllerFile = $path . '/' . $controllerName . '.php';
        $namespace = "Modules\\{$moduleName}\\Http\\Controllers\\{$folderName}";
        $controllerContent = "<?php\n\nnamespace {$namespace};\n\nuse App\\Http\\Controllers\\Controller;\n\nclass {$controllerName} extends Controller\n{\n    public function index() {\n        // Regular Controller content here\n    }\n}\n";
        File::put($controllerFile, $controllerContent);
        $this->info("Regular Controller {$controllerName} created successfully in {$path}!");
    }

    protected function createAdditionalFolders($path, $moduleName) {
        $middlewarePath = $path . '/Middleware';
        if (!File::exists($middlewarePath)) {
            File::makeDirectory($middlewarePath, 0755, true);
            $this->info("Middleware folder created successfully!");
        }

        $requestsPath = $path . '/Requests';
        if (!File::exists($requestsPath)) {
            File::makeDirectory($requestsPath, 0755, true);
            $this->info("Requests folder created successfully!");
        }
    }

    protected function createModel($modelsPath, $moduleName) {
        $modelFile = $modelsPath . '/' . $this->modelName . '.php';
        $modelContent = "<?php\n\nnamespace Modules\\{$moduleName}\\Models;\n\nuse Illuminate\Database\Eloquent\Model;\n\nclass {$this->modelName} extends Model\n{\n    // Model content here\n}\n";
        File::put($modelFile, $modelContent);
        $this->info("Model {$this->modelName} created successfully!");
    }

    protected function createTranslationModel($modelsPath, $moduleName) {
        $translationModelFile = $modelsPath . '/' . $this->modelName . 'Translation.php';
        $translationModelContent = "<?php\n\nnamespace Modules\\{$moduleName}\\Models;\n\nuse Illuminate\Database\Eloquent\Model;\n\nclass {$this->modelName}Translation extends Model\n{\n    // Translation Model content here\n}\n";
        File::put($translationModelFile, $translationModelContent);
        $this->info("Translation Model {$this->modelName}Translation created successfully!");
    }

    protected function createDatabaseFiles($modulePath) {
        $databasePath = $modulePath . '/database';
        File::makeDirectory($databasePath . '/migrations', 0755, true);
        File::makeDirectory($databasePath . '/seeders', 0755, true);
        File::makeDirectory($databasePath . '/factories', 0755, true);
        $this->info("Database directories created successfully!");
        $migrationFile = $databasePath . '/migrations/' . date('Y_m_d_His') . '_create_' . Str::plural(strtolower($this->modelName)) . '_table.php';
        $migrationContent = "<?php\n\nuse Illuminate\\Database\\Migrations\\Migration;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Support\\Facades\\Schema;\n\nreturn new class extends Migration {\n    public function up() {\n        Schema::create('" . Str::plural(strtolower($this->modelName)) . "', function (Blueprint \$table) {\n            \$table->id();\n            \$table->timestamps();\n        });\n    }\n\n    public function down() {\n        Schema::dropIfExists('" . Str::plural(strtolower($this->modelName)) . "');\n    }\n};";
        File::put($migrationFile, $migrationContent);
        $this->info("Migration file created successfully!");
        $seederFile = $databasePath . '/seeders/' . $this->modelName . 'Seeder.php';
        $seederContent = "<?php\n\nnamespace Modules\\{$this->modelName}\\Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\n\nclass {$this->modelName}Seeder extends Seeder\n{\n    public function run() {\n        // Seeder content here\n    }\n}";
        File::put($seederFile, $seederContent);
        $this->info("Seeder file created successfully!");
        $factoryFile = $databasePath . '/factories/' . $this->modelName . 'Factory.php';
        $factoryContent = "<?php\n\nnamespace Modules\\{$this->modelName}\\Database\\Factories;\n\nuse Illuminate\\Database\\Eloquent\\Factories\\Factory;\n\nclass {$this->modelName}Factory extends Factory\n{\n    protected \$model = \Modules\\{$this->modelName}\\Models\\{$this->modelName}::class;\n\n    public function definition() {\n        return [\n            // Factory definition here\n        ];\n    }\n}";
        File::put($factoryFile, $factoryContent);
        $this->info("Factory file created successfully!");
        if ($this->isTranslationPackageInstalled()) {
            $translationMigrationFile = $databasePath . '/migrations/' . date('Y_m_d_His', strtotime('+1 second')) . '_create_' . Str::singular(strtolower($this->modelName)) . '_translations_table.php';
            $translationMigrationContent = "<?php\n\nuse Illuminate\\Database\\Migrations\\Migration;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Support\\Facades\\Schema;\n\nreturn new class extends Migration {\n    public function up() {\n        Schema::create('" . Str::singular(strtolower($this->modelName)) . "_translations', function (Blueprint \$table) {\n            \$table->id();\n            \$table->foreignId('" . strtolower($this->modelName) . "_id')->constrained('" . Str::plural(strtolower($this->modelName)) . "')->onDelete('cascade');\n            \$table->string('locale')->index();\n            \$table->unique(['" . strtolower($this->modelName) . "_id', 'locale']);\n            // Add your translated fields here\n            \$table->timestamps();\n        });\n    }\n\n    public function down() {\n        Schema::dropIfExists('" . Str::singular(strtolower($this->modelName)) . "_translations');\n    }\n};";
            File::put($translationMigrationFile, $translationMigrationContent);
            $this->info("Translation Migration file created successfully!");
        }
    }

    protected function isTranslationPackageInstalled() {
        return class_exists(\Astrotomic\Translatable\TranslatableServiceProvider::class);
    }

    protected function getFolderNameFromPath($path) {
        $folders = explode('/', $path);
        return end($folders);
    }

    protected function createServiceProvider($moduleName) {
        $generator = new \App\Generators\ServiceProviderGenerator();
        $providerData = $generator->generate($moduleName);
        $providerPath = base_path("Modules/{$moduleName}/Providers");
        if (!file_exists($providerPath))
            mkdir($providerPath, 0755, true);
        file_put_contents("{$providerPath}/{$providerData['serviceProviderName']}.php", $providerData['content']);
        $this->info("{$providerData['serviceProviderName']} created successfully!");
    }
}
