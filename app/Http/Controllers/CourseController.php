<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getALlCourse()
    {
        $course = Course::all();
        return view('home',['courses'=>$course]);


    }
}
