<?php

namespace App\Livewire\Components\CardPost;

use App\Models\Posts;
use Livewire\Component;

class DropdownMenu extends Component
{
    public Posts $post;
    public function render()
    {
        return view('livewire.components.card-post.dropdown-menu');
    }
}
