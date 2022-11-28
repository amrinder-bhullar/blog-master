<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'], //Rule::exists('users', 'email')
            'password' => ['required']
        ]);

        //attempt to authernicater and login the user

        //based on provided credentials

        if (!auth()->attempt($attributes)) {
            //auth failed
            throw ValidationException::withMessages(['email' => 'your provided credentials could not be verified']);
        }

        // redirect with a success flash message
        return redirect('/')->with('success', 'Welcome Back!');

        // or some prefer this other way
        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'your provided credentials could not be verified']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye');
    }
}
