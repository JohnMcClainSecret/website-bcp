<?php

namespace App\Http\Controllers;
use App\Models\Files;
use App\Models\GetOffer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $files = Files::where('user_id', Auth::user()->id)->first();
        $status = GetOffer::where('user_id',Auth::user()->id)->first();
        
        return view('panel.index', compact('files','status'));
    }

}
