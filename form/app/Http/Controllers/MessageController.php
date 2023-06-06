<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    
    public function index()
    {
        $messages = Message::all()->sortBy('name');
            
        return view('front.index', [
            'messages' => $messages
        ]);
    }

    
    public function create()
    {
        $messages = Message::all();

        return view('front.create', [
            'messages' => $messages
        ]);
    }

    
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha:ascii|min:3',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|string|min:3'
        ],
        [
            'name.min' => 'Name is too short - should be at least 3 characters',
            'email' => 'Invalid email',
            'message.min' => 'Message is too short - should be at least 3 characters'
        ]);

        if ($validator->fails()) {
            $request->flash();
            return redirect()
                ->back()
                ->withErrors($validator);
        }


        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()
        ->route('messages-index')
        ->with('ok', 'New message was created');
    }

    
    public function show(Message $message)
    {
        //
    }

    
    public function edit(Message $message)
    {
        //
    }

    
    public function update(Request $request, Message $message)
    {
        //
    }

    
    public function destroy(Message $message)
    {
        //
    }
}
