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
class TipoActuacione extends Model
{

    protected $table = 'tipo_actuaciones';

    static $rules = [
		'nombre' => 'required',
        'plazo_estandar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'plazo_estandar'];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actuacione()
    {
        return $this->hasMany('App\Models\TipoActuacion','nombre', 'tipo_actuacion_id' );
    }
    
  
   

}
