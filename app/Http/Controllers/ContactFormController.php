<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function index()
    {
        return  view('/contact');
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|max:100',
            'description' => 'bail|required|max:255',
            'name' => 'required|max:30',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect('/contact#sendMessageSection')->withErrors($validator);
        }
        $newMessage = new Message();
        $newMessage->name = $request->name;
        $newMessage->email = $request->email;
        $newMessage->subject = $request->subject;
        $newMessage->message = $request->description;
        $newMessage->save();
        return redirect('/');
    }
    public function viewAsAdmin()
    {
    }
}
