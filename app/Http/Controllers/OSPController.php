<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class OSPController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'osp')->first();
        return view("osp", compact('editors'));
    }
}
