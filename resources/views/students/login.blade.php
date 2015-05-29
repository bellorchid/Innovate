<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<link href="{{asset('/css/login.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
 @include('errors.list')
<div class="login">
	<h2>InnovateClass</h2>
	<div class="login-top">
		<h1>后台登陆</h1>
		{!! Form::open(['url' => '/login', 'class' => 'form-horizontal', 'role' => 'form']) !!}
			<!-- {!! Form::text('id', '学号', ['class' => 'form-control','onfocus' => "this.value = '';",'required']) !!} -->
			<!-- {!! Form::password('password', ['class' => 'form-control','onfocus' => "this.value = '';",'required']) !!} //因为不能隐藏默认输入-->
			<input type="text" name="id" placeholder="学号">
			<input type="password" name="password" placeholder="密码">

		    <div class="forgot">
		    	<!-- <a href="#">忘记密码</a> -->
		    	{!! Form::submit('登陆', ['class' => 'btn btn-primary']) !!}
		    </div>
	</div>
	<div class="login-bottom">
		<!-- <h3>没有账号？没关系 &nbsp <a href="#">注册</a></h3> -->
		<h3>没有账号？如果属于本班，请向管理员申请注册</h3>
	</div>
		{!! Form::close() !!}
</div>	


</body>
</html>