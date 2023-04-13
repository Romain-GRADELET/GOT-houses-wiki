<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CharacterController;

class DisplayController extends Controller
{

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function findHomepage()
    {
        return view('home', ['characters' => CharacterController::list()]);
    }

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function findCharacter($id)
    {
        return view('character', ['character' => CharacterController::show($id)]);
    }

    // Méthode permettant de récupérer l'ensemble des maison
    public static function housesList()
    {
        return view('house', ['houses' => HouseController::list()]);
    }
}
