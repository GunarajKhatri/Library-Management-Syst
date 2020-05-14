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
              <h2 class="box-title">Issue Books details</h2><br>
              <x-alert />
            </div>
            <h4 class="text-success">Student Name:</h4>
            <input type="text" value="{{$name}}" disabled><br><h4 class="text-success">Book Name:</h4> 
            <input type="text" value="{{$book}}"disabled><br><h4 class="text-success">Issued At:</h4> 
            <input type="text" value="{{$date->created_at}}" disabled><br> 
            <form role="form" method="post" action="{{route('issuebook.update',$date->id)}}">
              {{csrf_field()}}
              @method('PUT')
              	
                 <div class="">
                  <div class="box-body">
                  <label><h4 class="text-success"> Update status of book</h4></label><br>  
                  <select class=""name='status'>
                    <option value="1">Return</option>
                    
                    <option value="0">Not returned</option>
                    
                  </select>
                  
                </div>
                </div>

                
               
             
               
                

 
                
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Book</button>
              </div>
              
              	

              	</div>
            </form>
          </div>
         

         </center>
   

@endsection


