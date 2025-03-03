<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Posts;
use Livewire\Component;
use Livewire\Attributes\Url;

class PostsSearch extends Component
{
    #[Url()]
    public $q;
    public function render()
    {
        return view('livewire.pages.posts.posts-search',['posts'=>Posts::where('title','like','%'.$this->q.'%')->get()]);
    }
}
