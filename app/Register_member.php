<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register_member extends Model
{
    protected $table='register_members';
    protected $fillable=['first_name','middle_name','last_name','adharcardnumber','ocipcinumber','passport','birthday','mobilecode','mobilenumber','email','address','landmark','area','gender','pincode','city_name','state_id','country_id','sampraday','other','sms','register_number','otp'];
}
