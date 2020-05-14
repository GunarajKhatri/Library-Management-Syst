<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'ISBN', 'title','category','author','publisher','publish_date'
    ];
    public function student(){
    	return $this->hasMany(Issuebook::class);
    }
     
}
