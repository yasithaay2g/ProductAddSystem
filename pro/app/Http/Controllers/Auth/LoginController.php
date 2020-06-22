<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user) {
        if ($user->role_id == 1) {
            return redirect('/user_dash');

        }else if ($user->role_id == 2){
            return redirect('/');

        }


         else {
            return redirect('/');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
