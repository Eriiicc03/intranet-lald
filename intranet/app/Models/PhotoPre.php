<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoPre extends Model
{
    protected $table = "photo_pre";
    
    public function presentation(): BelongsTo {
        return $this->belongsTo(Presentation::class);
    }
}
