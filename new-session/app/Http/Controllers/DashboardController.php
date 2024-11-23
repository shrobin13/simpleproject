<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            $username = Auth::user();
            return view('dashboard',$username);
        }
        else{
            session()->flush('error','Please Login first!');
            return redirect()->route('signin');
        }
    }
    public function signout(){
        Auth::logoutCurrentDevice();
        return redirect()->route('signin');
    }
}
