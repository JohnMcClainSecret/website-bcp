<?php

namespace App\Http\Controllers;
use App\Models\GetOffer;
use \PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function view(){
        return view('panel.loi');
    }

    public function downloadLOI()
    {
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();

        $data = [
            'Seller' => $offer->OwnerName,
            'Phone' => $offer->Phone,
            'Email' => $offer->Email,
            'Resort' =>  $offer->ResortName,
            'Location' =>  $offer->Location,
            'UnitType' =>  $offer->typeRoom,
            'Membership' =>  $offer->membership,
            'Registered' =>  $offer->RegWeeks.' '.$offer->AdditionalWeek,
            'Maintenance' => $offer->MaintFee,
            'Exchange' => $offer->exchCompany,
            'PurchasePrice' => $offer->PurchasePrice,
        ];
        // dd($data['Seller']);

        $pdf = PDF::loadView('panel.loi', $data);
        return $pdf->download('l.o.i.pdf');
    }

    public function submitLOI(Request $request){
        if($request->has('LOIFirm')){
            dd($request->all());
        }
    }
}
