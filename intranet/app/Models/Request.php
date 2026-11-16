<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = "request";

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'user_id', 'user_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'id_service', 'id_service');
    }
}
