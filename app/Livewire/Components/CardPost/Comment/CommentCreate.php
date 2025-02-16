<?php

namespace App\Livewire\Components\CardPost\Comment;

use App\Livewire\Components\CardPost\PostComment;
use Livewire\Component;
use App\Models\PostChild\Comment;
use App\Models\Posts;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CommentCreate extends Component
{
    public Posts $post;
    #[Validate('required')]
    public $text ='';
    public function save(){
        if(Auth::user()){

            
            $this->validate();
            Comment::create([
                'user_id'=> Auth::user()->id,
                'posts_id'=> $this->post->id,
                'text' => $this->text
            ]);
            $this->dispatch('refreshComment')->to(PostComment::class);
            $this->text ='';
        }else{
            $this->redirect(route('login'),true);
        }

    }
    public function render()
    {
        return view('livewire.components.card-post.comment.comment-create');
    }
}
