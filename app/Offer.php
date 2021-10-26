<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    protected $fillable = ['property_address', 'listing_no', 'purchase_price', 'earnest_money', 'financing', 'down_payment', 'seller_concession', 'inspection', 'property_tax', 'contingency', 'offer_ends'];
}
