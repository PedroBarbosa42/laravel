
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaudacaoController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/produto/{id}', function ($id) {
    return "Exibindo detalhes do produto número: " . $id;
});

Route::get('/produtos', function () {
    $produtos = ['Notebook', 'Monitor', 'Teclado'];

    return view('produtos', compact('produtos'));
});

Route::get('/saudacao', [SaudacaoController::class, 'exibirMensagem']);
