<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = ['NombreProyecto', 'fuenteFondos', 'MontoPlanificado', 'MontoPatrocinado', 'MontoFondosPropios'];
}
