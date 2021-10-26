<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingAndShowing extends Model
{
    protected $table = 'booking_and_showing';

    protected $fillable = ['full_name', 'street_address', 'listing_no', 'time_and_date'];
}
