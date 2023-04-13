<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    // Définition du nom de la table
    protected $table = 'character';

    /**
     * The houses that belong to the character
     */
    public function houses()
    {
        return $this->belongsToMany(Character::class);
    }


}
