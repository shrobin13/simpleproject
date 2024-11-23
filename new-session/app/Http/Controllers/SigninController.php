<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function check(Request $request){

        $validated = $request->validate([
            'username'=>'required|string|max:256',
            'password'=>'required|string|max:256',
        ]);

        if(Auth::attempt($validated)){

            $request->session()->regenerate();
            session()->flash('success','Successfully signed in successfully!');
            return redirect()->intended('dashboard');
        }
        else{
            session()->flash('error','Wrong Credentials!');
            return redirect()->route('signin');
        }
    }

    public function show()
    {
        return view('signin');
    }
}
