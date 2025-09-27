<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid #3b82f6;
        }
        .field strong {
            color: #1d4ed8;
            display: block;
            margin-bottom: 5px;
        }
        .message-content {
            background: white;
            padding: 20px;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            white-space: pre-wrap;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p>Someone has contacted you through your portfolio website</p>
        </div>
        
        <div class="content">
            <div class="field">
                <strong>Name:</strong>
                {{ $contact->name }}
            </div>
            
            <div class="field">
                <strong>Email:</strong>
                {{ $contact->email }}
            </div>
            
            @if($contact->subject)
            <div class="field">
                <strong>Subject:</strong>
                {{ $contact->subject }}
            </div>
            @endif
            
            <div class="field">
                <strong>Message:</strong>
                <div class="message-content">{{ $contact->message }}</div>
            </div>
            
            <div class="field">
                <strong>Submitted At:</strong>
                {{ $contact->created_at->format('F j, Y \a\t g:i A') }}
            </div>
        </div>
        
        <div class="footer">
            <p>This message was sent from your portfolio website contact form.</p>
            <p>Reply directly to this email to respond to {{ $contact->name }}.</p>
        </div>
    </div>
</body>
</html>