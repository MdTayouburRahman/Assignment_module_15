<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller


// Task 6: Single Action Controller

// Create a single action controller called ContactController that handles a contact 
// form submission. Implement the __invoke() method to process the 
// form submission and send an email to a predefined address with the submitted data.


// Answer - 6

{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:20',
        ]);

        // Send an email
        // Mail::raw($data['message'], function ($message) use ($data) {
        //     $message->from($data['email'], $data['name']);
        //     $message->to('predefined@example.com'); // Replace with your email
        // });

        // Redirect back to the form page with a success message
        return back()->withSuccess('success', 'Thank you for your message. We will get back to you soon!');
    }


        
}
