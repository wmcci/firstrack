<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Hash;


class AdminLoginController extends Controller
{
    public function index(){

        // $pass = Hash::make('password');
        //  dd($pass);
        return view('Admin.login');


    }

    public function forget_password(){

        return view('Admin.forget_password');
    }


       public function login_submit(Request $request){


        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],


        [
        'email.required' => 'Ce champ email est requis',
        'password.required' => 'Le champ mot de passe est requis',
        'email.email' => 'Le champ doit être une adresse mail valide',
        ]);


        $credentials  = [
             'email' => $request->email,
             'password' => $request->password,
        ];



        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin_home');
        }else{
           return redirect()->route('admin_login')->with('error', 'Les informations ne sont pas correctes');
        }
    }



    public function logout(){
       Auth::guard('admin')->logout();
       return redirect()->route('admin_login');
    }
}
