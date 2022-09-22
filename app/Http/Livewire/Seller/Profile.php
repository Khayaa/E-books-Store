<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.seller.profile')->extends('layouts.seller.seller')->section('content');
    }
}
