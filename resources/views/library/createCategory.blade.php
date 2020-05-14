@extends('admin.layout')
@section('content')
<center>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Category</h3><br>
              <x-alert />
            </div>
            <form role="form" method="post" action="{{route('category.store')}}">
              {{csrf_field()}}
              	<div class="form-group">
              		<div class="box-body">
                  <label for="exampleInputcategory">Category Name</label>
                  <input type="text" class="form-control"name="category" id="exampleInputcategory" placeholder="Enter category">
               
                <div class="box-body">
                  <label for="status">Status</label><br>	
                  <input type="radio" name="status" value="Active"><b> Active</b><br>
                  <input type="radio" name="status" value="InActive"> <b>	InActive</b>	

                 </div>

 
                
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add category</button>
              </div>
              
              	

              	</div>
            </form>
          </div>
         

         </center>


@endsection