<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    // Définition du nom de la table
    protected $table = 'title';

    /**
     * The houses that belong to the character
     */
    public function characters()
    {
        return $this->hasMany(Character::class);
    }


}