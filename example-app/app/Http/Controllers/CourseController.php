<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index(){
        return view("course.index");
    }

    function findCourse($id){
        $course = Course::find($id);
        echo $course->courseName;
    }
}
