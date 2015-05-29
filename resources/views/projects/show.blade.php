@extends('layout')

@section('content')

<div class="container">
</br></br></br></br>
    <!-- 学生详情 -->
    <div class="student">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="student-item">
                <h1 align="center">项目详情</h1>
                    <hr class="divider" />
                    <li><h4>项目编号: {{ $project->id}}</h4></li>
                    </br>  
                    <li><h4>项目名称: {{ $project->name }}</h4></li>
                    </br>
                    <li><h4>项目成员:                         
                        @foreach ($project->students as $student)
                            {{ $student->name }}
                        @endforeach </h4></li>
                    </br>
                    <li><h4>项目地址: <a href="{{ $project->address }}">{{ $project->address }}</a></h4></li>
                    </br>
                    <li><h4>Demo地址: <a href="{{ $project->demo }}">{{ $project->demo }}</a></h4></li>
                    </br>
                    <hr class="divider" />
                    <h3>项目详情:</h3>  <h4>{{ $project->detail }}</h4>
                </div>
            </div>
        </div>
    </div>
</div><!-- /内容 -->
@endsection