<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrustedServiceProvider extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'email', 'website'];
}
