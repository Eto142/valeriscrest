<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body style="margin:0; padding:0; background:#0f172a; font-family:'Segoe UI', Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#0f172a; padding:48px 16px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%;">

                    <!-- Logo Bar -->
                    <tr>
                        <td align="center" style="padding-bottom:28px;">
                            <span style="font-size:26px; font-weight:800; letter-spacing:2px; font-family:'Trebuchet MS', Arial, sans-serif; color:#ffffff; text-transform:uppercase;">
                                Swift<span style="font-weight:300; color:#93c5fd;">Meta</span><span style="color:#3a74ff;">Trd</span>
                            </span>
                        </td>
                    </tr>

                    <!-- Card -->
                    <tr>
                        <td style="background:#ffffff; border-radius:16px; overflow:hidden;">

                            <!-- Header Banner -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:linear-gradient(135deg,#0b1c36,#1d4ed8); padding:32px 40px; text-align:center;">
                                        <div style="width:56px; height:56px; background:rgba(255,255,255,0.15); border-radius:50%; margin:0 auto 14px; line-height:56px; font-size:26px; color:#fff;">&#128274;</div>
                                        <h1 style="margin:0; color:#ffffff; font-size:22px; font-weight:700; letter-spacing:0.3px;">Verify Your Identity</h1>
                                        <p style="margin:8px 0 0; color:rgba(255,255,255,0.8); font-size:14px;">Use the one-time code below to continue</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:36px 40px; text-align:center;">

                                        <p style="margin:0 0 28px; color:#374151; font-size:15px; line-height:1.7; text-align:left;">
                                            Hello, <strong>{{ $name }}</strong>! To complete your verification, please use the one-time password below. This code is valid for a limited time only.
                                        </p>

                                        <!-- OTP Box -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                                            <tr>
                                                <td align="center">
                                                    <div style="display:inline-block; background:linear-gradient(135deg,#1d4ed8,#3a74ff); border-radius:12px; padding:20px 40px;">
                                                        <p style="margin:0 0 6px; font-size:11px; font-weight:700; color:rgba(255,255,255,0.7); text-transform:uppercase; letter-spacing:2px;">Your OTP Code</p>
                                                        <p style="margin:0; font-size:38px; font-weight:900; color:#ffffff; letter-spacing:10px; font-family:'Courier New', monospace;">{{ $otp }}</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- Warning note -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background:#fffbeb; border-radius:10px; border:1px solid #fde68a; margin-bottom:28px;">
                                            <tr>
                                                <td style="padding:14px 20px;">
                                                    <p style="margin:0; font-size:13px; color:#92400e; text-align:center;">
                                                        &#9888;&nbsp; Do not share this code with anyone. SwiftMetaTrd will never ask for your OTP.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>

                                        <p style="margin:0; color:#6b7280; font-size:13px; line-height:1.7; text-align:left;">
                                            If you did not request this code, you can safely ignore this email.
                                        </p>

                                        <p style="margin:28px 0 0; color:#374151; font-size:14px; text-align:left;">
                                            Warm regards,<br>
                                            <strong>SwiftMetaTrd Support Team</strong>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding:24px 0 0;">
                            <p style="margin:0; font-size:12px; color:#475569; line-height:1.7;">
                                You are receiving this because you are a verified user of SwiftMetaTrd.<br>
                                If this is not relevant to you, please disregard it.
                            </p>
                            <p style="margin:10px 0 0; font-size:12px; color:#334155; font-weight:600;">
                                &copy; {{ date('Y') }} SwiftMetaTrd. All Rights Reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
