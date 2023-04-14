<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HouseController;

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

    // Méthode permettant de récupérer l'ensemble des maison
    public static function housesDetail($id)
    {
        return view('houseDetail', ['house' => HouseController::show($id)]);
    }

}
