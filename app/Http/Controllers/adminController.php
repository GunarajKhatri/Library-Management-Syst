<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Admin;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin=Admin::all();
     return view('admin.show',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=new Admin;
        $this->validate($request,[
        'name'=>'required',
        'email'=>'required|unique:admins',       
        'password'=>'required|unique:admins|min:8',       
            
             
     ]
     );
        $admin->create($request->all());
        return redirect(route('panel.index'))->with('message','Data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=Admin::find($id);
        
        return view('admin.edit',compact('admin'));
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
        $admin=Admin::find($id);
         $this->validate($request,[
        'name'=>'required',
        'email'=>'required|unique:admins',       
        'oldpassword'=>'required|min:8',       
        'password'=>'required|unique:admins|min:8',       
            
             
     ]);
     
     if(Hash::check($request->oldpassword,$admin->password)){
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->save();
        return redirect(route('panel.index'))->with('message','Admin updated successfully');


     }
     else{
        return redirect()->back()->with('error','Password does not matched !');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin=Admin::find($id);
        $admin->delete();
        return redirect()->back();
    }
}
