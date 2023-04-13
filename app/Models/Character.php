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
        return $this->belongsToMany(House::class, 'house_has_characters','character','house');
    }

    /**
     * The character that belong to the title
     */
    public function title()
    {
        return $this->belongsTo(Title::class,'id_title');
    }


    public function mother()
    {
        return $this->belongsTo(Character::class);
    }


    public function father()
    {
        return $this->belongsTo(Character::class);
    }

}
