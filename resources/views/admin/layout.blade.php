<!DOCTYPE html>
<html>
<head>
	@include('admin.head')
	@section('css')
	@show
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.header')
@include('admin.sidebar')
<div class="content-wrapper">
     @section('content')
    @show
    

</div>
@include('admin.script')
</body>
</html>