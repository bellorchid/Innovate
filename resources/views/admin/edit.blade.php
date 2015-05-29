@extends('admin')

@section('content')

@include('editor::head')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	   <div class="profiles">
					</br></br>
					<div class="personal-show">
						<h1 align="center">个人信息修改</h1>
						{!! Form::open(['url' => '/student/update', 'class' => 'form-horizontal', 'role' => 'form']) !!}


                        
						  	<div class="form-group">
						    	<label for="inputEmail3" class="col-sm-2 control-label">邮箱:</label>
						    	<div class="col-sm-10">
						      	<input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" id="inputEmail3" placeholder="Email">
						    	</div>
						  	</div>

						  	<div class="form-group">
						    	<label for="inputTel3" class="col-sm-2 control-label">电话:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="tel" value="{{ Auth::user()->tel}}" class="form-control" id="inputTel3" placeholder="请输入联系方式">
						      	</div>
						   	</div>
						  	
						  	<div class="form-group">
						    	<label for="inputGithub3" class="col-sm-2 control-label">Github:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="github" value="{{ Auth::user()->github}}" class="form-control" id="inputGithub3" placeholder="http://github.com/zhangsan">
						      	</div>
						   	</div>

						  	<div class="form-group">
						    	<label for="inputDescription3" class="col-sm-2 control-label">个人描述:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="description" value="{{Auth::user()->description}}" class="form-control" id="inputDescription3" placeholder="还没有添加一句话描述呦">
						      	</div>
						   	</div>

						   	<div class="form-group">
						    	<label for="inputTags3" class="col-sm-2 control-label">技术标签:</label>
						    	<div class="col-sm-10">
						      	<input type="text" name="tags" value="{{ Auth::user()->tags}}" class="form-control" id="inputTags3" placeholder="示例：PHP、Javascript">
						      	</div>
						   	</div>
							
<!-- 							<div class="form-group">
								<label for="myEditor" class="col-sm-2 control-label">详细介绍:</label>
								</br></br>
								<div class="editor personal-area">
							   	 	<textarea name="resume"  id='myEditor'></textarea>
							   	</div>
							</div> -->
							<div class="form-group">
								<label for="myEditors" class="col-sm-2 control-label">详细介绍:</label>
								</br></br>
								<div class="personal-area text-area">
							   	 	<textarea class="text-area" name="resume" id="myEditors">{{Auth::user()->resume}}</textarea>
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