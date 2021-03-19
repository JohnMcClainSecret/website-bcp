<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\LiveOffer;
use App\Models\Newsletter as NewsletterModel;
use App\Mail\ContactMessage;
use App\Mail\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request){
        $contact = new Contact();

        // if($request->Token != null){
            $contact->Name = $request->name;
            $contact->Email = $request->email;
            $contact->Subject = $request->subject;
            $contact->Message = $request->message;
            $contact->save();

            if($contact){
                Mail::to('contact@businessconsultantprimebrokers.com')->send(new ContactMessage($contact));
                return  Redirect::back()->with('status', 'This message was successfully sent !, we have sent you a confirmation email');
            }else{
                return view('errorpage');
            }
        // }else{
        //     return view('errorpage');
        // }
    }

    public function welcome(){
        $offers = LiveOffer::all();
        return view('welcome',compact('offers'));
    }
    public function errorPage(){
        return view('errorpage');
    }

    public function newsletter(Request $request){
        $news = new NewsletterModel();

        $news->Email = $request->email;
        $news->save();

        if($news){
            Mail::to($news->Email)->send(new Newsletter());
            return  Redirect::back()->with('status', 'Thank you for subscribe !');
        }else{
            return view('errorpage');
        }
    }
}
