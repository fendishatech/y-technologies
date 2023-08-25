<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Login User.
     */
    public function login(Request $req)
    {
        $user = User::where(['phone_no' => $req->phone_no])->first();
        $validatedData = $req->validate([
            'phone_no' => ['required'],
            'password' => ['required']
        ]);

        if ($validatedData) {
            if ($user && Hash::check($req->password, $user->password)) {
                // success
                $req->session()->put('user', $user);
                return redirect("/home");
            } else {
                return redirect()->back()->withErrors([
                    'custom_error' => 'Wrong password or username!',
                ])->withInput();
            }
        } else {
            return redirect()->back()->withErrors("Wrong password or username!")->withInput();
        }
    }

    /**
     * Logout member.
     */
    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}
