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
              <h3 class="box-title">Issue Book</h3><br>
              <x-alert/>
            </div>
            <form role="form" method="post" action="{{route('issuebook.store')}}">
              {{csrf_field()}}
              	<div class="form-group">
              		<div class="box-body">
                  <label for="exampleInputisbn">Student id</label>
                  <input type="number" class="form-control"name="student_id" id="exampleInputisbn" placeholder="Enter valid id">
                </div>
                 <div class="form-group">
                  <div class="box-body">
                  <label>Choose title</label>
                  <select class="form-control"name='book_id'>
                    <option>Select Title</option>
                    @foreach($books as $book)
                   
                    <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
                  </select>
                  
                </div>
                </div>

                
               
             
               
                

 
                
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Issue Book</button>
              </div>
              
              	

              	</div>
            </form>
          </div>
         

         </center>
   

@endsection


