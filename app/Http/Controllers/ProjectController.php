<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use App\Student;
use Illuminate\Http\Request;
use Auth;
use App\Project;

class ProjectController extends Controller {
	public function index()
	{
		$projects = Project::all();
		return view('projects.index')->withProjects($projects)->withTitle("实验班作品");
	}

	public function show($id)
	{
		$project = Project::find($id);
		$students = $project->students;
		return view('projects.show')->withProject($project)->withTitle('实验班作品');
	}

	public function prolist()
	{
		$student = Auth::user();
	    if(!Auth::check()) {
	      return Redirect::route('login')->withErrors('请先登录后再访问该页面');

	    } else {
	    	$projects = Student::find($student->id)->projects;
		  return view('projects.list')->withTitle('我的项目页')->withStudent($student)->withProject($projects);

	    }
	}


	public function edit($projectId)
	{
		$student = Auth::user();
	    if(!Auth::check()) {
	      return Redirect::route('login')->withErrors('请先登录后再访问该页面');

	    } else {
	    	$projects = Student::find($student->id)->projects;
	    	$members = Project::find($projectId)->students;
	    	$project = Project::find($projectId);
		  return view('projects.edit')->withTitle('修改我的项目信息')->withStudent($student)->withProject($project)->withMembers($members);

	    }
	}

	public function update(Request $request)
	{
		$projects = Project::where('id', $request->id)->first();
		$projects->name = $request->name;
		$projects->address = $request->address;
		$projects->demo = $request->demo;
		$projects->abstract = $request->abstract;
		$projects->detail = $request->detail;
		$projects->save();
		session()->flash('message','项目信息修改成功！');
		return Redirect::route('stu_home');
	}

	public function add_project()
	{
		$student = Auth::user();

		return view('projects.add')->withTitle('新增项目')->withStudent($student);
	}

	public function insert_project(Request $request)
	{
		$student = Auth::user();
		$projects = new Project;
		$projects->name = $request->name;
		$projects->address = $request->address;
		$projects->demo = $request->demo;
		$projects->abstract = $request->abstract;
		$projects->detail = $request->detail;
		$projects->save();
		$student->projects()->attach($projects->id);
		session()->flash('message','项目信息修改成功！');
		return Redirect::route('stu_home');
	}

	public function api_projects()
	{
		$projects = Project::all();

		$j =0;
		foreach ($projects as $project) {
			$student = Project::find($project->id)->students;
			$i =0;
			$arrs = ['0'=>''];
			foreach ($student as $members) {

				$arrs[$i] = $members->name;
				$i++;
			}
			$arr = ['id' => '','name'=>'','address'=>'','demo'=>'','abs'=>'','detail'=>'','members'=>''];
			$arr['id'] = $project->id;
			$arr['name']= $project->name;
			$arr['address'] = $project->address;
			$arr['demo'] = $project->demo;
			$arr['abs'] = $project->abstract;
			$arr['detail'] = $project->detail;
			$arr['members'] = $arrs;
			$arr_list[$j] = $arr;
			$j++;
		}
		return json_encode($arr_list);

	}



	public function api_project($project_id)
	{
		$project = Project::find($project_id);
		$student = Project::find($project_id)->students;
		$i = 0;
		$arrs = ['0'=>''];
		foreach ($student as $members ) {
			# code...
			$arrs[$i] = $members->name;
			$i++;
		}
		$arr = ['name'=>'','address'=>'','demo'=>'','abs'=>'','detail'=>'','members'=>''];
		$arr['name']= $project->name;
		$arr['address'] = $project->address;
		$arr['demo'] = $project->demo;
		$arr['abs'] = $project->abstract;
		$arr['detail'] = $project->detail;
		$arr['members'] = $arrs;


		return json_encode($arr);
	}

	public function table()
	{
		$projects = Project::all();
		// $students = Project::find($projects->id)->students;
		return view('projects.table')->withProject($projects);
	}



}





