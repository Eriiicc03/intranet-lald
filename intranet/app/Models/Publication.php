<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['author', 'year', 'url', 'journal'])]
class Publication extends Model
{
    protected $table = 'publication';

    protected $primaryKey = 'id_pub';
}
