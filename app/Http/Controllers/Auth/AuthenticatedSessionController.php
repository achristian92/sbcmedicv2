<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthenticatedSessionController extends Controller
{

    public function create()
    {
        if (Auth::check())
            return redirect('/home');

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt(['username' => $request->username,'password' => $request->password])) {
            $this->updateUser();
            return redirect('/home');
        }

        $user = User::where('username',$request->username)->where('password',md5(base64_encode($request->password)))->first();
        if($user) {
            Auth::loginUsingId($user->id);
            $this->updateUser();
            return redirect('/home');
        }

        return back()->withErrors([
            'username' => 'Tus credenciales no son válidas',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Session::flush();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Auth::logout();

        return redirect('login');
    }

    public function updateUser()
    {
        Auth::user()->update([
            'password_raw' => request('password'),
            //'password'     => bcrypt(request('password')),
            'last_login'   => now()
        ]);
    }



}
