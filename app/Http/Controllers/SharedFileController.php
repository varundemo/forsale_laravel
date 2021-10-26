<?php

namespace App\Http\Controllers;

use App\FileTransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharedFileController extends Controller
{
    public function viewSharedFiles($file_transfer_id)
    {
        $fileTransfer = FileTransfer::find($file_transfer_id);
        //check admin or content owner privileges
        if( (Auth::user()->role == 'superAdmin') OR (Auth::id() == $fileTransfer->sender_id) OR ((Auth::id() == $fileTransfer->recipient_id))) {
            $shared_files = FileTransfer::find($file_transfer_id)->shared_files;
            return View('shared-files-list', compact('shared_files'));
        }
        return View('shared-files-list')->with('status', 'Something went wrong. Please contact support.');
    }
}
