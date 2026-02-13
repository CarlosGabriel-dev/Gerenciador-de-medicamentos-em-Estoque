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
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->id();
            
            // Relacionamento: Qual medicamento foi movimentado?
            // Certifique-se que sua tabela de remedios se chama 'medicamentos' ou ajuste aqui
            $table->foreignId('medication_id')->constrained('medications')->onDelete('cascade');
            
            // Relacionamento: Quem fez a movimentação? (Opcional, mas bom para auditoria)
            $table->foreignId('user_id')->nullable()->constrained('users');

            // Tipo: 'entrada' ou 'saida'
            $table->enum('tipo', ['entrada', 'saida']);
            
            // Quantidade movimentada
            $table->integer('quantidade');
            
            // Observação (Motivo da perda, número da nota fiscal, etc)
            $table->text('observacao')->nullable();

            $table->timestamps(); // Cria 'created_at' (Data) e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacaos');
    }
};
