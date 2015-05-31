<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table bgcolor="#eeeeee" border="2px">
<tr><th>项目名称</th><th>项目简介</th><th>GitHub地址</th><th>Demo地址</th><th>详细介绍</th></tr>
@foreach($project as $projects )

	<tr><th>{{$projects->name}}</th><th>{{$projects->abstract}}</th><th>{{$projects->github}}</th><th>{{$projects->demo}}</th><th>{{$projects->detail}}</th></tr>
@endforeach
</table>

</body>
</html>