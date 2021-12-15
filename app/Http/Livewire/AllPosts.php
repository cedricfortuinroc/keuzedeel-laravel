<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AllPosts extends Component
{
    public $allPosts;

    public function mount()
    {
        $this->allPosts = Posts::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.all-posts');
    }
}
