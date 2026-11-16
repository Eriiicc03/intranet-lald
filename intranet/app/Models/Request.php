<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'id_service', 'status', 'observations'])]
class Request extends Model
{
    protected $table = 'request';

    protected $primaryKey = 'user_id';

    public $incrementing = false;

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'user_id', 'user_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'id_service', 'id_service');
    }

    protected function setKeysForSaveQuery($query)
    {
        return $query
            ->where('user_id', $this->getOriginal('user_id', $this->getAttribute('user_id')))
            ->where('id_service', $this->getOriginal('id_service', $this->getAttribute('id_service')));
    }
}
