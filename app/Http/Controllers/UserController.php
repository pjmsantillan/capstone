<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        return view('user.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('news-articles')
                ->withSuccess('Signed in');
            
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        return view('user.register');
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    // public function dashboard()
    // {
    //     if (Auth::check()) {
    //         return view('user.dashboard');
    //     }
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
        public function landingpage(){
            return view('layouts.landingpage');
        }
   
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    
}
