<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2>Password Reset Request</h2>
    
    <p>{{ $body }}</p>
    
    <p style="margin-top: 20px;">
        <a href="{{ $action_link }}" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Reset Password</a>
    </p>

    <p style="margin-top: 20px; font-size: 14px; color: #666;">
        If the button above does not work, copy and paste the following URL into your browser:<br>
        <a href="{{ $action_link }}">{{ $action_link }}</a>
    </p>

    <p style="margin-top: 30px; font-size: 14px; color: #999;">
        If you did not request a password reset, no further action is required.
    </p>
    <p style="font-size: 14px; color: #999;">
        Regards,<br>
        Valeriscrest
    </p>
</body>
</html>
