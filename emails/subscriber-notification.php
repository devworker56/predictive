<?php
function send_admin_notification($name, $email, $company, $phone) {
    $to = ADMIN_EMAIL;
    $subject = "New Subscription Attempt - AI Trading Signals";
    
    $message = "
    <html>
    <head>
        <title>New Subscription</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #0a2540; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f6f9fc; }
            .footer { padding: 10px; text-align: center; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Subscription Attempt</h2>
            </div>
            <div class='content'>
                <p>A new user has attempted to subscribe to the AI Trading Signals service:</p>
                <ul>
                    <li><strong>Name:</strong> $name</li>
                    <li><strong>Email:</strong> $email</li>
                    <li><strong>Company:</strong> " . ($company ? $company : 'Not provided') . "</li>
                    <li><strong>Phone:</strong> " . ($phone ? $phone : 'Not provided') . "</li>
                </ul>
                <p>You can view all subscribers in the admin dashboard.</p>
            </div>
            <div class='footer'>
                <p>AI Trading Signals Admin Notification</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: no-reply@tradingsignals.example\r\n";
    
    mail($to, $subject, $message, $headers);
}
?>