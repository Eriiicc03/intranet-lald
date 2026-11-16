<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['id_fam', 'name', 'birth_date'])]
class Patient extends Model
{
    protected $table = 'patient';

    protected $primaryKey = 'id_pat';

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
        ];
    }

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'id_fam', 'user_id');
    }
}
