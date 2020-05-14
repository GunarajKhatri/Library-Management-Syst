@extends('admin.layout')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Book Details</h3>
              <x-alert />
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('book.create')}}"><span class="text-danger">Add Book</span></a></button>
               
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

                  <th>ISBN</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Author</th>
                  <th>Publisher</th>
                  <th>Publish date</th>
                  <th>Action</th>
                 
               
                </tr>
                <tbody>
                <tr>
                	@foreach($books as $book)
                  <td>{{$book->ISBN}}</td>
                  <td>{{$book->title}}</td>
                  <td>{{$book->category}}</td>
                  <td>{{$book->author}}</td>
                  <td>{{$book->publisher}}</td>
                  <td>{{$book->publish_date}}</td>
                  
                  
                  <td><a href="{{route('book.edit',$book->id)}}"><i class="fa fa-edit"></i></a>
                  <a href="{{route('book.destroy',$book->id)}}" style="margin-left:25px;" onclick="event.preventDefault();
                      if(confirm('Are you sure you want to delete?')){
                      document.getElementById('delete-{{$book->id}}').submit(); }" ><i class="fa fa-trash"></i></a>

                   <form id="{{'delete-'.$book->id}}" action="{{route('book.destroy',$book->id)}}" method="POST" style="display: none;">

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