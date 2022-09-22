<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
       
        'email'=> ['required', 'email'],
        'password'=>'required',
    ];

    public function render()
    {
        return view('livewire.admin.auth.login')->extends('layouts.guest')->section('content');
    }
    public function login(){
        $validated = $this->validate([
            'email'=> ['required', 'email'],
            'password'=>'required',
        ]);

        if(Auth::guard('admin')->attempt($validated)){
            session()->regenerate();
            return redirect('admin/dashboard');
        }
        return back()->withErrors(
            [$this->addError('email' , trans('auth.failed'))]
        );

    }
}
