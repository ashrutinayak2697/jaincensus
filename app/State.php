<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table='state';
    protected $filllable=['state_name','country_id'];
}
