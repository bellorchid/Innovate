<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use EndaEditor;
use DB;
// use \Illuminate\Database\DatabaseManager;
use App\Student;
use App\StudentDetail;
use App\Tag;
use App\Project;
use Input;
use Image;
use Storage;
//七牛引入文件
// use Qiniu\Auth;
// use Qiniu\Storage\UploadManager;
class StudentController extends Controller {

  //非登录用户显示学生纵览页
	public function index(Request $request)
	{
		$students = Student::all();
		return view('students.index')->withStudents($students)->withTitle("实验班成员");
    // return json_encode($students); //测试数据
	}

  //非登录用户显示个人详细页面
	public function show($id)
	{
		$student = Student::find($id);
		$tags = $student->tags;
		$projects = $student->projects;
        return view('students.show')->withStudent($student)->withTitle("实验班成员");
	}

  //显示登陆页界面
  public function loginGet()
  {
    return view('students.login');

  }

  //登录数据处理
  public function loginPost(Request $request)
  {
      $this->validate($request, Student::rules());
      $id = $request->get('id');
      $password = $request->get('password');
      if (Auth::attempt(['id' => $id, 'password' => $password], $request->get('remember'))) {
          // if (!Auth::students()->is_admin) {
          //     return Redirect::route('stu_home');
          // } else {
          //     return Redirect::action('Admin\AdminController@index');
          // }  
        /*第一期暂时不需要教师管理员账户，所以不需要判断是否为教师用户*/
        return Redirect::route('stu_home');

      } else {
          return Redirect::route('login')
              ->withInput()
              ->withErrors('学号或者密码不正确，请重试！');
      }
  }

  //用户登出操作
  public function logout()
  {
      if (Auth::check()) {
          Auth::logout();
      }
      return Redirect::route('home');
  }

  // //只允许登录用户访问个人详细页,目前会出现重定向问题
  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }

  //显示用户的个人详细页
  public function home()
  {
    $student = Auth::user();
    // $id = Auth::user()->id;
    // $projects = Project::all();
    // $detail = StudentDetail::find($id);
    if(!Auth::check()) {
      return Redirect::route('login')->withErrors('请先登录后再访问该页面');

    } else {
      // $id = $student->id;
      // $projects = Project::all();
      $projects = Student::find($student->id)->projects;
      return view('admin.index')->withTitle("个人页面")->withStudent($student)->withProject($projects);

    }
  }

  public function resume()
  {

        return view('test',[
            'content'=>EndaEditor::MarkDecode(Auth::user()->resume)
        ]);
  }

  //显示学生修改页
  public function edit()
  {
    $student = Auth::user();
    if(!Auth::check()) {
      return Redirect::route('login')->withErrors('请先登录后再访问该页面');
    } else {
      return view('admin.edit')->withTitle('修改个人信息')->withStudent($student);
    }
  }

  //更新学生个人信息
  public function update(Request $request)
  {
    // $student = new Student;
    // $student->id = Auth::user()->id;
    $student = Student::where('id', Auth::user()->id)->first();
    $student->tel = $request->tel;
    $student->email = $request->email;
    $student->github = $request->github;
    $student->description = $request->description;
    $student->tags = $request->tags;
    $student->resume =$request->resume;
    // $student->resume_md = EndaEditor::MarkDecode(Auth::user()->resume);
    $student->save();
    session()->flash('message', '个人信息修改成功');

    return Redirect::route('stu_home');

  } 

  public function image_edit($id)
  {
    $student = Student::where('id',$id)->first();
    return view('admin.image')->withTitle('修改我的头像')->withStudent($student);
  }

  public function image_update()
  {
    $student = Student::where('id',Auth::user()->id)->first();
    if(Input::hasFile('icon')) {
      Image::make(Input::file('icon'))->resize(80, 80)->save('../../images/icons/'.Auth::user()->id.'.jpg');
    }
    if(Input::hasFile('photo')) {
      Image::make(Input::file('photo'))->resize(338, 329)->save('../../images/photos/'.Auth::user()->id.'.jpg');
    }
    $student->icon = url('images/icons/'.$student->id.'.jpg');
    $student->photo = url('images/photos/'.$student->id.'.jpg');
    $student->save();
    session()->flash('message','个人信息修改成功');
    return Redirect::route('stu_home');

    // $img = Image::make($_FILES[$request->icon]['tmp_name']);
    // return $img;


  }

  //测试方法
  public function insert() {
    $student = Student::find('12345678');
    $project = project::find('12108238');
    $user = new Student;
    $results = DB::select('select * from users where id = ?', [1]);
    $student->projects()->attach($project->id);
    print_r($results);
  }

  //安卓接口测试方法，
  public function test()
  {
    return response()->json(['name' => 'Abigail', 'state' => 'CA']);
  }

  public function pass()
  {
    $student = Auth::user()->id;
    $student->password = $request;
    $student->save();
  }

  public function api_students()
  {
    $students = Student::all();
    return $students->toJson();
  }

  public function api_student($id)
  {
    $detail = Student::find($id);
    return json_encode($detail);
  }

  // public function upImage()
  // {

  //   $accessKey = '<YOUR_APP_ACCESS_KEY>';
  //   $secretKey = '<YOUR_APP_SECRET_KEY>';
  //   $auth = new Auth($accessKey, $secretKey);

  //   $bucket = 'Bellorchid';

  //   // 设置put policy的其他参数, 上传回调
  //   //$opts = array(
  //   //          'callbackUrl' => 'http://www.callback.com/',  
  //   //          'callbackBody' => 'name=$(fname)&hash=$(etag)'
  //   //      );
    

  //   $token = $auth->uploadToken($bucket, null, 3600, $opts);
  //   $uploadMgr = New UploadManager();

  //   list($ret, $err) = $uploadMgr->putFile($token, null, __file__);
  //   echo "\n====> putFile result: \n";
  //   if ($err !== null) {
  //       var_dump($err);
  //   } else {
  //       var_dump($ret);
  //   }
  // }

}
