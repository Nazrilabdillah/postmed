<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Posts;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PostsEdit extends Component
{
    use WithFileUploads;
    #[Url()]
    public  $post_id;
    public Posts $post;
    public $image;
    public $title ="";
    public $tags ="";
    public $imageModel;
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
            'imageModel' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
       
        // Simpan gambar ke storage
        $imagePath = $this->post->img_path;
        if($this->imageModel){
            Storage::disk('public')->delete($this->image);
            $imagePath = $this->imageModel->store('assets/image/posts', 'public');
         }
        // Simpan data ke database
        $this->post->update([
            'title' => $this->title,
            'tag' => $this->tags,
            'img_path' => $imagePath
        ]);

        // Reset form
        $this->reset(['title', 'tags', 'image']);

        session()->flash('success', 'Post berhasil ditambahkan!');
        // $this->dispatch('refreshPosts')->to()
    }

    
    public function render()
    {
        return view('livewire.pages.posts.posts-edit');
    }
}
