<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{   
    public function login(Request $request){
        $credentials = $request->validate([
            'name'=> 'required',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect('profile');
        }
        
        else{
            return 'error';
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }
    public function validateUserRegistration(Request $request) {
        $Data = $request->validate([
            'name' => ['required','min:3','max:50',Rule::unique('users','name')],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required','min:8','max:50'],
        ]);
        $Data['password'] = bcrypt($Data['password']);
        $user = User::create([
            'name'=> $Data['name'],
            'email'=> $Data['email'],
            'password'=> $Data['password'],
        ]);

        auth()->login($user);
        return redirect('profile');
    }
}
