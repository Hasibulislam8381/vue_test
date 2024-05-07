<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{

    public function html_email(Request $request)
    {
        //Fetch data from General setting
        $to_email = GeneralInfo::first();
        $sitename = $to_email->site_name;
        $email = $to_email->email;
        //fetch data from user email
        $from_email = $request->email;

        $data = array('name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'company_name' => $request->company_name, 'visit_date' => $request->visit_date, 'project_type' => $request->project_type, 'project_size' => $request->project_size, 'text' => $request->message);
        Mail::send('mail', $data, function ($message) use ($sitename, $email, $from_email) {
            $message->to($email, $sitename)->subject('Laravel HTML Testing Mail');
            $message->from($from_email, $sitename);
        });
        Toastr::success('Mail Sent Successfully', 'success');
        return back();
    }
}