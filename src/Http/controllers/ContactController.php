<?php

namespace tawhid\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use tawhid\contact\Mail\ContactMailable;
use tawhid\contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_to_mail'))->send(new ContactMailable($request->message, $request->name));
       Contact::create($request->all());
       return redirect(route('contact'));
    }
}
