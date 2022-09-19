<?php

namespace App\Http\Livewire\Seller\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.seller.auth.register')->extends('layouts.guest')->section('content');
    }
}
