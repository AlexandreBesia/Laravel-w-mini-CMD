<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Editor;
use GrahamCampbell\Markdown\Facades\Markdown;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if (!empty($user)) {
            // $editors = Editor::all();
            // return view('editors.index', ["editors" => $editors]);

            $editors = Editor::latest()->paginate(10);
            return view('editors.index', compact('editors'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name'         => 'nullable',
            'bloc_id'           => 'nullable',
            'size_of_bloc'      => 'nullable',
            'index_column'      => 'nullable',
            'index_row'         => 'nullable',
            'content_of_bloc'   => 'nullable'
        ]);
        Editor::create([
            'page_name'         => $request->page_name,
            'bloc_id'           => $request->bloc_id,
            'size_of_bloc'      => $request->size_of_bloc,
            'index_column'      => $request->index_column,
            'index_row'         => $request->index_row,
            'content_of_bloc'   => Markdown::convert($request->content_of_bloc)->getContent(),
        ]);

        return redirect()->route('editors.index')->with("sucess", "bloc créé");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $editor = Editor::findOrFail($id);
        // return view("editors.show", ["editor" => $editor]);

        return view('editors.show', compact('editors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editor = Editor::findOrFail($id);
        return view("editors.edit", ["editor" => $editor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Editor::findOrFail($id)->update($request->all());
        return redirect()->route("editors.index")->with("sucess", "bloc mis à jour");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editor = Editor::find($id);
        $editor->delet();

        return redirect()->route("editors.index")->with("sucess", "bloc supprimé");
    }

}
