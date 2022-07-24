<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nome = "Natanael";
    $idade = 25;
    $sexo = "M";

    $arr = [10,20,30,40,50];

    $nomes = ["João","José","Rita","Bruno","Diego"];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => "programador", 
        'sexo' => $sexo,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

//ROTA COM PARAMETRO OBRIGATORIO
//O valor recebido no parametro do endpoint passa para a function como ID e só então poder passar para a VIEW como outro parametro
Route::get('/aluno/{id}', function ($id) {

    return view('aluno', ['id' => $id]);
});

//ROTA COM PARAMETRO OPCIONAL
//O valor recebido no parametro do endpoint passa para a function como ID e só então poder passar para a VIEW como outro parametro
Route::get('/aluno2/{id?}', function ($id = null) {

    return view('aluno', ['id' => $id]);
});