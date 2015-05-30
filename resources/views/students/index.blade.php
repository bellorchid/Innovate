@extends('layout')

@section('content')
<!-- 内容 -->
<div class="container">
</br></br></br></br>
    <!-- 学生简介 -->
    <div class="students-list">
        <div class="row">
            @foreach ($students as $student)
            <div class="col-md-4">
                <div class="student-item student-single">
                    <a href="{{url('/students/'.$student->id)}}"><img class="icon" src="{{ $student->icon}}" /> <h3>{{ $student->name }}</h3></a>
                    </br></br>
                    <a href="{{url('/students/'.$student->id)}}"><img class="photo" src="{{ $student->photo}}" /></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div><!-- /内容 -->
@endsection