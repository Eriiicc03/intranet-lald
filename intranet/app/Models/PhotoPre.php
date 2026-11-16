<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['path', 'id_pres'])]
class PhotoPre extends Model
{
    protected $table = 'photo_pre';

    protected $primaryKey = 'id_photo';

    public function presentation(): BelongsTo
    {
        return $this->belongsTo(Presentation::class, 'id_pres', 'id_pres');
    }
}
