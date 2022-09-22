<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class Mybooks extends Component
{
    public function render()
    {
        return view('livewire.seller.mybooks')->extends('layouts.seller.seller')->section('content');
    }
}
