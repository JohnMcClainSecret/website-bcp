<?php

namespace App\Http\Controllers;
use App\Models\GetOffer;
use App\Models\Files;
use App\Models\User;
use App\Models\Documents;
use App\Mail\LOIAceptada;
use App\Mail\TNLAceptada;
use App\Mail\ContractAceptada;
use \PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class PanelController extends Controller
{
    public function view(){
        return view('panel.loi');
    }
    public function downloadLOI(){
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();

        $signature = User::find(Auth::user()->id);

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
            'Signature' => $signature->PathSignature,
        ];
        $pdf = PDF::loadView('panel.loi', $data);
        return $pdf->download('l.o.i.pdf');
    }
    public function submitLOI(Request $request){
        $id = Auth::user()->id;
        $user = Auth::user()->name;

        if($request->has('LOIFirm')){
            $mimeType = $request->LOIFirm->getClientOriginalExtension();
            $request->file('LOIFirm')->storeAs("public/users/$id-$user/",('L.O.I.'.$mimeType));

            $files = Files::where('user_id',Auth::user()->id)->first();

            if($files == null){
                $files = new Files();
                $files->user_id = Auth::user()->id;
                $files->PathLOI = 'storage/users/'.$id.'-'.$user.'/L.O.I.'.$mimeType;
                $files->save();
            }else{
                $files->PathLOI = 'storage/users/'.$id.'-'.$user.'/L.O.I.'.$mimeType;
                $files->save();
            }


            $offer = GetOffer::where('user_id',$id)->first();
            $offer->Status = 'Aceptado';
            $offer->save();

            Mail::to('hawaicincoceronomams@gmail.com')->send(new LOIAceptada());
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
    public function uploadSignature(Request $request){
        $id = Auth::user()->id;
        $user = Auth::user()->name;
        $mimeType = $request->Signature->getClientOriginalExtension();

        if($request->has('Signature')){
            $request->file('Signature')->storeAs("public/users/$id-$user/",('Signature.'.$mimeType));
            $user = User::find(Auth::user()->id);
            $user->PathSignature = 'data:image/png;base64,'.base64_encode(file_get_contents($request->file('Signature')));
            $user->save();
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
    public function signatureDrawn(){
        $user = User::find(Auth::user()->id);

        $user->PathSignature = $_POST['image'];
        $user->save();

        if($user){
            return 'exito';
        }else{
            return 'fail';
        }
    }
    public function previewLOI(Request $request){
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();
        $signature = User::find(Auth::user()->id);
        // dd($request->all());
        if(!isset($request->Withouts)){
            if($signature->PathSignature != null){
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
                    'Signature' => $signature->PathSignature,
                ];

                $pdf = PDF::loadView('panel.loi', $data);
                Storage::put('public/users/'.$signature->id.'-'.$signature->name.'/L.O.I.pdf',$pdf->output()) ;

                $files = Files::where('user_id', Auth::user()->id)->first();
                    if($files != null){
                        $files->PathLOI = 'storage/users/'.$signature->id.'-'.$signature->name.'/L.O.I.pdf';
                        $files->save();
                    }else{
                        $files = new Files();
                        $files->user_id = Auth::user()->id;
                        $files->PathLOI = 'storage/users/'.$signature->id.'-'.$signature->name.'/L.O.I.pdf';
                        $files->save();
                    }

                $offer = GetOffer::where('user_id', Auth::user()->id)->first();
                $offer->Status = 'Aceptado';
                $offer->save();

                Mail::to('hawaicincoceronomams@gmail.com')->send(new LOIAceptada());
                return $pdf->download('L.O.I');
            }else{
                return Redirect::back()->with('status', 'Sorry, we did not find your signature in our Database, please try again. !');
            }
        }else{
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

            $pdf = PDF::loadView('panel.loi', $data);
            Storage::put('public/users/'.$signature->id.'-'.$signature->name.'/L.O.I.pdf',$pdf->output()) ;

            $files = Files::where('user_id', Auth::user()->id)->first();
            if($files != null){
                $files->PathLOI = 'storage/users/'.$signature->id.'-'.$signature->name.'/L.O.I.pdf';
                $files->save();
            }else{
                $files = new Files();
                $files->user_id = Auth::user()->id;
                $files->PathLOI = 'storage/users/'.$signature->id.'-'.$signature->name.'/L.O.I.pdf';
                $files->save();
            }

            $offer = GetOffer::where('user_id', Auth::user()->id)->first();
            $offer->Status = 'Aceptado';
            $offer->save();

            Mail::to('hawaicincoceronomams@gmail.com')->send(new LOIAceptada());
            return $pdf->download('L.O.I');
        }
    }

    // /////////////////////////////TNL //////////////////////////////////////////////////77

    public function downloadTNL(){
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();
        $signature = User::find(Auth::user()->id);
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
            'Signature' => $signature->PathSignature,
        ];
        $pdf = PDF::loadView('panel.tnlPDF', $data);
        return $pdf->download('TNL.pdf');
    }
    public function submitTNL(Request $request){
        $id = Auth::user()->id;
        $user = Auth::user()->name;

        if($request->has('TNLFirm')){
            $mimeType = $request->TNLFirm->getClientOriginalExtension();
            $request->file('TNLFirm')->storeAs("public/users/$id-$user/",('TNL.'.$mimeType));

            $files = Files::where('user_id', Auth::user()->id)->first();
            $files->PathTNL = 'storage/users/'.$id.'-'.$user.'/TNL.'.$mimeType;
            $files->save();

            $offer = GetOffer::where('user_id',$id)->first();
            $offer->Status = 'Aceptado';
            $offer->TNL = 2;
            $offer->save();

            Mail::to('hawaicincoceronomams@gmail.com')->send(new TNLAceptada());
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
    public function uploadSignatureTNL(Request $request){
        $id = Auth::user()->id;
        $user = Auth::user()->name;
        $mimeType = $request->Signature->getClientOriginalExtension();

        if($request->has('Signature')){
            $request->file('Signature')->storeAs("public/users/$id-$user/",('SignatureTNL.'.$mimeType));
            $user = User::find(Auth::user()->id);
            $user->PathSignature = 'data:image/png;base64,'.base64_encode(file_get_contents($request->file('Signature')));
            $user->save();
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
    public function signatureDrawnTNL(){
        $user = User::find(Auth::user()->id);

        $user->PathSignature = $_POST['image'];
        $user->save();

        if($user){
            return 'exito';
        }else{
            return 'fail';
        }
    }
    public function previewTNL(Request $request){
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();
        $offer->TNL = 2;
        $offer->save();

        $signature = User::find(Auth::user()->id);

        if(!isset($request->Withouts)){
            if($signature->PathSignature != null){
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
                    'Signature' => $signature->PathSignature,
                ];

                $pdf = PDF::loadView('panel.tnlPDF', $data);
                Storage::put('public/users/'.$signature->id.'-'.$signature->name.'/TNL.pdf',$pdf->output()) ;

                $files = Files::where('user_id',Auth::user()->id)->first();
                $files->PathTNL = 'storage/users/'.$signature->id.'-'.$signature->name.'/TNL.pdf';
                $files->save();

                Mail::to('hawaicincoceronomams@gmail.com')->send(new TNLAceptada());
                return $pdf->download('TNL');
            }else{
                return Redirect::back()->with('status', 'Sorry, we did not find your signature in our Database, please try again. !');
            }
        }else{
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

            $pdf = PDF::loadView('panel.tnlPDF', $data);
            Storage::put('public/users/'.$signature->id.'-'.$signature->name.'/TNL.pdf',$pdf->output()) ;

            $files = Files::where('user_id',Auth::user()->id)->first();
            $files->PathTNL = 'storage/users/'.$signature->id.'-'.$signature->name.'/TNL.pdf';
            $files->save();

            Mail::to('hawaicincoceronomams@gmail.com')->send(new TNLAceptada());
            return $pdf->download('TNL');

        }

    }

    //////////////////////////////////////CONTRACT //////////////////////////////////////////////////7

    public function downloadContract(){
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();
        $signature = User::find(Auth::user()->id);
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
            'Signature' => $signature->PathSignature,
        ];
        $pdf = PDF::loadView('panel.contract', $data);
        return $pdf->download('Contract.pdf');
    }
    public function submitContract(Request $request){
        $id = Auth::user()->id;
        $user = Auth::user()->name;

        if($request->has('ContractFirm')){
            $mimeType = $request->ContractFirm->getClientOriginalExtension();
            $request->file('ContractFirm')->storeAs("public/users/$id-$user/",('Contract.'.$mimeType));

            $files = Files::where('user_id',Auth::user()->id)->first();
            $files->PathContract = 'storage/users/'.$id.'-'.$user.'/Contract.'.$mimeType;
            $files->save();

            $offer = GetOffer::where('user_id',$id)->first();
            $offer->Contract = 2;
            $offer->save();

            Mail::to('hawaicincoceronomams@gmail.com')->send(new ContractAceptada());
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
    public function uploadSignatureContract(Request $request){
        $id = Auth::user()->id;
        $user = Auth::user()->name;
        $mimeType = $request->Signature->getClientOriginalExtension();

        if($request->has('Signature')){
            $request->file('Signature')->storeAs("public/users/$id-$user/",('Signature.'.$mimeType));
            $user = User::find(Auth::user()->id);
            $user->PathSignature = 'data:image/png;base64,'.base64_encode(file_get_contents($request->file('Signature')));
            $user->save();
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
    public function signatureDrawnContract(){
        $user = User::find(Auth::user()->id);

        $user->PathSignature = $_POST['image'];
        $user->save();

        if($user){
            return 'exito';
        }else{
            return 'fail';
        }
    }
    public function previewContract(){
        $offer = GetOffer::where('user_id',Auth::user()->id)->first();
        $offer->Contract = 2;
        $offer->save();

        $signature = User::find(Auth::user()->id);

        if($signature->PathSignature != null){
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
                'Signature' => $signature->PathSignature,
            ];

            $pdf = PDF::loadView('panel.contract', $data);
            Storage::put('public/users/'.$signature->id.'-'.$signature->name.'/Contract.pdf',$pdf->output()) ;

            $files = Files::where('user_id',Auth::user()->id)->first();
            $files->PathContract = 'storage/users/'.$signature->id.'-'.$signature->name.'/Contract.pdf';
            $files->save();

            Mail::to('hawaicincoceronomams@gmail.com')->send(new ContractAceptada());
            return $pdf->download('Contract-BCPrimer');
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find your signature in our Database, please try again. !');
        }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////

    public function uploadDocuments(Request $request){
        $doc = new Documents();
        $id = Auth::user()->id;
        $user = Auth::user()->name;

        if($request->has('Doc')){
            $mimeType = $request->Doc->getClientOriginalExtension();
            $request->file('Doc')->storeAs("public/users/$id-$user/",($request->Description.'.'.$mimeType));

            $doc->Document = 'storage/users/'.$id.'-'.$user.'/'.$request->Description.'.'.$mimeType;
            $doc->Description = $request->Description;
            $doc->user_id = $id;
            $doc->save();
            return back();
        }else{
            return Redirect::back()->with('status', 'Sorry, we did not find any document to upload, please try again. !');
        }
    }
}
