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
             <center><h2 class="box-title">Update Admins</h2></center>
              <x-alert />
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('panel.update',$admin->id)}}">
              {{csrf_field()}}
              @method('PUT')
              <div class="box-body">
              	<div class="form-group">
                  <label for="exampleInputname">Username</label>
                  <input type="text" class="form-control"name="name" id="exampleInputname" placeholder="Enter username"value="{{$admin->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1"value="{{$admin->email}}" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Old Password</label>
                  <input type="password" class="form-control"name="oldpassword" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

 
@endsection