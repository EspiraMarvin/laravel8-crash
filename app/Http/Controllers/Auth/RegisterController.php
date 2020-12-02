<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

        return view('auth.register');
    }

    public function store(Request $request){
//        dd('register');

        //validation
//        dd($request->email);

        $this->validate($request, [
           'name' => 'required|max:255'
        ]);

        //store user
        //sign user in
        //redirect
    }
}
