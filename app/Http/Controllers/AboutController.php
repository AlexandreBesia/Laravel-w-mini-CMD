<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;


class AboutController extends Controller
{
    public function index()
    {
        $editors = Editor::where('page_name', '=', 'about')->first();
        return view("about", compact('editors'));
    }
}
