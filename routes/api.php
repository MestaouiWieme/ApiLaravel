<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/users', UtilisateurController::class);

/*Route::get('/users',[UtilisateurController::class,'index']);

//Avoir un utilisateur precis

Route::get('/users/{id}',[UtilisateurController::class,'show']);

//Creer un nouvel utilisateur

Route::post('/users',[UtilisateurController::class,'store']);

// Mettre a jour un utilisateur

Route::put('/users/{id}',[UtilisateurController::class,'update']);

//Supprimer un utilisateur

Route::delete('/users/{id}',[UtilisateurController::class,'destroy']);*/
