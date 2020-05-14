@extends('User.layout')
@section('content')
<div class="content-wrapper">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Book Details</h3>
              
               
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

                  <th>S.N</th>
                  <th>Title</th>
                  <th>Issued_at</th>
                  <th>Status</th>
                  
                 
               
                </tr>
                <tbody>
                <tr>
                	@foreach($book as $books)
                	@if($books->status)
                  <td>{{$loop->index+1}}</td>
                  <td>{{$name[$books->student_id]}}</td>
                  <td>{{$books->created_at}}</td>
                  <td><span class="label label-success">Returned already</span></td>

                  @else
                  <td>{{$loop->index+1}}</td>
                  <td>{{$name[$books->student_id]}}</td>
                  <td>{{$books->created_at}}</td>
                  <td><span class="label label-danger">Not Returned Yet</span></td>
                  @endif

                  
                  
                  
                
                  
                  
                  
                  
                 
              
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
      </div>



@endsection