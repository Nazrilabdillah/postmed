<?php

namespace App\Livewire\Components\CardPost;

use App\Livewire\Layout\CardPost;
use App\Models\Posts;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DropdownMenu extends Component
{
    public Posts $post;
    public function deletePost(){
        $this->post->delete();
        Storage::disk('public')->delete($this->post->img_path);
        $this->dispatch('refreshPosts')->to(CardPost::class);
    }
    public function render()
    {
        return view('livewire.components.card-post.dropdown-menu');
    }
}
