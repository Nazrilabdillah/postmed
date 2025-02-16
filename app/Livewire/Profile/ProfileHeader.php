<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class ProfileHeader extends Component
{
    public User $user;
    public function render()
    {
        return view('livewire.profile.profile-header');
    }
}
