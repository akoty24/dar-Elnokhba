<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        return view('Admin.pages.messages.index' , compact('messages'));
    }

    public function create()
    {
        return view('Admin.pages.messages.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $message = new Message;
        $message->name = $request->name;
        $message->subject = $request->subject;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();

        session()->flash('success', trans('backend.created_successfully'));
        return redirect()->route('messages.index');
    }


    public function show(Message $message)
    {
        return view('Admin.pages.messages.show' , compact('message'));
    }


    public function edit(Message $message)
    {
        return view('Admin.pages.messages.edit' , compact('message'));
    }


    public function update(Request $request, Message $message)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('messages.index');
    }


    public function destroy(Message $message)
    {

        $message->delete();

        session()->flash('success', trans('backend.deleted_successfully'));
        return redirect()->back();
    }
}
