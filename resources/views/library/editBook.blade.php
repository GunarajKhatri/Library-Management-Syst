@extends('admin.layout')
@section('content')
<center>
  <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Book</h3><br>
              <x-alert />
            </div>
            <form role="form" method="post" action="{{route('book.update',$book->id)}}">
              {{csrf_field()}}
              @method('PUT')
              	<div class="form-group">
              		<div class="box-body">
                  <label for="exampleInputisbn">ISBN</label>
                  <input type="text" class="form-control"name="ISBN" id="exampleInputisbn" placeholder="Enter ISBN" value="{{$book->ISBN}}">
                </div>
                <div class="form-group">
                  <div class="box-body">
                  <label for="exampleInputtitle">Title</label>
                  <input type="text" class="form-control"name="title" id="exampleInputtitle" placeholder="Enter Title" value="{{$book->title}}">
                </div>
                </div>
               
                 <div class="form-group">
                  <div class="box-body">
                  <label>Choose Category</label>
                  <select class="form-control"name='category'>
                    <option value="">Select Category</option>
                    @foreach($categories as $categorys)
                   
                    <option value="{{$categorys->category}}" {{$book->category == $categorys->category ? 'selected' : '' }} >{{$categorys->category}}</option>
                    @endforeach
                  </select>
                  
                </div>
                </div>

                
               <div class="form-group">
                  <div class="box-body">
                  <label for="exampleInput">Author</label>
                  <input type="text" class="form-control"name="author" placeholder="Enter Author" value="{{$book->author}}">
                </div>
               <div class="form-group">
                  <div class="box-body">
                  <label for="exampleInput">Publisher</label>
                  <input type="text" class="form-control"name="publisher" id="exampleInput" placeholder="Enter publisher"value="{{$book->publisher}}">
                </div>
              <div class="box-body">
                <label>Publish date:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="publish date" value="{{$book->publish_date}}" data-inputmask="'alias': 'dd/mm/yyyy'"data-mask>
               
                <!-- /.input group -->
              </div>
              </div>
               
                

 
                
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update book</button>
              </div>
              
              	

              	</div>
            </form>
          </div>
         

         </center>
   

@endsection


