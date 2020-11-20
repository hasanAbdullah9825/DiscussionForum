<?php

namespace App;
use App\User;

// use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    
    protected $fillable=['title','content','slug','user_id','channel_id']; 

    public function author(){

        return $this->belongsTo(User::class,'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
