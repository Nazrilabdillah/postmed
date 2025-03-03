<?php

namespace App\Livewire\Components\Navbar;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class NavTop extends Component
{
    public $q='';
    public function searchPosts(){
        $this->redirect(route('posts.search',$this->q),true);
    }
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect(route('welcome'), navigate: true);
    }
    
    public function render()
    {
        return view('livewire.components.navbar.nav-top');
    }
}
