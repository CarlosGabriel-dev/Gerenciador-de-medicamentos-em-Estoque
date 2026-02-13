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
        Schema::table('medications', function (Blueprint $table) {
            $table->integer('ideal_quantity')->nullable();   // Adicionando Quantidade Ideal
            $table->integer('minimum_quantity')->nullable(); // Adicionando Quantidade Mínima
            $table->date('expiration_date')->nullable();     // Adicionando Validade
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medications', function (Blueprint $table) {
            //
        });
    }
};
