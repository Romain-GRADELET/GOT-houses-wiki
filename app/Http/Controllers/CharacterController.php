<?php

namespace App\Http\Controllers;

use App\Models\Character;

class CharacterController extends Controller
{

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function findAll()
    {
        return Character::all();
    }

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function find($id)
    {
        return Character::findOrFail($id);
    }


}
