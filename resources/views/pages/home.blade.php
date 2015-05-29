@extends('layout')

@section('content')
<!-- 滚动新闻 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../public/images/news/3.jpg" alt="Chrome">
            <div class="carousel-caption">
                <h1></h1>
<!-- 

                <p><a class="btn btn-lg btn-primary" href="http://www.google.cn/intl/zh-CN/chrome/browser/"
                      role="button" target="_blank"></a></p> -->
            </div>
        </div>
        <div class="item">
            <img src="../public/images/news/2.jpg" alt="Firefox">
            <div class="carousel-caption">
<!--                 <h1></h1>

                <p></p>

                <p><a class="btn btn-lg btn-primary" href="http://www.firefox.com.cn/download/" target="_blank"
                      role="button"></a></p> -->
            </div>
        </div>
        <div class="item">
            <img src="../public/images/news/1.jpg" alt="Firefox">
            <!-- <div class="carousel-caption">
                <h1>Safari</h1>

                <p>Safari，是苹果计算机的最新操作系统Mac OS X中的浏览器。</p>

                <p><a class="btn btn-lg btn-primary" href="http://www.apple.com/cn/safari/" target="_blank"
                      role="button">点我下载</a></p>
            </div> -->
        </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /滚动新闻 -->

<!-- 内容 -->
<div class="container">


    <!-- 学生简介 -->
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12 students-list-a"><a href="{{ url('students/')}}" class="pull-right">更多成员</a></div>
            </div>

            <div class="students-index">
                <div class="row">
                    @foreach ($students as $student)
                    <div class="col-md-4">
                        <div class="student-item student-type">
                            <a href="{{url('students/'.$student->id)}}"><img class="icon" src="{{ $student->icon}}" /> <h3>{{ $student->name }}</h3></a>
                            </br></br>
                            <a href="{{url('students/'.$student->id)}}"><img class="photo" src="{{ $student->photo}}" /></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-lg-12 projects-list-a"><a href="{{url('/projects')}}" class="pull-right">更多作品</a></div>
            </div>

            <div class="projects-index">
                <div class="row">
                    @foreach ($projects as $project)
                    <div class="col-md-12">
                        <div class="project-item">
                            <a href="{{url('projects/'.$project->id)}}"><h3>{{ $project->name }}</h3></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 projects-list-a"><a href="" class="pull-right">更多新闻</a></div>
            </div>

            <div class="projects-index">
                <div class="row">
                    @foreach ($events as $event)
                    <div class="col-md-12">
                        <div class="project-item">
                            <a href=""><h3>{{ $event->title }}</h3></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- /内容 -->
@endsection