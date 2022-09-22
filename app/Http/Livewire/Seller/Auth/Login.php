<?php

namespace App\Http\Livewire\Seller\Auth;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;



class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'requred',
    ];
    public function render()
    {
        return view('livewire.seller.auth.login')->extends('layouts.guest')->section('content');
    }
    public function login(){
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('seller')->attempt($credentials)) {
            session()->regenerate();

            return redirect()->intended('seller/dashboard');
        }

        return back()->withErrors([
            $this->addError('email', trans('auth.failed'))
        ]);

    }
}
