<?php

namespace App\Livewire\Pages\Posts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\Posts;
class PostsCreate extends Component
{
    use WithFileUploads;
    public $image;
    public $title ="";
    public $tags ="";
    
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'tags' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
       
        // Simpan gambar ke storage
        $imagePath = $this->image->store('assets/image/posts', 'public');
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
        return view('livewire.pages.posts.posts-create');
    }
}
