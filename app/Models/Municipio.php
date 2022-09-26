<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $id
 * @property $circuito_id
 * @property $nombreMunicipio
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 *
 * @property Circuito $circuito
 * @property Despacho[] $despachos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipio extends Model
{
    
    static $rules = [
		'circuito_id' => 'required',
		'nombreMunicipio' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['circuito_id','nombreMunicipio','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function circuito()
    {
        return $this->hasOne('App\Models\Circuito', 'id', 'circuito_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function despachos()
    {
        return $this->hasMany('App\Models\Despacho', 'municipio_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
