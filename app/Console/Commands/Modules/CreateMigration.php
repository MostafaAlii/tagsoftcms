<?php
namespace App\Console\Commands\Modules;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class CreateMigration extends Command {
    protected $signature = 'make:migration {table} {module}';
    protected $description = 'Create a new migration file for a specified table in a specified module';
    public function handle() {
        $tableName = $this->argument('table');
        $moduleName = ucfirst($this->argument('module'));
        $modulePath = base_path('Modules/' . Str::plural($moduleName) . '/database/migrations');
        if (!File::exists($modulePath)) {
            $this->error("Module {$moduleName} does not exist!");
            return;
        }
        $migrationFileName = date('Y_m_d_His') . '_create_' . $tableName . '_table.php';
        $migrationFilePath = $modulePath . '/' . $migrationFileName;
        if (File::exists($migrationFilePath)) {
            $this->error("Migration for table {$tableName} already exists in module {$moduleName}!");
            return;
        }
        $migrationContent = "<?php\n\nuse Illuminate\\Database\\Migrations\\Migration;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Support\\Facades\\Schema;\n\nreturn new class extends Migration {\n    public function up() {\n        Schema::create('{$tableName}', function (Blueprint \$table) {\n            \$table->id();\n            \$table->timestamps();\n        });\n    }\n\n    public function down() {\n        Schema::dropIfExists('{$tableName}');\n    }\n};";
        File::put($migrationFilePath, $migrationContent);
        $this->info("Migration file for table {$tableName} created successfully in module {$moduleName}!");
    }
}
