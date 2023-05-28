<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   /**
    * Task 1: Request Validation
    *
    *Implement request validation for a registration form that contains 
    *the following fields: name, email, and password. 
    *Validate the following rules:
    */

    //Answer - 1

    public function ValidateAndRegister(Request $request)
    {
     //   dd($request->all());

        $request->validate(
            [
                'name'=>'required|string|min:2',
                'email'=>'required|email',
                'password'=>'required|string|min:8'
            ]
            );
            return back()->withSuccess('Register Success !!');

    }

   
}
