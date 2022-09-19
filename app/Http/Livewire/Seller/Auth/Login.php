<?php

namespace App\Http\Livewire\Seller\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.seller.auth.login')->extends('layouts.guest')->section('content');
    }
}
