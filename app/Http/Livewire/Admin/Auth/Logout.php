<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
  public function logout(){
    Auth::guard('admin')->logout();
    session()->invalidate();
    session()->regenerateToken();

    return redirect('/');
  }
}
