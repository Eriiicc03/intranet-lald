<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['date', 'time', 'city', 'pdf_info'])]
class Meeting extends Model
{
    protected $table = 'meeting';

    protected $primaryKey = 'id_meet';

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function photoMees(): HasMany
    {
        return $this->hasMany(PhotoMee::class, 'id_meet', 'id_meet');
    }
}
