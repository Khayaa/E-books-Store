<?php

namespace App\Http\Livewire\Seller\Auth;

use App\Models\Seller;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $name;
    public $surname;
    public $phone_number;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'surname' => ['required', 'string', 'max:255'],
        'phone_number' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' =>  'required_with:password_confirmation|same:password_confirmation|min:3',
        'password_confirmation' => 'required|min:3'
    ];

    public function render()
    {
        return view('livewire.seller.auth.register')->extends('layouts.guest')->section('content');
    }
    public function register()
    {
        $this->validate();
        Seller::create([
            'name' =>  $this->name,
            'surname' => $this->surname ,
            'email' => $this->email ,
             'phone_number' =>$this->phone_number ,
             'password' => Hash::make($this->password)



        ]);
        session()->flash('reg_message', 'Account successfully created.');
        return redirect()->to('/seller/login');
    }
}
