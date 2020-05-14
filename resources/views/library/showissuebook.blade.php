@extends('admin.layout')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Book Details</h3>
              <x-alert />
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('issuebook.create')}}"><span class="text-danger">Issue Book</span></a></button>

               
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

                  <th>Student id</th>
                  <th>Student name</th>
                  <th>Category</th>
                  <th>Book Title</th>
                  <th>Issued At</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                 
               
                </tr>
                <tbody>
                   
                <tr>
                  
                   
                   
                @foreach($issuestds as $issuestd)
                  

                 
                 
                 

                 
                 @if($issuestd->status)

                 <td>{{$issuestd->student_id}}</td>
                 <td>{{$name[$issuestd->student_id]}}</td>
                 <td>{{$issuestd->category}}</td>
                 <td>{{$issuestd->title}}</td>
                 <td>{{$issuestd->created_at}}</td>
                 <td><span class="label label-success"><b>Returned already</b></span></td>
                 <td><a href="{{route('issuebook.edit',$issuestd->id)}}"><i class="fa fa-edit"></i></a></td>
                 
                 @else
                 <td>{{$issuestd->student_id}}</td>
               <td>{{$name[$issuestd->student_id]}}</td>
                 
                 
                 <td>{{$issuestd->category}}</td>
                 <td>{{$issuestd->title}}</td>
                 <td>{{$issuestd->created_at}}</td>
                 <td><span class="label label-danger">Not Returned yet</span></td>
                 <td><a href="{{route('issuebook.edit',$issuestd->id)}}"><i class="fa fa-edit"></i></a></td>
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



@endsection