<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matricula
 *
 * @property $id
 * @property $idEstudiante
 * @property $idPeriodo
 * @property $idmateria
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matricula extends Model
{
    
    static $rules = [
		'idEstudiante' => 'required',
		'idPeriodo' => 'required',
		'idmateria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEstudiante','idPeriodo','idmateria'];



}
