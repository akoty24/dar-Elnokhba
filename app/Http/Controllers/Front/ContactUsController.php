<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact_us(){
        $website_info=WebsiteInfo::find(1);
        return view('Front.contact_us',compact('website_info'));
    }
    public function send_message(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact message instance and save it to the database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        // Optionally, you can flash a success message to the session
        session()->flash('success', 'Message sent successfully!');

        // Redirect back to the contact page or any other page you prefer
        return redirect()->route('contact_us');
    }

}
