<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Event;
use App\Student;
use App\Project;
use App\Tag;

class PageController extends Controller {
    public function home()
    {
        $students = Student::take(9)->get();
        $projects = Project::take(5)->get();
        $events = Event::take(5)->get();
        return view('pages.home')->withStudents($students)->withProjects($projects)->withEvents($events)->withTitle("首页");
    }
}
