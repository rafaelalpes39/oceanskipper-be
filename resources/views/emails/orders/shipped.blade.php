{{-- <x-mail::message>
# Introduction

The body of your message.

{{ $data['name'] }}
{{ $data['company'] }}
{{ $data['email'] }}
{{ $data['contactNumber'] }}
{{ $data['message'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
 --}}

{{-- 

 @component('mail::message')
# New Contact Form Submission

Hello,

You have received a new contact form submission from a client with the following details:

**Name:** {{ $data['name'] }}<br>
**Company:** {{ $data['company'] }}<br>
**Email:** {{ $data['email'] }}<br>
**Contact Number:** {{ $data['contactNumber'] }}<br>
**Message:**<br>
{{ $data['message'] }}

Please respond to the client's message as soon as possible.

Regards,<br>
{{ config('app.name') }}
@endcomponent
 --}}

{{-- 
 @component('mail::message')
<style>
    .container {
        font-family: Arial, sans-serif;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .detail {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 10px;
    }
    .footer {
        font-size: 14px;
        color: #777777;
        margin-top: 20px;
    }
</style>

<div class="container">
    <div class="header">New Contact Form Submission</div>

    Hello,

    You've just received a new contact form submission from a client. Here are the details:

    <div class="detail"><strong>Name:</strong> {{ $data['name'] }}</div>
    <div class="detail"><strong>Company:</strong> {{ $data['company'] }}</div>
    <div class="detail"><strong>Email:</strong> {{ $data['email'] }}</div>
    <div class="detail"><strong>Contact Number:</strong> {{ $data['contactNumber'] }}</div>
    <div class="detail"><strong>Message:</strong><br>{{ $data['message'] }}</div>

    Please respond to the client's message as promptly as possible.

    <div class="footer">
        Best regards,<br>
        {{ config('app.name') }}
    </div>
</div>
@endcomponent --}}

@component('mail::message')

# New Contact Form Submission

Hello,

You've received a new contact form submission from a client. Here are the details:

- **Name:** {{ $data['name'] }}
- **Company:** {{ $data['company'] }}
- **Email:** {{ $data['email'] }}
- **Contact Number:** {{ $data['contactNumber'] }}
- **Message:**
{{ $data['message'] }}

Please respond to the client's message as promptly as possible.

Best regards,
{{ config('app.name') }}

@endcomponent 

{{-- @component('mail::message')
<style>
    .container {
        background-color: #f5f5f5;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .detail {
        font-size: 16px;
        margin-bottom: 10px;
    }
    .message {
        font-size: 16px;
        margin-top: 10px;
    }
    .button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }
</style>

<div class="container">
    <div class="header">New Contact Form Submission</div>

    Hello,

    You've just received a new contact form submission from a client. Here are the details:

    <div class="detail"><strong>Name:</strong> {{ $data['name'] }}</div>
    <div class="detail"><strong>Company:</strong> {{ $data['company'] }}</div>
    <div class="detail"><strong>Email:</strong> {{ $data['email'] }}</div>
    <div class="detail"><strong>Contact Number:</strong> {{ $data['contactNumber'] }}</div>
    <div class="message"><strong>Message:</strong><br>{{ $data['message'] }}</div>

    Please respond to the client's message as promptly as possible.

    [Button Text](#)<!-- Adjust the URL -->

    Best regards,<br>
    {{ config('app.name') }}
</div>
@endcomponent --}}
-
