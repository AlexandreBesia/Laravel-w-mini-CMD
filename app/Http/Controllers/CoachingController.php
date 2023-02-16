<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class CoachingController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'coaching')->first();
        return view("coaching", compact('editors'));
    }
}
