<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body style="margin:0; padding:24px; font-family:Arial, sans-serif; background:#f4f4f7; color:#111;">
    <div style="max-width:600px; margin:0 auto; background:#ffffff; padding:24px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
        <h1 style="margin-top:0; font-size:20px;">OTP Verification</h1>
        <p style="margin:16px 0; font-size:15px; line-height:1.6;">Hello {{ $name }},</p>
        <p style="margin:16px 0; font-size:15px; line-height:1.6;">Use the code below to complete your verification.</p>
        <p style="margin:24px 0; padding:18px; background:#f0f4ff; border-radius:8px; font-size:28px; letter-spacing:4px; text-align:center; font-weight:700;">{{ $otp }}</p>
        <p style="margin:16px 0; font-size:14px; line-height:1.6; color:#555;">This code is valid for a limited time. If you did not request this email, please ignore it.</p>
        <p style="margin:16px 0 0; font-size:14px; line-height:1.6;">Thanks,<br>valeriscrest</p>
    </div>
</body>
</html>
