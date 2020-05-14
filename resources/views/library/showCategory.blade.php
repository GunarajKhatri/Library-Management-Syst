@extends('admin.layout')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Details</h3>
              <x-alert />
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('category.create')}}"><span class="text-danger">Add Category</span></a></button>
               
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
                  <th>Category</th>
                  <th>Status</th>
                  <th>Action</th>
                 
               
                </tr>
                <tbody>
                <tr>
                	@foreach($categories as $category)
                  <td>{{$category->id}}</td>
                  <td>{{$category->category}}</td>
                  <td><span class="label label-primary">{{$category->status}}</span></td>
                  <td><a href="{{route('category.edit',$category->id)}}"><i class="fa fa-edit"></i></a>
                  <a href="{{route('category.destroy',$category->id)}}" style="margin-left:25px;" onclick="event.preventDefault();
                  		if(confirm('Are you sure you want to delete?')){
                      document.getElementById('delete-{{$category->id}}').submit(); }" ><i class="fa fa-trash"></i></a>

                   <form id="{{'delete-'.$category->id}}" action="{{route('category.destroy',$category->id)}}" method="POST" style="display: none;">

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