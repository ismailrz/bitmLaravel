<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacts;

class ContactController extends Controller
{

    public function index(){
        $contacts =contacts::get();
        return view('contacts.index', compact('contacts'));
    }

    public function create(){
        return view('contacts.contact');
    }

      public function store(Request $request){

            contacts::create([

               'name' => $request ->get('name'),
               'phone' => $request ->get('phone'),
               'message' => $request ->get('message')
            ]);


//        $contact = new contacts();
//
//        $contact->name = $request->name;
//        $contact->phone = $request->phone;
//        $contact->message = $request->message;
//        $contact->save();

        return redirect()->back()->with('message', 'Data insert successfull!');
    }


}
