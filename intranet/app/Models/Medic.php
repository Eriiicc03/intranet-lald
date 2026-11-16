<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    protected $table = "medic";

    public function user():HasOne
    {
        return $this->hasOne(medic::class);
    }

}
