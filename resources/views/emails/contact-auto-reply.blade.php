<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for contacting me</title>
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
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .contact-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You, {{ $contact->name }}!</h1>
            <p>I've received your message</p>
        </div>
        
        <div class="content">
            <p>Hi {{ $contact->name }},</p>
            
            <p>Thank you for reaching out through my portfolio website! I've received your message and will get back to you as soon as possible, typically within 24-48 hours.</p>
            
            <p>In the meantime, feel free to:</p>
            <ul>
                <li>Check out my projects on <a href="https://github.com/upethalaksiluni" style="color: #3b82f6;">GitHub</a></li>
                <li>Connect with me on <a href="https://www.linkedin.com/in/upetha-laksiluni-9238a0278/" style="color: #3b82f6;">LinkedIn</a></li>
                <li>Explore my portfolio website for more details about my work</li>
            </ul>
            
            <div class="contact-info">
                <h3>Your Message Details:</h3>
                <p><strong>Subject:</strong> {{ $contact->subject ?: 'No subject provided' }}</p>
                <p><strong>Submitted:</strong> {{ $contact->created_at->format('F j, Y \a\t g:i A') }}</p>
            </div>
            
            <p>Best regards,<br>
            <strong>H.T. Upetha Laksiluni</strong><br>
            Software Engineer</p>
        </div>
        
        <div class="footer">
            <p>This is an automated response. Please do not reply to this email.</p>
            <p>If you need immediate assistance, please contact me directly at upethalaksiluni@gmail.com</p>
        </div>
    </div>
</body>
</html>