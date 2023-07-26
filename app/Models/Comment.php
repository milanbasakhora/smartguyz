<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'activity_id', 'comment', 'parent_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('created_at', 'asc');
    }

    public function isReply()
    {
        return $this->parent_id !== null;
    }

    public function loadNestedReplies()
    {
        $this->replies->each(function ($reply) {
            $reply->loadNestedReplies();
        });

        return $this;
    }
}
