<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issuebook;
use App\Book;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $book=Issuebook::where('student_id',Auth::User()->id)->count();
        $count=0;
        $nbook=Issuebook::where('student_id',Auth::User()->id)->get();
        foreach ($nbook as $key ) {
            if($key['status']==0){
                $count++;
            }
        }

        return view('User.home',compact('book','count'))->with('message','You are successfully logged in !');
    }
    public function book(){
        $book=Issuebook::where('student_id',Auth::User()->id)->get();
        foreach ($book as $key ) {
              $name[$key['student_id']]=Book::find($key['student_id'])->title;
        }
        

        return view('User.book',compact('book','name'));
    }
    public function profile(){
        $user=User::find(Auth::user()->id);
        return view('User.profile',compact('user'));
    }
}
