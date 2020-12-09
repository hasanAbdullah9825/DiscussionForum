<?php

namespace App;

use App\Notifications\ReplyMarkedAsBestReply;
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
        

        $reply->owner->notify(new ReplyMarkedAsBestReply($reply->discussion));


    }

    public function bestReply()
    {
        return $this->belongsTo(Reply::class,'reply_id');
    }
}
