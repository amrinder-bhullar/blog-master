<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        //when vistor hits domain.com/register this action returns the view
        return view('register.create');
    }

    public function store()
    {
        //create the user, when you get the POST request on /register.

        $attributes = request()->validate([
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'name' => 'required|max:255|min:5',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        // $attributes['password'] = bcrypt($attributes['password']); now doing it on User.php Model by creating a function setPasswordAttribute if you name it differently it will not work

        $user = User::create($attributes);

        // log the user in
        Auth()->login($user);

        // session()->flash('success', 'Your account has been created.');

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
