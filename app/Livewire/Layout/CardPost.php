<?php

namespace App\Livewire\Layout;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CardPost extends Component
{
    public $posts;
    protected $listeners =['refreshPosts'=>'updatedPosts'];
    public function updatedPosts(){
        $this->posts = $this->posts; 
    }

    public function render()
    {
        return view('livewire.layout.card-post');
    }
}
