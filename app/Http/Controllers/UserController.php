<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display the login page.
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Display the register page.
     */
    public function register()
    {
        $user = Auth::user();

        if (!empty($user)) {
            return view('users.register');
        } else {
            return redirect('/');
        }
    }

    /**
     * Display the modify password page.
     */
    public function changePassword()
    {
        $user = Auth::user();

        if (!empty($user)) {
            return view('users.changepassword');
        } else {
            return redirect('/');
        }
    }

    /**
     * Change the password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error', 'L\'ancien mot de passe ne correspond pas');
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()
            ->route('users.changepassword')
            ->with('success', 'Votre mot de passe a été modifié avec succès');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Attemps to login based on the request provided.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function loginInput(Request $request)
    {
        $credentials = $request->validate([
            'name'     => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('clients.index');
        }

        return redirect()
            ->route('users.login')
            ->with('error', 'Le nom d\'utilisateur ou le mot de passe est incorrect');
    }

    /**
     * Attempt to register account based on the request provided.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function registerInput(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $existingUser = User::where(['name' => $request->name])->first();
        if (empty($existingUser)) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()
                ->route('users.login')
                ->with('success', 'Utilisateur créer avec succès');
        }

        return redirect()
            ->route('users.register')
            ->with('error', 'Nom d\'utilisateur déjà utilisé');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()
            ->route('users.login')
            ->with('success', 'Utilisateur créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
