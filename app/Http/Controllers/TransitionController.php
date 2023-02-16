<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class TransitionController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'transition')->first();
        return view("transition", compact('editors'));
    }
}
