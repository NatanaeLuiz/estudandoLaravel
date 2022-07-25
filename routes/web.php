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

//Caminho dos controles
use App\Http\Controllers\EventController;

//Rotas do dos metodos
Route::get('/', [EventController::class, 'index']);
Route::get('/estudo', [EventController::class, 'index2']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

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