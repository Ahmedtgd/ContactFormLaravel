<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
  public function create()
    {
      return view('contact');
    }

    public function store(Request $request)
      {
        //dd($request->all());//this prings the data in an array form

        $this->validate($request,[            //
          'name'=>'required',                 //
          'email'=>'required | email',        //this validation to tell user not to use null ~~~~
          'message'=>'required'               //
        ]);


        Mail::send('emails.contact-message',[
          'msg' => $request->message
        ],function($mail) use($request){

          $mail->from($request->email,$request->name);

          $mail->to('ahmedtarek3885@gmail.com')->subject('Contact Message'); ///cuz am the admin and the owner


        });

        return redirect()->back()->with('flash_message','Thank you for your message.');

      }

}
