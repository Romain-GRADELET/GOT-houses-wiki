<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HouseController;

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
 * Route permettant d'afficher la liste des personnages
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/api/character
 * Controller : CharacterController
 * Méthode : list()
 * Nom de la route : character-list
 */
Route::get('/character', [
    CharacterController::class,
    'list'
])->name('character-list');

/**
 *--------------------------------------------------------------------------
 * Route permettant d'afficher un personnage
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/api/character/{id}
 * Controller : CharacterController
 * Méthode : show()
 * Nom de la route : character-show
 */
Route::get('/character/{id}', [
    CharacterController::class,
    'show'
])->whereNumber('id')->name('character-show');

//==========================================================================
// ROUTE => HOUSE
//==========================================================================
#region
/**
 *--------------------------------------------------------------------------
 * Route permettant d'afficher la liste des maisons
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/api/house
 * Controller : HouseController
 * Méthode : list()
 * Nom de la route : house-list
 */
Route::get('/house', [
    HouseController::class,
    'list'
])->name('house-list');

/**
 *--------------------------------------------------------------------------
 * Route permettant d'afficher une maison
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/api/house/{id}
 * Controller : HouseController
 * Méthode : show()
 * Nom de la route : house-show
 */
Route::get('/house/{id}', [
    HouseController::class,
    'show'
])->whereNumber('id')->name('house-show');
