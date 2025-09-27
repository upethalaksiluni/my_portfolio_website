<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Contact', [
            'meta' => [
                'title' => 'Contact - H.T. Upetha Laksiluni',
                'description' => 'Get in touch with H.T. Upetha Laksiluni for project collaborations, job opportunities, or general inquiries.',
            ]
        ]);
    }

    public function store(ContactRequest $request)
    {
        try {
            // Store contact message in database
            $contact = Contact::create($request->validated());

            // Send email notification
            Mail::to(config('mail.from.address'))
                ->send(new ContactMail($contact));

            // Auto-reply to sender
            Mail::to($contact->email)
                ->send(new ContactMail($contact, true));

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! I\'ll get back to you soon.',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again or contact me directly.',
                'error' => config('app.debug') ? $e->getMessage() : null,
            ], 500);
        }
    }

    // API endpoint
    public function apiStore(ContactRequest $request)
    {
        return $this->store($request);
    }
}