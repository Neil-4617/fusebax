<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    // Show Homepage
    public function index() {
        return view('home');
    }
    
    // Show User Register Form
    public function create() {
        return view('users.register');
    }

    // Register New User
    public function store(Request $request){
        $formFields = $request->validate([
            'username'=>'required',
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        
        //Add New Record
        $user = User::create($formFields);

        // Login after successfully register
        auth()->login($user);

        return redirect('/')->with('message', 'New User added successfully!');
    }
    
    // Logout User
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home')->with('message', 'You have been logged out!');
    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function Authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email'=> 'Invalid creadentials'])->onlyInput('email');
    }
}
