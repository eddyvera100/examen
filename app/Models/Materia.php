<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $sigla
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignacione[] $asignaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'sigla' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sigla','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignaciones()
    {
        return $this->hasMany('App\Models\Asignacione', 'materia_id', 'id');
    }
    

}
