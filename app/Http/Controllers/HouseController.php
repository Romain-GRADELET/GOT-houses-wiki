<?php

namespace App\Http\Controllers;

use App\Models\House;

class HouseController extends Controller
{

    // Méthode permettant de récupérer l'ensemble des personnages
    public static function list()
    {
        $houses = House::all();
        return $houses;
    }

    // Méthode permettant de récupérer un seul personnage
    public static function show($id)
    {
        $house = House::findOrFail($id);
        return $house;
    }

}
