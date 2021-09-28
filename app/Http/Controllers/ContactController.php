<?php

namespace App\Http\Controllers;

use App\Mail\contactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContact(){

    return view('contact');
    }


    public function sendContact(Request $request){

         $request->validate([
             'name'=> 'required',
             'email'=> 'required|email',
             'content'=>'required'
         ]);

       Mail::to(config('mail.from.address'))->send

       (new contactMessage($request->name , $request->email, $request->content));   
       
       return back()->with('success','Your message has been sent');
     }
}