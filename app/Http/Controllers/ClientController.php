<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Professionalstatu;
use Illuminate\Http\Request;
use Propaganistas\LaravelPhone;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    // TODO ? faire une request

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if (!empty($user)) {
            $clients = Client::with('professionalstatu')->latest()->paginate(5);

            return view('clients.client', compact('clients'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $professionalstatu = Professionalstatu::all();

        return view("clients.create", compact('professionalstatu'));
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
            'last_name' 	        => 'required|min:2|max:50',
            'first_name' 	        => 'required|min:2|max:50',
            'phone_number'	        => 'nullable|starts_with:+|phone:CH, FR, IT, DE, AT',
            'email' 		        => 'nullable|email:rfc',
            'birth_date'	        => 'nullable|date',
            'professionalstatu_id'  => 'nullable|integer|exists:professionalstatus,id',
            'type_of_service'       => 'nullable|min:2',
            'duration_and_date_of_consultation' => 'nullable|min:2',
            'due_date'              => 'nullable|date',
            'personal_note'         => 'nullable|min:2'
        ]);

        $client = new Client();
        $client->last_name 	        				= $request->last_name;
        $client->first_name	        				= $request->first_name;
        $client->phone_number	        			= $request->phone_number;
        $client->email 		        				= $request->email;
        $client->birth_date	        				= $request->birth_date;
        $client->professionalstatu_id  				= $request->professionalstatu_id;
        $client->type_of_service       				= $request->type_of_service;
        $client->duration_and_date_of_consultation 	= $request->duration_and_date_of_consultation;
        $client->due_date            				= $request->due_date;
        $client->personal_note						= $request->personal_note;
        $client->save();

        return redirect()->route("clients.index")->with("success", "Client créé");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professionalstatu = Professionalstatu::all();
        $client = Client::findOrFail($id);
        return view("clients.show", ["client" => $client], compact('professionalstatu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //exemple tiré de Vapeur
        // $game = Game::with('genres')->findOrFail($id);
        // $genres = Genre::where('genre_id', null)->with('children')->get();
        // return view('games.edit', compact('game', 'genres'));

        //ma version qui marche pas
        // $professionalstatu = Professionalstatu::all();
        // $client = Client::with('professionalstatu')->findOrFail($id);
        // $statu = Professionalstatu::where('professionalstatu_id', null)->get();
        // return view('clients.edit', compact('client', 'statu'));

        $professionalstatu = Professionalstatu::all();
        $client = Client::findOrFail($id);
        return view('clients.edit', ["client" => $client], compact('professionalstatu'));
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
        $request->validate([
            'last_name' 	        => 'required|min:2|max:50',
            'first_name' 	        => 'required|min:2|max:50',
            'phone_number'	        => 'nullable|starts_with:+|phone:CH, FR, IT, DE, AT',
            'email' 		        => 'nullable|email:rfc',
            'birth_date'	        => 'nullable|date',
            'professionalstatu_id' => 'nullable|integer|exists:professionalstatus,id',
            'type_of_service'       => 'nullable|min:2',
            'duration_and_date_of_consultation' => 'nullable|min:2',
            'due_date'              => 'nullable|date',
            'personal_note'         => 'nullable|min:2'
        ]);

        $client = Client::findOrFail($id);
        $client->fill($request->all());
        $client->save();

        return redirect()->route("clients.index")->with("success", "Client mis à jour");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = \App\Models\Client::find($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success','Client supprimé');
    }

}
