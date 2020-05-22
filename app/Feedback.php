<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'comment', 'rating', 'wash_id'
    ];

    public function wash()
    {
        return $this->belongsTo('App\Wash','wash_id');
    }

}


