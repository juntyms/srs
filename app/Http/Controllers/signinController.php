<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\User;
use App\Models\Privilege;
use Illuminate\Http\Request;
use Adldap\Laravel\Facades\Adldap;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class signinController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postloginn ( LoginRequest $request)
    {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->route('dashboard');
            }
     
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
    }

    public function postlogin(LoginRequest $request)
    {
        //dd($request->all());
        $username = $request->username . '@sct.edu.om';
        $password = $request->password;

        try {

            if (Adldap::auth()->attempt($username, $password)) {
                $user = \DB::table('users')->where(['username' => $request->username])->first();
                //dd($user);
                if ($user) {
                    Auth::loginUsingId($user->id);

                    return redirect()->route('dashboard');
                } else {
                    Alert::error('Unable to Login', 'User Not Found on Database');

                    return redirect()->route('login');
                }
            } else {
                Alert::error('Unable to Login', 'Invalid Username / Password');
                return redirect()->route('login');
            }
        } catch (Adldap\Auth\UsernameRequiredException $e) {
            echo 'The user didn\'t supply a username.';
        } catch (Adldap\Auth\PasswordRequiredException $e) {
            Alert::error('Unable to Login', 'Password Must be specified');
            return redirect()->back();
        }
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
