<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Issuebook;
use App\User;
use Auth;

class issuebookController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {   
        
       
        $issuestds=Book::rightJoin('issuebooks','issuebooks.book_id','books.id')->select('issuebooks.id','issuebooks.student_id','issuebooks.status','issuebooks.created_at','books.title','books.category')->get();
        foreach ($issuestds as $key) {
            $name[$key['student_id']]=User::find($key['student_id'])->name;
            
        }


        

            return view('library.showissuebook',compact('issuestds','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books=Book::all();
        return view('library.createissuebook',compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issuebook=new Issuebook;
        //return $request->all();
        $this->validate($request,[
        'student_id'=>'required',
         'book_id' =>'required'      
     ]
     );
        if(User::where('id','=',$request->student_id)->count()>0){
            $issuebook->create(['student_id'=>$request->student_id,'book_id'=>$request->book_id]);
            return redirect(route('issuebook.index'))->with('message','Book issued successfully');
        }
        
            return redirect()->back()->with('error','No student id found !');
        

    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $name=User::find(Issuebook::find($id)->student_id)->name;
        $book=Book::find(Issuebook::find($id)->book_id)->title;
        $date=Issuebook::find($id);
        //return $date;
        
        return view('library.editissuebook',compact('name','book','date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Issuebook::where('id',$id)->update(['status'=>$request->status]);
        return redirect(route('issuebook.index'))->with('message','Status of book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
