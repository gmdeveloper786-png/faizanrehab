<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentFormMail;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'age' => 'required|string|max:10',
            'date' => 'required|date',
            'services' => 'required|string|max:255',
            'reason' => 'required|string',
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
                'father_name' => $request->father_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'age' => $request->age,
                'date' => $request->date,
                'services' => $request->services,
                'reason' => $request->reason,
            ];

            // Send email to both addresses
            $recipients = [
                'ghulammujtabapreedy@gmail.com',
                'ghulammujtaba1352002@gmail.com'
            ];

            foreach ($recipients as $recipient) {
                Mail::to($recipient)->send(new AppointmentFormMail($data));
            }

            return response()->json([
                'success' => true,
                'message' => 'Appointment booked successfully!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to book appointment. Please try again later.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

