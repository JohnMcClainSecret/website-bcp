<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\LiveOffer;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request){
        $contact = new Contact();

        $contact->Name = $request->name;
        $contact->Email = $request->email;
        $contact->Subject = $request->subject;
        $contact->Message = $request->message;
        $contact->save();

        if($contact){
            Mail::to('contact@businessconsultantprimebrokers.com')->send(new ContactMessage($contact));
        }
        return view('welcome')->with('status', 'Your message was sending!');


        // $secret = \config('captcha.v3');

        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => $secret,
        //     'response' => $request['g-recaptcha-response'],
        // ]);

        // session()->put([
        //     'payload' => $response->body(),
        // ]);

    }

    public function welcome(){
        $offers = LiveOffer::all();
        return view('welcome',compact('offers'));
    }
}
