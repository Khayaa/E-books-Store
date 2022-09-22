<?php

namespace App\Http\Livewire\Seller\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logSellerOut(){
        Auth::guard('seller')->logout();
       session()->invalidate();

        session()->regenerateToken();

        return redirect('/');
    }

}
