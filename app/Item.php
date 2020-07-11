<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //customize table name if not same with class name 
    protected $table = "items";

    //whitelisted 
    // protected $fillable = [];
    //blacklisted
    protected $guarded = [];
}