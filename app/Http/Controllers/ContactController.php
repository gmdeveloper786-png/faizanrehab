<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
  public function submit(Request $request)
  {
    // Validate the form data
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required|string|max:20',
      'msg' => 'required|string',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => 'Validation failed. Please check your input.',
        'errors' => $validator->errors()
      ], 422);
    }

    try {
      // Prepare email data
      $data = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->msg,
      ];

      // Send email to both addresses
      $recipients = [
        'ghulammujtabapreedy@gmail.com',
        'ghulammujtaba1352002@gmail.com'
      ];

      foreach ($recipients as $recipient) {
        Mail::to($recipient)->send(new ContactFormMail($data));
      }

      return response()->json([
        'success' => true,
        'message' => 'Message sent successfully!'
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => 'Failed to send message. Please try again later.',
        'error' => $e->getMessage()
      ], 500);
    }
  }
}
