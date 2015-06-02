@extends('layout')

@section('content')
<div class="container">
</br></br></br></br>
    <!-- 学生详情 -->
    <div class="student">
        <div class="row">
            <div class="col-md-9">
                <div class="student-item">
                    <img class="icon" src="{{$student->icon}}" /> <h3>{{ $student->name }}<small> {{$student->description}}</small></h3>
                    <div class="tags">
                        {{ $student->tags }}
                    </div>
                    <hr class="divider" />
                    <li>学号: {{ $student->id}}</li>
                    </br>  
                    <li>邮箱: {{ $student->email }}</li>
                    </br>
                    <li>手机号: {{ $student->tel }}</li>
                    </br>
                    <li>GitHub: <a href="{{ $student->github }}" target="_black">{{ $student->github }}</a></li>
                    <hr class="divider" />
                    <h4>个人详细介绍:</h4><p>{{ $student->resume }}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="student-project">
                    <h3>参与项目</h3>
                    <hr class="divider" />
                    <ul>
                    @foreach ($student->projects as $project)
                        <p><a href="/projects/{{ $project->id }}">{{ $project->name }}</a></p>
                    @endforeach
                    </ul>
                </div>

                <div class="student-project">
                    <h3>分享的博客</h3>
                    <hr class="divider" />
                    <ul>
                    @foreach($blog as $blogs)
                        <p><a href="{{ $blogs->address }}" target="_blank">{{ $blogs->title }}</a></p>
                    @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div><!-- /内容 -->

@endsection