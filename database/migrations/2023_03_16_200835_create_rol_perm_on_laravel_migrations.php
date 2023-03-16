<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('model_role', function (Blueprint $table) {
            $table->id();
            $table->morphs('rel');
            $table->unsignedInteger('role_id')->index();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('role_permission', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('permission_id');
            $table->index(['role_id', 'permission_id']);
        });

//        Schema::create('rol_perm_on_laravel_migrations', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::dropIfExists('rol_perm_on_laravel_migrations');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('model_role');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('role_permission');
    }
};
