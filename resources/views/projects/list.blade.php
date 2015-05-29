@extends('admin')

@section('content')

<div class="container">
	<h1 align="center"><p>我的项目</p></h1>
    <div class="projects-index">
    	<div class="row">
	        @foreach ($project as $projects)
		        <div class="col-md-12">
		            <div class="project-item">
		                <a href="{{url('project/'.$projects->id)}}"><h3>{{ $projects->name }} <small>{{$projects->abstract}}</small> </h3></a>
		            </div>

		        </div>
	        @endforeach
		</div>
	</div>
</div>

@endsection