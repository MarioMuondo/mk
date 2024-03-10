<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\NotificacaoController;
/*Route::get('/creat',[tUserController::class,'create']);
Route::post('/create',[tUserController::class,'store']);
Route::get('/{id}/edit',[tUserController::class,'edit']);
Route::put('/{id}/update1',[tUserController::class,'update']);*/
Route::get('/notificacao/{Notificacao}',[notificacaoController::class,'show']);
Route::get('/',[notificacaoController::class,'index']);
Route::delete('/delete/{Notificacao}',[notificacaoController::class,'destroy']);
Route::post('/create/',[notificacaoController::class,'store']);
Route::put('/update/{Notificacao}',[notificacaoController::class,'update']);
