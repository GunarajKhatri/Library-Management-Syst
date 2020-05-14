@extends('User.layout')
@section('content')
<div class="content-wrapper">
<div class="conatiner">

	<section class="content">
		<center >
		
	
    <div class="column" style="margin-top:200px;">
    	<h2 class="text-primary">Total books Taken: {{ $book }}</h2>
    	<h2 class="text-danger">Total books not returned: {{ $count }}</h2>
    	</div>
    
</center>
</section>
  </div>
  </div>


@endsection