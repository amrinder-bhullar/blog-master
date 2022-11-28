<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        $newsletter->subscribe(request('email'));
        // try {
        //     // $newsletter = New Newsletter(); I have instantiated it in the function above function(Newsletter $newsletter)

        // } catch (\Exception $e) {
        //     throw \Illuminate\Validation\ValidationException::withMessages(['email' => 'This email could not be added to our newsletter list']);
        // }


        return redirect('/')->with('success', 'You are now signed up for our newsletter');
    }
}
