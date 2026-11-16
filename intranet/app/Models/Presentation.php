<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['speaker', 'date', 'city', 'minutes', 'address'])]
class Presentation extends Model
{
    protected $table = 'presentation';

    protected $primaryKey = 'id_pres';

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function photoPres(): HasMany
    {
        return $this->hasMany(PhotoPre::class, 'id_pres', 'id_pres');
    }
}
