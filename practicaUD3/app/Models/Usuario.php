<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['nombre','correo','perfil_id','plan_id'];

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }

    public function Planes()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
