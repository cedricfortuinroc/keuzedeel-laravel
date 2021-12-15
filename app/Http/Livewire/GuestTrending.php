<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;

class GuestTrending extends Component
{
    public $recentPosts;

    public function mount()
    {
        $this->recentPosts = Posts::orderBy('created_at', 'asc')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.guest-trending');
    }
}
