<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function create() {
        return view('register.create');
    }
    public function store() {
        //create the user
        $attributes = request()->validate([
            'name' => "required|min:5|max:255",
            'username' => ['required','min:4','max:255', Rule::unique('users','username')],
            'email' => "required|email|max:255|unique:users,email",
            'password' => ['required','min:8','max:255']
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'your account has been created.');
    }

}
