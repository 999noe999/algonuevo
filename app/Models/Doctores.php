<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo', 'especialidadesId'];

    public function especialidades()
    {
        return $this->belongsTo(Especialidades::class, 'especialidadesId');
    }
}

