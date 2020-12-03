<?php

namespace App;

use App\User;

// use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{



    public function author()
    {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function replies()
    {

        return $this->hasMany(Reply::class);
    }

    public function MarkAsBestReply(Reply $reply)
    {

        $this->update(['reply_id' => $reply->id]);
    }

    public function bestReply()
    {
        return $this->belongsTo(Reply::class,'reply_id');
    }
}
