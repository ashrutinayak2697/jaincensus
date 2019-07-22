<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countrycode extends Model
{
   	protected $table='countrycode';
    protected $fillable=['country_code','country_name'];

    protected $primaryKey = 'country_code_id';
}
