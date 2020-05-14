@extends('admin.home')
@section('content')
      <div class="row">
        <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
             <center><h2 class="box-title">Add Admins</h2></center> 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('panel.store')}}">
              {{csrf_field()}}
              <div class="box-body">
              	<div class="form-group">
                  <label for="exampleInputname">Enter Username</label>
                  <input type="text" class="form-control"name="name" id="exampleInputname" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div>
            </form>
          </div>
        
          

 
@endsection