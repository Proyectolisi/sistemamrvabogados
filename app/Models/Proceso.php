<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proceso
 *
 * @property $id
 * @property $jurisdiccion_id
 * @property $estado_proceso_id
 * @property $tipo_proceso_id
 * @property $etapa_procesal_id
 * @property $despacho_id
 * @property $numero_radicado
 * @property $fecha_radicado
 * @property $descripcion
 * @property $demandado
 * @property $demandante
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 *
 * @property Actuacione[] $actuaciones
 * @property Despacho $despacho
 * @property EstadoProceso $estadoProceso
 * @property EtapaProcesal $etapaProcesal
 * @property Jurisdiccion $jurisdiccion
 * @property TipoProceso $tipoProceso
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proceso extends Model
{
    
    static $rules = [
		'jurisdiccion_id' => 'required',
		'estado_proceso_id' => 'required',
		'tipo_proceso_id' => 'required',
		'etapa_procesal_id' => 'required',
		'despacho_id' => 'required',
		'numero_radicado' => 'required',
		'fecha_radicado' => 'required',
		'descripcion' => 'required',
		'demandado' => 'required',
		'demandante' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jurisdiccion_id','estado_proceso_id','tipo_proceso_id','etapa_procesal_id','despacho_id','numero_radicado','fecha_radicado','descripcion','demandado','demandante','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actuaciones()
    {
        return $this->hasMany('App\Models\Actuacione', 'proceso_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function despacho()
    {
        return $this->hasOne('App\Models\Despacho', 'id', 'despacho_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadoProceso()
    {
        return $this->hasOne('App\Models\EstadoProceso', 'id', 'estado_proceso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function etapaProcesal()
    {
        return $this->hasOne('App\Models\EtapaProcesal', 'id', 'etapa_procesal_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jurisdiccion()
    {
        return $this->hasOne('App\Models\Jurisdiccion', 'id', 'jurisdiccion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoProceso()
    {
        return $this->hasOne('App\Models\TipoProceso', 'id', 'tipo_proceso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
