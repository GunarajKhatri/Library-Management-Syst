<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class studentcontroller extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show(){
    	$std=User::all();
    	return view('library.student',compact('std'));
    }
}
