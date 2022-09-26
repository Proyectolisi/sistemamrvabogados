<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoProceso
 *
 * @property $id
 * @property $nombre

 *
 
 * @property Proceso[] $procesos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstadoProceso extends Model
{

    protected $table = 'estado_proceso';

    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function procesos()
    {
        return $this->hasMany('App\Models\EstadoProceso', 'nombre', 'id');
    }
    
  
   

}
