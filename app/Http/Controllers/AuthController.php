<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function login(Request $request)
    {
        try {
            $user = (new User())->getUserByUsername($request->username);
            if ($user) {
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                    $request->session()->regenerate();
                    $request->session()->put('user', $user);
                    return redirect()->intended('/');
                }else{
                    throw new \Exception('Username atau password salah');
                }
            } else {
                throw new \Exception('User belum terdaftar');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->forget('user');
        return redirect(route('auth'));
    }
}
