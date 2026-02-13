<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    // Define o nome da tabela (o Laravel as vezes confunde o plural em português)
    protected $table = 'movimentacoes';

    // Campos que podem ser preenchidos via formulário (Mass Assignment)
    protected $fillable = [
        'medication_id',
        'user_id',
        'tipo',
        'quantidade',
        'observacao'
    ];

    // RELACIONAMENTOS

    /**
     * Uma movimentação pertence a um Medicamento.
     */
    public function medicamento()
    {
        return $this->belongsTo(Medication::class);
    }

    /**
     * Uma movimentação foi feita por um Usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}