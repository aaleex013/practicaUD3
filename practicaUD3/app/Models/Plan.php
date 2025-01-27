<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';

    protected $fillable = ['nombre','precio'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'plan_id');
    }
}
