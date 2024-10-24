<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('permission_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission_id')->constrained('permissions')->onDelete('cascade');
            $table->string('locale')->index();
            $table->unique(['permission_id', 'locale']);
            // Add your translated fields here
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('permission_translations');
    }
};