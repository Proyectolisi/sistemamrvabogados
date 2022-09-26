<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class calendar extends Model
{
    use HasFactory;

    //Agregar en el de Li
    protected $table = 'calendario';

    static $rules=[
        'title'=>'required',
        'start'=>'required',
        'end'=>'required',
        'description'=>'required',
        'user_id'=>'required'
    ];

    protected $fillable=['title','description','start','end','user_id'];

    public function user(){
        return $this->belongTo(User::class);
      }
}
