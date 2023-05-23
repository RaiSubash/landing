<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function saveContact(Request $request)
    {
        // dd('ok');
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'comment' => 'required',
        ]);
        // dd($request);
        $contact= new Contact();
            $contact->name =$request->input('name');
            $contact->email =$request->input('email');
            $contact->subject =$request->input('subject');
            $contact->comment =$request->input('comment');
            $contact->save();
            return redirect()->back()->with('message', 'Book added successfully');        }
}
