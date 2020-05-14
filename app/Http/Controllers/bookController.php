<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;

class bookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {   
        
        $books=Book::all();
        return view('library.showBook',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $categories=Category::all();
        return view('library.createBook',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book=new Book;

         $this->validate($request,[
        'ISBN'=>'required|unique:books|max:4',
        'title'=>'required',       
        'category'=>'required',       
        'author'=>'required',       
        'publisher'=>'required', 
        'publish_date'=>'required'    
             
     ]
     );
        
         $book->create($request->all());
         return redirect(route('book.index'))->with('message','Data saved successfully');

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
        $book=Book::find($id);
        $categories=Category::all();
        return view('library.editBook',compact('book','categories'));
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
        $this->validate($request,[
        'ISBN'=>'required|unique:books',
        'title'=>'required',       
        'category'=>'required',       
        'author'=>'required',       
        'publisher'=>'required', 
        'publish_date'=>'required'    
             
     ]
     );

        Book::where('id',$id)->update([
            'ISBN'=>$request->ISBN,
             'title'=>$request->title,
             'category'=>$request->category,
               'author'=>$request->category,
               'publisher'=>$request->publisher,
               'publish_date'=>$request->publish_date
           ]);
         return redirect(route('book.index'))->with('message','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $book=Book::find($id);
       $book->delete();
       return redirect()->back();
    }
}
