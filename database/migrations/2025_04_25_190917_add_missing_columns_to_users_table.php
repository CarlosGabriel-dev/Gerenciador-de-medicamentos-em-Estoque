<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adiciona coluna 'name' se não existir
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name')->after('id');
            }
            
            // Adiciona coluna 'last_name' se não existir
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->after('name');
            }
            
            // Adiciona coluna 'role' se não existir
            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->after('password');
            }
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
