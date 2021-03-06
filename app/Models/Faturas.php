<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faturas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_fatura',
        'preco',
        'fechamento',
        'status'
    ];
}
