<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user', 'password'])]
#[Hidden(['password'])]
class Administrator extends Model
{
    protected $table = 'administrator';

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
