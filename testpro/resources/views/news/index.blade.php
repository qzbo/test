@extends('news.layout')

@section('title','用户的列表页')

<a href="/testpro/public/news/create">添加</a>
@section('content')
<h3>浏览新闻</h3>

		<table border='1' width='880'>
			<tr>
				<th>新闻ID</th><th>新闻标题</th><th>新闻关键字</th><th>作者</th><th>新闻内容</th><th>操作</th>
			</tr>
			@foreach($ar as $k=>$v)
			<tr>
				<td>{{ $v->id}}</td>
				<td>{{ $v->title}}</td>
				<td>{{ $v->keywords}}</td>
				<td>{{ $v->author}}</td>
				<td>{{ $v->content}}</td>

				<td>
					<a href="/testpro/public/news/{{$v->id}}">显示</a>
					<a href="/testpro/public/news/{{$v->id}}/edit">修改</a>
					<form action="/testpro/public/news/{{$v->id}}" method="post">
						
						<button>删除</button>
						{{csrf_field()}}
						{{method_field('DELETE')}}
					</form>
				</td>
			</tr>
			@endforeach
			
		</table>

@endsection