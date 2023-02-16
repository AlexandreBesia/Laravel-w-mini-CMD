<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class FormationController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'formation')->first();
        return view("formation", compact('editors'));
    }
}
