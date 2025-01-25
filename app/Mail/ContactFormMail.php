<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $subjectLine;
    /**
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
        // Set subject dynamically based on purpose
        switch ($formData['purpose']) {
            case 'Enquiry':
                $this->subjectLine = 'New Enquiry Submission - From lakkadconsultancy.in';
                break;
            case 'Feedback':
                $this->subjectLine = 'New Feedback Submission - from lakkadconsultancy.in';
                break;
            case 'Job Application':
                $this->subjectLine = 'New Job Application Received - from lakkadconsultancy.in';
                break;
            default:
                $this->subjectLine = 'New Contact Form Submission - from lakkadconsultancy.in';
        }
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject($this->subjectLine)
                    ->view('emails.contact_form')
                    ->with(['formData' => $this->formData]);
    }
}
