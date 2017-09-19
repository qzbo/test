<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻管理系统</title>
	<style type="text/css">
		table{font-family:微软雅黑;}
		h3{font-family:微软雅黑;}
	</style>
</head>
<body>
	<center>
		@include('news.menu')

		<h3>发布新闻</h3>
		<form action="{{ url('/news/')}}" method='post'>
			<table border='0' width='400'> 
				<tr>
					<td align='right'>标题:</td>
					<td><input type="text" name='title' value="{{$data->title}}"></td>
				</tr>
				<tr>
					<td align='right'>关键字:</td>
					<td><input type="text" name='keywords'  value="{{$data->keywords}}" ></td>
				</tr>
				<tr>
					<td align='right'>作者:</td>
					<td><input type="text" name='author'  value="{{$data->author}}"></td>
				</tr>
				<tr>
					<td align='right'>内容:</td>
					<td><textarea name="content" id="" cols="30" rows="5" width='300px' height='200px' style='resize:none'>{{$data->content}}</textarea></td>
				</tr>

		{{ csrf_field() }}

			</table>

		</form>
	</center>	
</body>
</html>