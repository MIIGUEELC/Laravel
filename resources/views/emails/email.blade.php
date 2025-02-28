<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
</head>
<body>
    <h2>Hi {{ $client_name }},</h2>
    <p>Thank you for reaching out to us. We have received your message and will get back to you soon.</p>

    <h3>Your Message:</h3>
    <p><strong>Subject:</strong> {{ $subject ?? 'No subject provided' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $comment }}</p>

    <p>Best regards,</p>
    <p>Hotel Miranda</p>
</body>
</html>
