<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actuacione
 *
 * @property $id
 * @property $fecha_actuacion
 * @property $tipo_actuacion_id
 * @property $proceso_id
 * @property $anotacion
 * @property $fecha_inicio_termino
 * @property $fecha_finaliza_termino
 * @property $fecha_registro
 * @property $file
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 *
 * @property Proceso $proceso
 * @property TipoActuacione $tipoActuacione
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actuacione extends Model
{
    
    static $rules = [
		'fecha_actuacion' => 'required',
		'tipo_actuacion_id' => 'required',
		'proceso_id' => 'required',
		'anotacion' => 'required',
		'fecha_inicio_termino' => 'required',
		'fecha_finaliza_termino' => 'required',
		'fecha_registro' => 'required',
		'file' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_actuacion','tipo_actuacion_id','proceso_id','anotacion','fecha_inicio_termino','fecha_finaliza_termino','fecha_registro','file','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proceso()
    {
        return $this->hasOne('App\Models\Proceso', 'id', 'proceso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoActuacione()
    {
        return $this->hasOne('App\Models\TipoActuacione', 'id', 'tipo_actuacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
