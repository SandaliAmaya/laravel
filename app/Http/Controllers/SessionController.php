<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;



class SessionController extends Controller {

    //use Auth;

    public function create()
    {
        return view('session.login');
    }



    public function destroy()
    {
        Auth::logout(); // logging out user
        return Redirect::to('login'); // redirection to login screen
    }

    public function store()
    {

        // Creating Rules for Email and Password

        $rules = array(
            'email' => 'required|email' // make sure the email is an actual email
            );

			// password has to be greater than 3 characters and can only be alphanumeric and);
			// checking all field

			$validator = Validator::make(Input::all() , $rules);

			// if the validator fails, redirect back to the form

			if ($validator->fails())
            {
                return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            }
            else
            {

                // create our user data for the authentication

                $userdata = array(
                    'email' => Input::get('email') ,
                    'password' => Input::get('password')
                );

                // attempt to do the login

                if (Auth::attempt($userdata))
                {

                    return Redirect::to('/profile');
                    // validation successful
                    // do whatever you want on success

                }
                else
                {

                    // validation not successful, send back to form
                    echo "not successful";
                    return Redirect::to('profile');
                }
            }
    }
//    public function store()
//    {
//        if (auth()->attempt(request(['email', 'password'])) == false) {
//            return back()->withErrors([
//                'message' => 'The email or password is incorrect, please try again'
//            ]);
//        }
//
//        return redirect()->to('/profile');
//
//    }
//
//    public function destroy()
//    {
//        auth()->logout();
//
//        return redirect()->to('/login');
//    }

}
