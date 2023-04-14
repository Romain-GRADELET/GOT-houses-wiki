<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    // Définition du nom de la table
    protected $table = 'house';

    /**
     * The characters that belong to the house
     */
    public function characters()
    {
        return $this->belongsToMany(Character::class, 'house_has_characters','house', 'character');
    }



}
