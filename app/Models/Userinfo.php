<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{

    protected $fillable = ['user_id' , 'address' , 'phone' , 'country'];


    // Relazione one to one -> si inserisce il nome in public function del model da relazionare
    // e namespace nella funzione belongsTo
    public function user(){
        return $this->belongsTo('App\User');
    }
}
