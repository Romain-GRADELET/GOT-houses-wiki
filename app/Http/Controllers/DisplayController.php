<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Controllers\CharacterController;

class DisplayController extends Controller
{

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function findHomepage()
    {
        return view('homepage', ['characters' => CharacterController::findAll()]);
    }

     // Méthode permettant de récupérer l'ensemble des personnages
     public static function findCharacter($id)
     {
        return view('biographie', ['characterData' => CharacterController::find($id)]);
     }

}
