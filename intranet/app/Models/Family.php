<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Family extends Model
{
    protected $table = "family";

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function patient(): HasMany
    {
        return $this->hasMany(patient::class);
    }
}
