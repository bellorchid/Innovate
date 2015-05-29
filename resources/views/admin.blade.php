<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="../../public/todo/bower_components/todomvc-common/base.css">
    <style> [v-cloak] { display: none; } </style>
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>



</head>
<body>
<div class="header">
<!-- 导航条 -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
 <!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <a class="navbar-brand" href="{{ url('/')}}">InnovateClass</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href= "{{asset('/')}}">首页 <span class="sr-only">(current)</span></a></li>
                <!-- class='active' -->
                <li><a href="{{asset('/students')}}">实验班成员</a></li>
                <li><a href="{{asset('/projects')}}">实验班作品</a></li>
                <!--                    <li class="dropdown">-->
                <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--                        <ul class="dropdown-menu" role="menu">-->
                <!--                            <li><a href="#">Action</a></li>-->
                <!--                            <li><a href="#">Another action</a></li>-->
                <!--                            <li><a href="#">Something else here</a></li>-->
                <!--                            <li class="divider"></li>-->
                <!--                            <li><a href="#">Separated link</a></li>-->
                <!--                            <li class="divider"></li>-->
                <!--                            <li><a href="#">One more separated link</a></li>-->
                <!--                        </ul>-->
                <!--                    </li>-->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#" data-toggle="modal" data-target="#login">{{$student->name}}</a></li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/student/home')}}">个人中心</a></li>
                                <li><a href="{{ url('/logout') }}">退出</a></li>
                            </ul>
                        </li>
            </ul>
        </div>
    </div>
</nav><!-- /导航条 -->

<div class="container">
    </br></br></br>
    @include ('flash')
</div>

@yield('content')
</div>
<div class="app-footer">
<footer>
    <div class="container">
        </br>
        <a href="#" class="pull-right">回到顶部</a>
        <p><span class="glyphicon glyphicon-copyright-mark"></span> 2014&nbsp;-&nbsp;{{ date('Y') }}&nbsp;实验班</p>
    </div>
</footer>
</div>

</body>



<script src="../../public/todo/bower_components/todomvc-common/vue.js"></script>
<script>metrics.afterLoad = now()</script>
<script src="../../public/todo/bower_components/director/director.js"></script>
<script src="../../public/todo/js/store.js"></script>
<script>metrics.beforeRender = now()</script>
<script src="../../public/todo/js/app.js"></script>
<script src="../../public/todo/js/routes.js"></script>
<script>metrics.afterRender = now()</script>
<script src="../../public/todo/js/perf.js"></script>
<script>
    var isPhantom = navigator.userAgent.indexOf('PhantomJS') > -1
    if (isPhantom) {
        localStorage.clear()
    } else {
        var now = window.performance && window.performance.now
            ? function () { return window.performance.now() }
            : Date.now
        var metrics = { beforeLoad: now() }
    }
</script>
<!-- 登录 -->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">登录</h4>
            </div>
            <div class="modal-body">
                <form name="login-form" class="login-form" action="/students/login" method="post">
                    <div class="login-form-item"><input type="hidden" name="_token" value="{{ csrf_token() }}" /></div>
                    <div class="login-form-item"><input type="text" name="id" placeholder="学号或邮箱" /></div>
                    <div class="login-form-item"><input type="password" name="password" placeholder="密码" /></div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">登录</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /登录 -->

</html>