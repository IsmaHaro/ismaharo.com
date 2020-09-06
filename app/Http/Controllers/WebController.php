<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class WebController extends Controller
{
    public function main()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function saveContact(Request $request)
    {
        /*
         * 1. Get form data
         */
        $name    = $request->name;
        $message = $request->message;
        $email   = $request->email;

        /*
         * 2. Store form data in database
         */
        $contact          = new Contact;
        $contact->name    = $name;
        $contact->message = $message;
        $contact->email   = $email;
        $contact->save();

         /*
          * 3. Return succesfull view
          */
         return view('thank-you');
    }
}
