<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function index()
    {
        $messages = Message::all();
            
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
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->route('messages-index');
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
