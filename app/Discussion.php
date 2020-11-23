<?php

namespace App;
use App\User;

// use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    


    public function author(){

        return $this->belongsTo(User::class,'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    
}
