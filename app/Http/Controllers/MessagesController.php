<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'name'=>'required',
        'email'=>'required'
      ]);

      //create new messages
      $message= new Message;
      $message->name=$request->input('name');
      $message->email=$request->input('email');
      $message->message=$request->input('message');
      //save message
      $message->save();
      //redirect
      return redirect('/')->with('success', 'Message Sent');//include the flash message


    }


    public function getMessages(){
      $messages = Message::all();//get all messages from database

      return view('messages')->with('messages', $messages);
    }
}
