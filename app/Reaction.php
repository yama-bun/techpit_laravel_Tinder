<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    public function toUserId()
    {
        return $this->belongsTo('App\User', 'to_user_id', 'id');
    }

    public function fromUserId()
    {
        return $this->belongsTo('App\User', 'form_user_id', 'id');
    }
}
