<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = "patient";

    public function patient():BelongsTo
    {
        return $this->BelongsTo(family::class);
    }
}

