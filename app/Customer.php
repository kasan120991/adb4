<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Primary Key
    public $primaryKey = 'customer_id';

    //Timestamps
    public $timestamps = false;
}
