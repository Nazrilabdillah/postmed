<?php

namespace App\Livewire\Components\CardPost;

use App\Models\User;
use App\Models\Posts;
use Livewire\Component;
use App\Models\PostChild\Comment;

class PostComment extends Component
{
    public Posts $post;
    public Comment $comments;
    protected $listeners = ['refreshComment' => 'loadComment'];
    public function loadComment(){
        $this->post->comments = $this->post->comments;
    }
    public function render()
    {
        return view('livewire.components.card-post.post-comment');
    }
}
