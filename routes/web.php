<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DisplayController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//==========================================================================
// ROUTE => TEST
//==========================================================================
#region
/**
 * Méthode HTTP : GET
 * Chemin : http://localhost:8080/test
 */
Route::get('/test', function(){
    return "page de test front ";
});

//==========================================================================
// ROUTE => HOMEPAGE
//==========================================================================
#region
/*--------------------------------------------------------------------------
 * Route permettant d'afficher la liste des personnages sur la homepage
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/character
 * Controller : DisplayController
 * Méthode : index()
 * Nom de la route : main.home
 */
 Route::get('/', [
    DisplayController::class,
    'findAll'
 ])->name('main.home');

/*--------------------------------------------------------------------------
 * Route permettant d'afficher un personnage
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/character/{id}
 * Controller : DisplayController
 * Méthode : ()
 * Nom de la route : main.character
 */
Route::get('/character/{id}', [
    DisplayController::class,
    'find'
 ])->whereNumber('id')->name('main.character');











// Route::get('/', function(){
//     return view('homepage', ['characters' => CharacterController::findAll()]);
// });
