<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class ImmersiveCourseController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'immersiveCourse')->first();
        return view("immersiveCourse", compact('editors'));
    }
}
