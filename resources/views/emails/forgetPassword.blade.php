<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
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
                                valeriscrest<span style="font-weight:300; color:#93c5fd;"></span><span style="color:#3a74ff;"></span>
                            </span>
                        </td>
                    </tr>

                    <!-- Card -->
                    <tr>
                        <td style="background:#ffffff; border-radius:16px; overflow:hidden;">

                            <!-- Header Banner -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:linear-gradient(135deg,#4f46e5,#7c3aed); padding:32px 40px; text-align:center;">
                                        <div style="width:56px; height:56px; background:rgba(255,255,255,0.15); border-radius:50%; margin:0 auto 14px; line-height:56px; font-size:26px; color:#fff;">&#128273;</div>
                                        <h1 style="margin:0; color:#ffffff; font-size:22px; font-weight:700; letter-spacing:0.3px;">Password Reset Request</h1>
                                        <p style="margin:8px 0 0; color:rgba(255,255,255,0.8); font-size:14px;">Click the button below to reset your password</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:36px 40px;">

                                        <p style="margin:0 0 24px; color:#374151; font-size:15px; line-height:1.7;">
                                            {{ $body }}
                                        </p>

                                        <!-- CTA Button -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                                            <tr>
                                                <td align="center">
                                                    <a href="{{ $action_link }}" style="display:inline-block; background:linear-gradient(135deg,#4f46e5,#7c3aed); color:#ffffff; text-decoration:none; font-size:15px; font-weight:700; padding:14px 36px; border-radius:10px; letter-spacing:0.3px;">
                                                        Reset My Password
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- Security note -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background:#fffbeb; border-radius:10px; border:1px solid #fde68a; margin-bottom:24px;">
                                            <tr>
                                                <td style="padding:14px 20px;">
                                                    <p style="margin:0; font-size:13px; color:#92400e; text-align:center;">
                                                        &#9888;&nbsp; This link will expire shortly. If you did not request this, please ignore this email.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>

                                        <p style="margin:0; color:#6b7280; font-size:13px; line-height:1.7;">
                                            If the button above doesn't work, copy and paste this URL into your browser:<br>
                                            <span style="color:#4f46e5; word-break:break-all; font-size:12px;">{{ $action_link }}</span>
                                        </p>

                                        <p style="margin:28px 0 0; color:#374151; font-size:14px;">
                                            Warm regards,<br>
                                            <strong>valeriscrest Support Team</strong>
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
                                You are receiving this because a password reset was requested for your account.<br>
                                If you did not make this request, please disregard this email.
                            </p>
                            <p style="margin:10px 0 0; font-size:12px; color:#334155; font-weight:600;">
                                &copy; {{ date('Y') }} valeriscrest. All Rights Reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
