<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['type'])]
class Service extends Model
{
    protected $table = 'service';

    protected $primaryKey = 'id_service';

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class, 'id_service', 'id_service');
    }
}
