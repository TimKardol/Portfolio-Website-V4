<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coin_name',
        'coin_amount',
        'initial_value',
        'current_value',
        'potential_profit'
    ]; //← only the field names inside the array can be mass-assigned


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
