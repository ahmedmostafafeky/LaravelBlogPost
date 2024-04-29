<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success','goodbye!');
    }
    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => "required|email",
            'password' => "required"
        ]);

        if(! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => "Your provided data isn't correct"
            ]);
        };

        session()->regenerate();
        return redirect('/')->with('success','welcome back');

//        return back()
//            ->withInput()
//            ->withErrors(['email' => "Your provided data isn't correct"]);

    }
}
