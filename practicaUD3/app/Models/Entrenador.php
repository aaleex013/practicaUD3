<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'entrenador';

    protected $fillable = ['nombre','especializacion'];
}
