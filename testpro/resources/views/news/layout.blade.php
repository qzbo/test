<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<style type="text/css">
		table,td{font-family:微软雅黑;text-align:center;}
		h3{font-family:微软雅黑;}
	</style>
</head>
<body>
	<center>
		@include('news.menu')


		@section('content')
		

		@show


		
	</center>	
</body>
</html>