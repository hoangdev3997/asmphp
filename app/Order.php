<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','name','address_1','address_2','city','zipcode','phone','total'];
}
