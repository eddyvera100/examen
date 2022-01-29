<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $numeroId
 * @property $paterno
 * @property $materno
 * @property $nombres
 * @property $fechaNac
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignacione[] $asignaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'numeroId' => 'required',
		'paterno' => 'required',
		'materno' => 'required',
		'nombres' => 'required',
		'fechaNac' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numeroId','paterno','materno','nombres','fechaNac'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignaciones()
    {
        return $this->hasMany('App\Models\Asignacione', 'estudiante_id', 'id');
    }
    

}
