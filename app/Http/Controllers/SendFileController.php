<?php

namespace App\Http\Controllers;

use App\FileTransfer;
use App\Notifications\FileSent;
use App\SharedFile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class SendFileController extends Controller
{
    public function sendFileForm() {
        return view('send-file');
    }

    public function sendFile(Request $request) {
        $FileTransfer = new FileTransfer();

        $request->validate([
            'files.*' => 'required|file|mimetypes:image/jpeg,image/jpega,image/png,image/pnga,image/webp,application/octet-stream, application/octet-streama,application/pdf,application/pdfa,application/msword,application/msworda,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:10000',
            'message' => 'sometimes|min:10',
        ]);
        if($request->hasFile('files')) {
            DB::transaction(function () use ($request) {
                $FileTransfer = new FileTransfer();
                $FileTransfer->message = $request->message;
                $FileTransfer->sender_id = Auth::id();
                $FileTransfer->recipient_id = $request->recipient_id;
                $FileTransfer->save();

                $files = $request->file('files');
                foreach($files as $file) {
                    $fileName = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();

                    $filePath = 'images/' . $fileName;
                    Storage::disk('s3')->put($filePath, file_get_contents($file));

                    //$file->move('uploads_78asd6as7d6asb', $fileName);
                    $SharedFile = new SharedFile();
                    $SharedFile->filename = $fileName;
                    $SharedFile->file_transfer_id = $FileTransfer->id;
                    $SharedFile->save();
                }

                //send email and database notification to applicant
                Notification::send(User::find($FileTransfer->recipient_id), new FileSent($FileTransfer->recipient_id, $FileTransfer->id));
            });
        }

        //redirect based on user role
        $user_role = Auth::user()->role;

        return redirect('/' . $user_role . '/view-shared-files')->with('status', 'File(s) Sent Successfully.');
    }

    public function superAdminViewSharedFiles() {
        $shared_files  = FileTransfer::latest()->get();
        return view('superAdmin.view-shared-files', compact('shared_files'));
    }

    public function viewSharedFiles() {
        $shared_files  = FileTransfer::where('sender_id', '=', Auth::id())
            ->orWhere('recipient_id', '=', Auth::id())->latest()->get();
        return view('superAdmin.view-shared-files', compact('shared_files'));
    }
}
