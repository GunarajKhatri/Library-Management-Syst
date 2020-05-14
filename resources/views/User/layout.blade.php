<!DOCTYPE html>
<html>
<head>
	@include('admin.head')
	@section('css')
	@show
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	@include('User.header')

    @section('content')
    @show
    

</div>
@include('admin.script')
</body>
</html>