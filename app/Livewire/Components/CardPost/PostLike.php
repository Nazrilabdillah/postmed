<?php

namespace App\Livewire\Components\CardPost;

use App\Models\Posts;
use Livewire\Component;
use App\Models\PostChild\Like;
use Illuminate\Support\Facades\Auth;


class PostLike extends Component
{
    public Posts $post;
    public Like $like;
    public $isUserLike;
    public $userInLike;
    public function mount(){
        if(Auth::check()){

            $this->userInLike = $this->post->likes->where('user_id', Auth::user()->id);
            $this->isUserLike = $this->userInLike->count() > 0;
        }
    }
    
    public function likeRefres(){
        $this->post = $this->post;
        $this->userInLike = $this->post->likes->where('user_id', Auth::user()->id);
        $this->isUserLike = $this->userInLike->count() > 0;
    }
    public function sendLike(){
    if(Auth::check()){

        if ($this->isUserLike){
            Like::where('user_id',Auth::user()->id)->where('posts_id',$this->post->id)->delete();
    
        }else{
    
            Like::create([
                'user_id'=> Auth::user()->id,
                'posts_id'=>$this->post->id
            ]);
        }
        $this->likeRefres();
        
    }else{
        $this->redirectToLogin();
    }
   }
    

    public function redirectToLogin(){
        return $this->redirect(route('login'),true);
    }
    public function render()
    {
        return view('livewire.components.card-post.post-like');
    }
}
