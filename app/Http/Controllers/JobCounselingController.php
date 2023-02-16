<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class JobCounselingController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'jobCounseling')->first();
        return view("jobCounseling", compact('editors'));
    }
}
