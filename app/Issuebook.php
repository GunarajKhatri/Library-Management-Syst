<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuebook extends Model
{
    public function title(){
    	return $this->belongsTo(Book::class);
    }
    protected $fillable = [
    	'student_id','status','book_id'

    ];
}
