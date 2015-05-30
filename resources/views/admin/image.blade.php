@extends('admin')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	   <div class="profiles">
					</br></br>
					<div class="personal-show">
						<h1 align="center">个人图片修改</h1>
						{!! Form::open(['url' => '/image/update', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}


						  	<div class="form-group">
						    	<label for="inputImage" class="col-sm-2 control-label">我的头像:</label>
						    	<div class="col-sm-10">
						      	<input type="file" name="icon" class="form-control"  id="inputImage" placeholder="">
						    	</div>
						  	</div>

						  	<div class="form-group">
						    	<label for="inputPhoto" class="col-sm-2 control-label">个人展示照片:</label>
						    	<div class="col-sm-10">
						      	<input type="file" name="photo"  class="form-control"  id="inputPhoto" placeholder="">
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