<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;



/*Route::get('/', function () {
    return 'PAGINA INICIAL';
});*/

Route::get('/', 'App\Http\Controllers\InicialController@paginainicial')->name('site.index');
Route::get('/cadastro', 'App\Http\Controllers\CadastroController@cadastro')->name('site.cadastro');
Route::get('/estoque', 'App\Http\Controllers\EstoqueController@estoque')->name('site.estoque');
Route::get('/relatorio', 'App\Http\Controllers\RelatorioController@relatorio')->name('site.relatorio');
Route::get('/cadastronovo', 'App\Http\Controllers\Cadastro_NovoController@cadastronovo')->name('site.cadastronovo');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/cadastroplayer', 'App\Http\Controllers\Cadastro_PlayerController@cadastro')->name('app.player.cadastroplayer');
    Route::get('/cadastromodem', 'App\Http\Controllers\Cadastro_ModemController@cadastro')->name('app.modem.cadastromodem');
    Route::get('/cadastrolocal', 'App\Http\Controllers\Cadastro_LocalController@cadastro')->name('app.local.cadastrolocal');
    Route::get('/equipamento', 'App\Http\Controllers\EquipamentoController@equipamento')->name('app.equipamento.equipamento');
});
