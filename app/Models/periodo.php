<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $name
 * @property $date_ini
 * @property $date_fin
 * @property $date_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'name' => 'required',
		'date_ini' => 'required',
		'date_fin' => 'required',
		'date_at' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','date_ini','date_fin','date_at'];



}
