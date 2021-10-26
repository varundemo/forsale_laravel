<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'saved_listings';
    protected $fillable = ['listing_no', 'address','user_id'];
}
