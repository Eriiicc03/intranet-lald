<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "service";

    public function families(): BelongsToMany
{
    return $this->belongsToMany(Family::class, 'request', 'id_service', 'user_id');
}

}
