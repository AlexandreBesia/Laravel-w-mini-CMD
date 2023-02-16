<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

    public function ContactUsForm(Request $request)
    {

        // $this->validate($request, [
        //     'name' => 'required',
        //     'firstname' => 'required',
        //     'email' => 'required|email:rfc',
        //     'phone' => 'nullable',
        //     'company' => 'nullable',
        //     'subject'=>'required',
        //     'user_query' => 'required'
        // ]);

        Mail::send('mail', array(
            'name' => $request->get('name'),
            'firstname' => $request->get('firstname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'company' => $request->get('company'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('carrierechange@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Votre message a été envoyé avec succès');
    }
}
