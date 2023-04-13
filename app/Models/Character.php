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

    /**
     * Relation entre primary_key : id et foreign_key: mother_id
     */
    public function mother()
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Relation entre primary_key : id et foreign_key: father_id
     */
    public function father()
    {
        return $this->belongsTo(Character::class);
    }

}
