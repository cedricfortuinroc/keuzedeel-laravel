<?php

namespace App\Http\Livewire;

use App\Models\Replies;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NewCommentOnPost extends Component
{
    public $postId;
    public $body;

    public $success = false;

    public function mount($post)
    {
        $this->postId = $post;
    }

    public function jan()
    {
        Replies::create([
            'post_id' => $this->postId,
            'user_id' => Auth::id(),
            'body' => $this->body,
            'created_at' => Carbon::now(),
        ]);

        $this->emit('updateReplies');

        self::clear();
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.new-comment-on-post');
    }

    // clear input
    public function clear()
    {
        $this->body = '';
    }
}
