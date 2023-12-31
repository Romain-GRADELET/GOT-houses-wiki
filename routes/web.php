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
    return view ('welcome');
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
    'findHomepage'
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
    'findCharacter'
 ])->whereNumber('id')->name('main.character');

//==========================================================================
// ROUTE => HOUSE
//==========================================================================
/*--------------------------------------------------------------------------
 * Route permettant d'afficher la liste des maisons
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/house
 * Controller : DisplayController
 * Méthode : ()
 * Nom de la route : main.house
 */
Route::get('/house', [
    DisplayController::class,
    'housesList'
 ])->name('main.house');

 /*--------------------------------------------------------------------------
 * Route permettant d'afficher une maison précise
 *--------------------------------------------------------------------------
 * Méthode HTTP : GET
 * Chemin : http://localhost:8000/house/{id}
 * Controller : DisplayController
 * Méthode : ()
 * Nom de la route : main.houseDetail
 */
Route::get('/house/{id}', [
    DisplayController::class,
    'housesDetail'
 ])->whereNumber('id')->name('main.houseDetail');