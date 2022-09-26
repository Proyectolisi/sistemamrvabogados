<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Circuito
 *
 * @property $id
 * @property $nombreCircuito
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 *
 * @property Municipio[] $municipios
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Circuito extends Model
{
    protected $paginationTheme= "bootstrap";

    static $rules = [
		'nombreCircuito' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCircuito','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios()
    {
        return $this->hasMany('App\Models\Municipio', 'circuito_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

}
