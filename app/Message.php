<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ["user_id", "title", "body"]; //← only the field names inside the array can be mass-assigned


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
