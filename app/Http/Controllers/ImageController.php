<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
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
            $path = public_path('images');
            $images = File::allFiles($path);
            return view('image-form')->with('images', $images);
        } else {
            return redirect('/');
        }
    }

    /**
     * Store a newly created image in public storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $imageName = $request->image->getClientOriginalName();

        $request->image->move(public_path('images'), $imageName);

        return back()->with('success', 'Image mise en ligne avec succès!')
        ->with('image', $imageName);
    }

    public function removeImage()
    {
        if(File::exists(public_path('images'))){
            File::delete(public_path('images'));
        }else{
            dd('File not found');
        }
    }
}
