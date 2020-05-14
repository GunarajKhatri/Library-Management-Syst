@extends('admin.layout')
@section('content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Students Details</h3>
              	
               
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
                  <th>Student ID</th>
                  <th>Student name</th>
                  <th>Email</th>
                  <th>Created on</th>
                  
               
                </tr>
                <tbody>
                <tr>
                	@foreach($std as $stds)
                  <td>{{$stds->id}}</td>
                  <td>{{$stds->name}}</td>
                  <td>{{$stds->email}}</td>
                  
                  <td>{{$stds->created_at}}</td>
                  
              
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