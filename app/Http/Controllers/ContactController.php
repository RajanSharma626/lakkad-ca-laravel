<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric',
            'purpose' => 'required|string',
            'message' => 'nullable|string',
            'investment' => 'nullable|required_if:purpose,Enquiry|string',
            'city' => 'nullable|required_if:purpose,Enquiry|string',
            'firm_name' => 'nullable|required_if:purpose,Feedback|string',
            'crm_first_name' => 'nullable|required_if:purpose,Feedback|string',
            'crm_last_name' => 'nullable|required_if:purpose,Feedback|string',
            'crm_rating' => 'nullable|required_if:purpose,Feedback|integer|min:1|max:5',
            'resume' => 'required_if:purpose,Job Application|file|mimes:pdf|max:2048',
        ]);

        // Handle file upload if resume is present
        if ($request->hasFile('resume')) {
            $validatedData['resume'] = $request->file('resume')->store('resumes', 'public');
        }

        // Save the data to the database or perform other actions
        // For example:
        ContactForm::create([
            'name' => $validatedData['fname'] . ' ' . $validatedData['lname'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'] ?? '',
            'purpose' => $validatedData['purpose'],
            'investment' => $validatedData['investment'] ?? '',
            'city' => $validatedData['city'] ?? '',
            'firm_name' => $validatedData['firm_name'] ?? '',
            'crm_name' => ($validatedData['crm_first_name'] ?? '') . ' ' . ($validatedData['crm_last_name'] ?? ''),
            'crm_rating' => $validatedData['crm_rating'] ?? '',
            'resume' => $validatedData['resume'] ?? '',
        ]);

        // Send Email
        Mail::to('rajankumarsharma681@gmail.com')->send(new ContactFormMail($validatedData));

        return back()->with('success', 'Form submitted successfully!');
    }
}
