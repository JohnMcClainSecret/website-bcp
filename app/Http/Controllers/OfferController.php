<?php

namespace App\Http\Controllers;
use App\Models\GetOffer;
use App\Models\Employee;
use App\Mail\MailGetOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class OfferController extends Controller
{
    public function getanoffer(){
        $brokers = Employee::all();
        $broker[0]='Select one';

        foreach($brokers as $brok){
            $broker[] = $brok->Name;
        }
        return view('offer', compact(('broker')));
    }
    public function terms(){
        return view('terms');
    }
    public function sendOffer(Request $request){
        $offer = new GetOffer();

        $offer->typeRoom = $request->typeRoom;
        $offer->Weeks = $request->Weeks;
        $offer->AdditionalWeek = $request->AdditionalWeek;
        $offer->RegWeeks = $request->RegWeeks;
        $offer->membership = $request->membership;
        $offer->AmountPoints = $request->AmountPoints;
        $offer->YearsRemain = $request->YearsRemain;
        $offer->season = $request->season;
        $offer->OtherSeason = $request->OtherSeason;
        $offer->MaintFee = $request->MaintFee;
        $offer->exchCompany = $request->exchCompany;
        $offer->OtherExch = $request->OtherExch;
        $offer->Benefits = $request->Benefits;
        $offer->ResortName = $request->ResortName;
        $offer->Location = $request->Location;
        $offer->Email = $request->Email;
        $offer->OwnerName = $request->OwnerName;
        $offer->Phone = $request->Phone;
        $offer->Availability = $request->Availability;
        $offer->TipoVenta = 1;
        $offer->Terms = $request->Terms;
        $offer->id_employee = $request->Broker;
        $offer->typeRoom = $request->typeRoom;
        $offer->save();

        if($offer){
            Mail::to('contact@bcpbrokers.com')->send(new MailGetOffer($offer));
            return  Redirect::back()->with('status', 'This request was successfully sent !');
        }else{
            return view('errorpage');
        }
    }
}
