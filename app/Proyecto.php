<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $Id
 * @property $NombreProyecto
 * @property $fuenteFondos
 * @property $MontoPlanificado
 * @property $MontoPatrocinado
 * @property $MontoFondosPropios
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'Id' => 'required',
		'NombreProyecto' => 'required',
		'fuenteFondos' => 'required',
		'MontoPlanificado' => 'required',
		'MontoPatrocinado' => 'required',
		'MontoFondosPropios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id','NombreProyecto','fuenteFondos','MontoPlanificado','MontoPatrocinado','MontoFondosPropios'];



}
