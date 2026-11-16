<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['user_id', 'photo_consent', 'whatsapp_consent', 'data_consent', 'address'])]
class Family extends Model
{
    protected $table = 'family';

    protected $primaryKey = 'user_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'photo_consent' => 'boolean',
            'whatsapp_consent' => 'boolean',
            'data_consent' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class, 'id_fam', 'user_id');
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class, 'user_id', 'user_id');
    }
}
