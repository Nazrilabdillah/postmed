<?php

namespace App\Livewire\Layout;

use App\Models\Posts;
use Livewire\Component;

class CardPost extends Component
{
    public Posts $post;

    public function render()
    {
        return view('livewire.layout.card-post');
    }
}
