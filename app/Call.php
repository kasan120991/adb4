<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    //Timestamps
    public $timestamps = true;
    public $primaryKey = 'id';
    public $table = 'calls';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
