<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CharacterController;

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

//==========================================================================
// ROUTE => CHARACTER
//==========================================================================
#region
/**
 *--------------------------------------------------------------------------
 * Route permettant d'afficher la liste des taches
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/api/character
 * Controller : CharacterController
 * Méthode : findAll()
 * Nom de la route : character-list
 */
Route::get('/character', [
    CharacterController::class,
    'findAll'
])->name('character-list');

/**
 *--------------------------------------------------------------------------
 * Route permettant d'afficher la liste des taches
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/api/character/{id}
 * Controller : CharacterController
 * Méthode : find()
 * Nom de la route : character-find
 */
Route::get('/character/{id}', [
    CharacterController::class,
    'find'
])->whereNumber('id')->name('character-list');
