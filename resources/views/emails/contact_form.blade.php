<h2>Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $formData['fname'] }} {{ $formData['lname'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Purpose:</strong> {{ $formData['purpose'] }}</p>

@if($formData['purpose'] === 'Enquiry')
    <p><strong>Investment:</strong> {{ $formData['investment'] }}</p>
    <p><strong>City:</strong> {{ $formData['city'] }}</p>
@elseif($formData['purpose'] === 'Feedback')
    <p><strong>Firm Name:</strong> {{ $formData['firm_name'] }}</p>
    <p><strong>CRM Name:</strong> {{ $formData['crm_first_name'] }} {{ $formData['crm_last_name'] }}</p>
    <p><strong>CRM Rating:</strong> {{ $formData['crm_rating'] }}</p>
@elseif($formData['purpose'] === 'Job Application')
    <p><strong>Resume:</strong> Attached</p>
@endif

<p><strong>Message:</strong> {{ $formData['message'] ?? 'N/A' }}</p>
