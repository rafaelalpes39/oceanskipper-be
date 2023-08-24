{{-- <!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 20px;
            background-color: white; /* Change background color to white */
            border: 1px solid #ccc; /* Add a border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333; /* Darken the header text color */
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
</head>
<body>
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
</body>
</html>
 --}}
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: black;
        }

        .container {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            padding: 20px;
            background-image: url("https://www.ibm.com/content/dam/connectedassets-adobe-cms/worldwide-content/creative-assets/s-migr/ul/g/e5/9f/aspera-streaming-leadspace.component.xl.ts=1689278270649.png/content/adobe-cms/us/en/products/aspera/streaming/_jcr_content/root/leadspace");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid black;
        }

        .header {
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .header img {
            width: 150px;
            height: auto;
        }

        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .subject {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: black;
        }

        .message {
            margin-bottom: 40px;
            margin-top: 40px;
        }

        .detail {
            margin-bottom: 10px;
            color: black;
        }

        .detail strong {
            color: #333;
        }



        .gmail-logo {
            width: 150px;
            height: auto;
        }


        .pad {
            padding-top: 150px;
            color: black;
        }

        .text-black {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="subject">New Contact Form Submission</h1>
        </div>

        <div class="content">


            <p class="text-black ">Hello,</p>

            <p class="text-black ">We have received a new contact form submission from
                <strong>{{ $data['name'] }}</strong>. The details of
                the
                submission are as follows:
            </p>

            <div class="detail"><strong>Name:</strong> <span class="text-black">{{ $data['name'] }}</span></div>
            <div class="detail"><strong>Company:</strong> <span class="text-black">{{ $data['company'] }}</span></div>
            <div class="detail"><strong>Email:</strong> <span class="text-black">{{ $data['email'] }}</span></div>
            <div class="detail"><strong>Contact Number:</strong> <span
                    class="text-black">{{ $data['contactNumber'] }}</span></div>
            <div class="detail "><strong>Message:</strong><br>{{ $data['message'] }}</div>

            <p class="pad">I am interested in having a conversation with you.</p>

        </div>

        <div>
            <p class="text-black ">Best regards, <br> <strong>{{ $data['name'] }}</strong></p>
        </div>
    </div>
</body>

</html>
