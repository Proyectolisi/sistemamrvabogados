<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Despacho
 *
 * @property $id
 * @property $municipio_id
 * @property $nombreDespacho
 * @property $correoDespacho
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 *
 * @property Municipio $municipio
 * @property Proceso[] $procesos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Despacho extends Model
{
    
    static $rules = [
		'municipio_id' => 'required',
		'nombreDespacho' => 'required',
		'correoDespacho' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['municipio_id','nombreDespacho','correoDespacho','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'municipio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function procesos()
    {
        return $this->hasMany('App\Models\Proceso', 'despacho_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
