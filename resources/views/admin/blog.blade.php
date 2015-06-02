@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	   <div class="profiles">
					</br></br>
					<div class="personal-show">
						<h1 align="center">添加博客</h1>
						{!! Form::open(['url' => '/blog/update', 'class' => 'form-horizontal', 'role' => 'form']) !!}
						  	<div class="form-group">
						    	<label for="inputblogtitle" class="col-sm-2 control-label">博客标题:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="title" value="" class="form-control" id="inputblogtitle" placeholder="标题">
						    	</div>
						  	</div>

						  	<div class="form-group">
						    	<label for="inputblogtitle" class="col-sm-2 control-label">博客地址:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="address" value="http://" class="form-control" id="inputblogtitle" placeholder="请添加博客地址">
						    	</div>
						  	</div>

							<div class="form-group">
						    	<div class="col-sm-offset-2 col-sm-10">
						      	<button type="submit" class="btn btn-primary personal-button">点击保存修改</button>
						    	</div>
						  	</div>
						{!! Form::close() !!}						
					</div>

				</div>
		</div>
	</div>
</div>

@endsection