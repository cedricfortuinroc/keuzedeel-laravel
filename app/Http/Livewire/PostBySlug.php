<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;

class PostBySlug extends Component
{
    public $post;

    protected $listeners = ['updateReplies' => 'render'];

    public function mount($slug)
    {
        $this->post = Posts::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.post-by-slug')->layout('layouts.guest');
    }
}
