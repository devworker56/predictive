<?php
function send_user_confirmation($name, $email) {
    $subject = "Your AI Trading Signals Subscription";
    
    $message = "
    <html>
    <head>
        <title>Subscription Received</title>
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
                <h2>Thank You for Your Interest</h2>
            </div>
            <div class='content'>
                <p>Dear $name,</p>
                <p>Thank you for subscribing to AI Trading Signals. We're currently in the final stages of development to ensure we deliver the highest quality service.</p>
                <p>We've noted your interest and will contact you as soon as our service becomes available. In the meantime, we're working hard to perfect our AI models that combine:</p>
                <ul>
                    <li>Real-time sentiment analysis of news and social media</li>
                    <li>Advanced time series forecasting</li>
                    <li>News-event correlation algorithms</li>
                </ul>
                <p>We appreciate your patience and look forward to helping you enhance your trading strategy with our AI-powered signals.</p>
                <p>Best regards,<br>The AI Trading Signals Team</p>
            </div>
            <div class='footer'>
                <p>This is an automated message. Please do not reply directly to this email.</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: no-reply@tradingsignals.example\r\n";
    
    mail($email, $subject, $message, $headers);
}
?>