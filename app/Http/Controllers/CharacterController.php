<?php

namespace App\Http\Controllers;

use App\Models\Character;

class CharacterController extends Controller
{

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function list()
    {
        $characters = Character::all()->load('houses','titles');
        return $characters;
    }

    // Méthode permettant de récupérer un seul personnage
    public static function show($id)
    {
        $character = Character::findOrFail($id)->load('houses', 'titles');
        return $character;
    }

}
