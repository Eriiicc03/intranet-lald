<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $table = "presentation";

    public function photoPres(): HasMany {
        return $this -> hasMany(PhotoPre::class);
    }
}
