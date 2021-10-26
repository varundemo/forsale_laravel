<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileTransfer extends Model
{
    /**
     * Get the shared files for the file transfer
     */
    public function shared_files()
    {
        return $this->hasMany('App\SharedFile');
    }
}
