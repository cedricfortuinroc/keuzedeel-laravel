<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class NewPostForm extends Component
{
    public $title;
    public $slug;
    public $body;

    public $success = false;

    public function update()
    {
        $this->slug = str_replace(' ', '-', strtolower($this->title));
    }

    public function save()
    {
        Posts::create([
            'title' => $this->title,
            'user_id' => Auth::id(),
            'slug' => $this->slug,
            'body' => $this->body,
            'created_at' => Carbon::now(),
        ]);

        $this->success = true;
        self::resetInput();
    }

    public function render()
    {
        return view('livewire.new-post-form');
    }

    // reset input
    public function resetInput()
    {
        $this->title = '';
        $this->slug = '';
        $this->body = '';
    }
}
