<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SwiftMetaTrd</title>
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

                            <!-- Hero Banner -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:linear-gradient(135deg,#0b1c36,#1d4ed8,#3a74ff); padding:40px 40px 36px; text-align:center;">
                                        <p style="margin:0 0 12px; font-size:36px;">&#127881;</p>
                                        <h1 style="margin:0 0 8px; color:#ffffff; font-size:24px; font-weight:800; letter-spacing:0.3px;">Welcome Aboard!</h1>
                                        <p style="margin:0; color:rgba(255,255,255,0.8); font-size:14px; line-height:1.5;">Your account has been created successfully</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:36px 40px;">

                                        <p style="margin:0 0 20px; color:#374151; font-size:15px; line-height:1.7;">
                                            Hello, <strong>{{ $user->name }}</strong>! We're thrilled to have you join <strong>SwiftMetaTrd</strong>. Your account is all set up and ready to go.
                                        </p>

                                        <!-- Feature highlights -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                                            <tr>
                                                <td style="padding:14px 20px; background:#f0f9ff; border-radius:10px; border-left:4px solid #3a74ff; margin-bottom:10px;">
                                                    <p style="margin:0; font-size:14px; color:#1e293b; line-height:1.6;">
                                                        &#9989;&nbsp;&nbsp;View your portfolio and live balance on your dashboard
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                                            <tr>
                                                <td style="padding:14px 20px; background:#f0f9ff; border-radius:10px; border-left:4px solid #3a74ff;">
                                                    <p style="margin:0; font-size:14px; color:#1e293b; line-height:1.6;">
                                                        &#9989;&nbsp;&nbsp;Make deposits and track your profits in real time
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                                            <tr>
                                                <td style="padding:14px 20px; background:#f0f9ff; border-radius:10px; border-left:4px solid #3a74ff;">
                                                    <p style="margin:0; font-size:14px; color:#1e293b; line-height:1.6;">
                                                        &#9989;&nbsp;&nbsp;Contact our support team anytime from your account
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>

                                        <p style="margin:0 0 8px; color:#6b7280; font-size:14px; line-height:1.7;">
                                            If you have any questions, our support team is always here to help.
                                        </p>

                                        <p style="margin:28px 0 0; color:#374151; font-size:14px;">
                                            Warm regards,<br>
                                            <strong>SwiftMetaTrd Team</strong>
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
                                You are receiving this because you recently created an account on SwiftMetaTrd.<br>
                                If you did not sign up, please ignore this email.
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
