<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('admin_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade');
            $table->string('locale')->index();
            $table->unique(['admin_id', 'locale']);
            // Add your translated fields here
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('admin_translations');
    }
};