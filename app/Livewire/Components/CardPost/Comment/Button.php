<?php

namespace App\Livewire\Components\CardPost\Comment;

use App\Models\Posts;
use Livewire\Component;

class Button extends Component
{
    public Posts $post;
    public function render()
    {
        return view('livewire.components.card-post.comment.button');
    }
}
