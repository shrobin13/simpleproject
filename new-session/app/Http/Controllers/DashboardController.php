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
            session()->flash('error','Please Login first!');
            return redirect()->route('signin');
        }
    }
    public function signout(){
        Auth::logoutCurrentDevice();
        session()->flush();
        return redirect()->route('signin');
    }
}
