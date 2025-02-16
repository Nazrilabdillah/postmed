<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Posts;

class PostCreate extends Component
{
    use WithFileUploads;

    public $title, $tags, $image;

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'tags' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Simpan gambar ke storage
        $imagePath = $this->image->store('posts', 'public');

        // Simpan data ke database
       Posts::create([
            'title' => $this->title,
            'tags' => $this->tags,
            'img_path' => $imagePath
        ]);

        // Reset form
        $this->reset(['title', 'tags', 'image']);

        session()->flash('success', 'Post berhasil ditambahkan!');
    }

    public function render()
    {
        return view('livewire.pages.posts.create-posts');
    }
}
