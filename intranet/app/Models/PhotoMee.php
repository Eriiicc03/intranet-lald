<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['path', 'id_meet'])]
class PhotoMee extends Model
{
    protected $table = 'photo_mee';

    protected $primaryKey = 'id_photo';

    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class, 'id_meet', 'id_meet');
    }
}
