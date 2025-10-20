<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

       $data = $request->only('name', 'email', 'message');

        Mail::raw("Message from: {$data['name']} ({$data['email']})\n\n{$data['message']}", function ($message) use ($data) {
            $message->to('timothyminani06@gmail.com')
                    ->subject('New Contact Message');
        });

        return back()->with('success', 'Message sent successfully!');
    }
}

