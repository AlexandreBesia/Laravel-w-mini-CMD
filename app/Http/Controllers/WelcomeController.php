<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class WelcomeController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'welcome')->first();
        return view("welcome", compact('editors'));
    }
}
