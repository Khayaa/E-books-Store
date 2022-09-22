<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $surname;
    public $phone_number;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules =[
        'name'=>'required',
        'surname'=>'required',
        'phone_number'=>'required',
        'email'=>['required','email','unique:admins,email' ,],
        'password'=>['required_with:password_confirmation', 'same:password_confirmation','min:8'],
        'password_confirmation'=>'required|min:8'
    ];
    public function render()
    {
        return view('livewire.admin.auth.register')->extends('layouts.guest')->section('content');
    }
    public function register(){
        $this->validate();
        Admin::create([
            'name'=> $this->name ,
            'surname'=> $this->surname,
            'phone_number'=>$this->phone_number,
            'email'=>$this->email ,
            'avatar'=>'opps',
            'password'=>Hash::make($this->password)
        ]);
        return redirect('admin/login')->with(session()->flash('new_account','Account successfully created'));
    }
}
