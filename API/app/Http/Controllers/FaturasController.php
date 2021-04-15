<?php

namespace App\Http\Controllers;

use App\Models\Faturas;
use Illuminate\Http\Request;

class FaturasController extends Controller
{
    public function index()
    {
        return Faturas::all();
    }

    public function store()
    {
        request()->validate([
            'nome_fatura' => 'required',
            'preco' => 'required',
            'fechamento' => 'required'
        ]);
    
        return Faturas::create([
            'nome_fatura' => request('nome_fatura'),
            'preco' => request('preco'),
            'fechamento' => request('fechamento')
        ]);
    }

    public function update(Faturas $faturas)
    {
        request()->validate([
            'nome_fatura' => 'required',
            'preco' => 'required',
            'fechamento' => 'required'
        ]);
    
        $faturas->update([
            'nome_fatura' => request('nome_fatura'),
            'preco' => request('preco'),
            'fechamento' => request('fechamento')
        ]);
    }

    public function delete(Faturas $faturas)
    {
        $sucesso = $faturas->delete();

        return [
            'sucesso' => $sucesso
        ];
    }
}
