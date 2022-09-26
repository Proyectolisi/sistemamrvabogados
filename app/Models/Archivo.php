<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Archivo
 *
 * @property $id
 * @property $nombre
 * @property $file
 * @property $user_id
 * @property $actuacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Actuacione $actuacione
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Archivo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'file'=> 'required',
		'user_id' => 'required',
		'actuacion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','file','user_id','actuacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actuacione()
    {
        return $this->hasOne('App\Models\Actuacione', 'id', 'actuacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
