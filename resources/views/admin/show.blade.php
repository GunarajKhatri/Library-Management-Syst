@extends('admin.layout')
@section('content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Admins Details</h3>
              <x-alert />
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('panel.create')}}"><span class="text-danger">Add admins</span></a></button>
               
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	@foreach($admin as $admins)
                  <td>{{$loop->index+1}}</td>
                  <td>{{$admins->username}}</td>
                  <td>{{$admins->email}}</td>
                  
                  <td>{{$admins->created_at}}</td>
                  <td><a href="{{route('panel.edit',$admins->id)}}"><i class="fa fa-edit"></i></a>
                  <a href="{{route('panel.destroy',$admins->id)}}" style="margin-left:25px;" onclick="event.preventDefault();
                      if(confirm('Are you sure you want to delete?')){
                      document.getElementById('delete-{{$admins->id}}').submit(); }" ><i class="fa fa-trash"></i></a>

                   <form id="{{'delete-'.$admins->id}}" action="{{route('panel.destroy',$admins->id)}}" method="POST" style="display: none;">

                                        @csrf
                                        @method('DELETE')
                                    </form>
                 </td>
              
                </tr>
                    @endforeach
                </tbody>
               </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@endsection