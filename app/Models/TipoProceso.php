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
class TipoProceso extends Model
{

    protected $table = 'tipo_proceso';

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
        return $this->hasMany('App\Models\TipoProceso', 'nombre', 'id');
    }
    
  
   

}
