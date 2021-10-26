<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserManager extends Model
{
    protected $table = 'user_manager';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function manager()
    {
        return $this->belongsTo('App\User');
    }

    //composite primary key work-around
    protected function setKeysForSaveQuery(Builder $query)
    {
        $query->where('user_id', '=', $this->getAttribute('user_id'))->where('manager_id', '=', $this->getAttribute('user_id'));
        return $query;
    }
}
