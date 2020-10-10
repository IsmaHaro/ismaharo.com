<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
         * 3. Vamos a enviar un email
         */
        Mail::to('ismaharo18@gmail.com')->send(new ContactMail($contact));

        /*
         * 4. Return succesfull view
         */
        return view('thank-you');
    }

    public function sitemap()
    {
        return view('sitemap');
    }


    public function blogPost1()
    {
        return view('blogs.seo.blog-post-1');
    }

    public function SeoService()
    {
        return view('seo-service');
    }
}
