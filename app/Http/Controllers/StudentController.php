<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        return view('student_create');
    }
    public function login()
    {
        return view('login_page');
    }
}
