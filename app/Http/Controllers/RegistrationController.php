<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class RegistrationController extends Controller
{
   public function create(){
       return view('registration.create');
   }


public function store(Request $request){

       $name=$request->input('name');
       $email=$request->input('email');
       $password=$request->input('password');

       DB::insert('insert into users(name,email,password) value(?,?,?)',[$name,$email,$password]);
       echo "Record inserted successfully.<br>";

    }
}

