<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    // Indicar a tabela do banco de dados
    protected $table = 'contas';

    // Indicar quais colunas podem ser cadastradas no banco de dados
    protected $fillable = ['nome', 'valor', 'vencimento'];
}
