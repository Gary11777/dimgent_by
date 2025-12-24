<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $request): JsonResponse
    {
        $validated = $request->validated();

        // Send email
        $recipient = config('mail.contact_to', config('mail.from.address'));
        
        Mail::to($recipient)->send(new ContactMail($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting us. We\'ll get back to you within 24 hours.',
        ]);
    }
}
