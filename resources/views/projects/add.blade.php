@extends('admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	   <div class="profiles">
					</br></br>
					<div class="personal-show">
						<h1 align="center">新建项目</h1>
						{!! Form::open(['url' => '/project/insert', 'class' => 'form-horizontal', 'role' => 'form']) !!}

						  	<div class="form-group">
						    	<label for="inputName" class="col-sm-2 control-label">项目成员:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="members" value="{{ $student->name}}" class="form-control" id="inputName" placeholder="项目成员" readonly>
						    	</div>
						  	</div>

						  	<div class="form-group">
						    	<label for="inputName" class="col-sm-2 control-label">项目名称:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="name"  class="form-control" id="inputName" placeholder="项目名称">
						    	</div>
						  	</div>

						  	<div class="form-group">
						    	<label for="inputAddress" class="col-sm-2 control-label">项目地址:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="address" value="" class="form-control" id="inputAddress" placeholder="http://">
						      	</div>
						   	</div>
						  	
						  	<div class="form-group">
						    	<label for="inputAbstract" class="col-sm-2 control-label">项目一句话简介:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="abstract" value="" class="form-control" id="inputAbstract" placeholder="示例：基于***的***系统">
						      	</div>
						   	</div>

						  	<div class="form-group">
						    	<label for="inputDescription3" class="col-sm-2 control-label">项目Demo地址:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="demo" value="" class="form-control" id="inputDemo" placeholder="暂时没有~~">
						      	</div>
						   	</div>
							
							<div class="form-group">
								<label for="myEditor" class="col-sm-2 control-label">详细介绍:</label>
								</br></br>
								<div class="personal-area">
							   	 	<textarea class="text-area" name="detail"></textarea>
							   	</div>
							</div>

						  	<div class="form-group">
						    	<div class="col-sm-offset-2 col-sm-10">
						      	<button type="submit" class="btn btn-primary personal-button">点击保存项目</button>
						    	</div>
						  	</div>
						{!! Form::close() !!}
												
					</div>

				</div>
		</div>
	</div>
</div>

@endsection