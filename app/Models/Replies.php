<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $table = 'replies';
    protected $fillable = ['id', 'user_id', 'post_id', 'body', 'likes', 'created_at'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Posts');
    }
}
