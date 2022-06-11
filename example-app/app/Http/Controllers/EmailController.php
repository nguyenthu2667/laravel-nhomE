<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
      //  dd($request);
        $request->validate([
        // 'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
        //   'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->from("ngoquangkhoanqk@gmail.com",'Khoa_PROTO');
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Gửi Email Thành Công']);

        // Mail::send('email-template', data,fun)
    }
}