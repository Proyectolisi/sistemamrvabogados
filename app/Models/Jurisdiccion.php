<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Despacho
 *
 * @property $id
 * @property $nombre

 *
 
 * @property Proceso[] $procesos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jurisdiccion extends Model
{

    protected $table = 'jurisdiccion';

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
        return $this->hasMany('App\Models\Jurisdiccion', 'nombre', 'id');
    }
    
  
   

}
