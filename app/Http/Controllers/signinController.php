<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Privilege;
use Adldap\Laravel\Facades\Adldap;
use Alert;
use Illuminate\Support\Facades\Session;

class signinController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
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
