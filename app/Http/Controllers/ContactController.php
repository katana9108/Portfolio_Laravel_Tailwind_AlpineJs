<?php

namespace App\Http\Controllers;

use App\Mail\Contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;



class ContactController extends Controller
{
    public function submit(Request $request){
        $validated= $request->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'message'=>'required'
        ]);
        Mail::to('jeycodeur@gmail.com')->send(new Contactmail($validated['name'],$validated['email'],$validated['message']));
        toast('Message send','success');

        return back();
    }
}
