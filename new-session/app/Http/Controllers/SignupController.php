<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SignupController extends Controller
{

    public function store(Request $request)
    {
        $result = $request->all();
        //   dd($result);
        try{
            $validated = $request->validate(
                [
                    'username' => 'required|string|unique:users,username|max:256',
                    'email'    => 'required|string|max:256|email',
                    'password' => 'required|string|min:6',
                    'conpass'  => 'required|string|same:password',
                ],
            );
        }
        catch(QueryException $e){
            return redirect()->back()->withErrors(['error'=>'Username already exists!'])->withInput();
        }

        $user = new User();

        $user->username = $validated['username'];
        $user->email  = $validated['email'];
        $user->password = $validated['conpass'];
        $result = $user->save();
        // var_dump($result);
        if ($result) {
            session()->flash('success', 'Signup successful!');
            return redirect()->route('signup');
        } else {
            session()->flash('error', 'Signup failed. Please try again.');
            return redirect()->route('signup');
        }
    }

    public function show()
    {
        return view('signup');
    }
}
