<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title' , 'img_url' , 'text' , 'publication_date'];

    public function category() {
        return $this->belongsTo('App\Models\Category');      
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
    
}
