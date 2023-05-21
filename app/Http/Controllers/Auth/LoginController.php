<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;



     public function redirectTo()
     {
         if(Auth::user()->role == 'admin')
         {
             return 'accueil';
         }


         if(Auth::user()->role == null)
         {
             return 'client';
         }

     }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
