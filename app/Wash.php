<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wash extends Model
{
    protected $fillable = [
        'Description', 'Clientid', 'Storeid','Status',
    ];

    public function Client()
    {
        return $this->belongsTo('App\User','Clientid');
    }
    public function Store()
    {
        return $this->belongsTo('App\User','Storeid');
    }
    public function Driver()
    {
        return $this->belongsTo('App\User','Driverid');
    }

}
