<?php

namespace App\Livewire\Components\Navbar;

use Livewire\Component;
use Illuminate\Support\Facades\Route;


class NavLink extends Component
{
  
    public function isActive($val){
        return $val == Route::currentRouteName();
    }
    public function render()
    {
        return view('livewire.components.navbar.nav-link');
    }
}
