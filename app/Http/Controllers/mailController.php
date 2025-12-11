<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Mail\form_mail;
use App\Mail\FormMail;

use Illuminate\Http\Request;

class mailController extends Controller
{
    // function to open form
public function open_form()
{
return view('Mails/Mail_form');
}
// function to send mail when send mail button is pressed
public function send_mail(Request $req){
    $emails = [
    'email' => $req->get('email'),
    'cc' => $req->get('cc'),
    'bcc' => $req->get('bcc')
    ];

    $details = [
    'subject' => $req->get('subject'),
    'body' => $req->get('details')
    ];

   // Get the uploaded files
        $attachments = $req->file('attachment');

        // Array to store attachment paths
        $attachmentPaths = [];

        // Process each uploaded file
        if ($attachments) {
            foreach ($attachments as $attachment) {
                // Move the uploaded file to a temporary location
                $attachmentPath = $attachment->store('temp');

                // Get the full path of the attachment
                $attachmentFullPath = Storage::path($attachmentPath);

                // Add the attachment path to the array
                $attachmentPaths[] = $attachmentFullPath;
            }
        }

        // Send the email with attachments
        Mail::to($emails['email'])->cc($emails['cc'])->send(new FormMail($details, $attachmentPaths));

        // Delete the temporary files after the email is sent
        if (!empty($attachmentPaths)) {
            Storage::delete($attachmentPaths);
        }

        return redirect('mail_form')->with('status', 'Email Sent Successfully!');
    }
}