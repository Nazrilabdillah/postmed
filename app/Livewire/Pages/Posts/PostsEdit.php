<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Posts;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class PostsEdit extends Component
{
    use WithFileUploads;
    #[Url()]
    public  $post_id;
    public Posts $post;
    public $image ="";
    public $title ="";
    public $tags ="";
    public function mount(){
        $this->post = Posts::find($this->post_id);
        $this->title = $this->post->title;
        $this->tags = $this->post->tag;
        $this->image = $this->post->img_path;
        
    }
    
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'tags' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
       
        // Simpan gambar ke storage
        // $imagePath = $this->image->store('posts', 'public');
          $imagePath = "jajs";
        // Simpan data ke database
        Posts::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'tag' => $this->tags,
            'img_path' => $imagePath
        ]);

        // Reset form
        $this->reset(['title', 'tags', 'image']);

        session()->flash('success', 'Post berhasil ditambahkan!');
         $this->redirect(route('welcome', absolute: false), navigate: true);
    }

    
    public function render()
    {
        return view('livewire.pages.posts.posts-edit');
    }
}
