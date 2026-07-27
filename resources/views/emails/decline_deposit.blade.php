<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Declined</title>
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

                            <!-- Status Banner -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:linear-gradient(135deg,#dc2626,#ef4444); padding:32px 40px; text-align:center;">
                                        <div style="width:56px; height:56px; background:rgba(255,255,255,0.2); border-radius:50%; margin:0 auto 14px; line-height:56px; font-size:28px; color:#fff;">&#10005;</div>
                                        <h1 style="margin:0; color:#ffffff; font-size:22px; font-weight:700; letter-spacing:0.3px;">Deposit Declined</h1>
                                        <p style="margin:8px 0 0; color:rgba(255,255,255,0.85); font-size:14px;">Your deposit could not be processed at this time</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:36px 40px;">

                                        <p style="margin:0 0 24px; color:#374151; font-size:15px; line-height:1.7;">
                                            Hello! We regret to inform you that your deposit has been <strong style="color:#dc2626;">declined</strong>. Please review the details below and contact support if you need assistance.
                                        </p>

                                        <!-- Detail Card -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background:#fff5f5; border-radius:10px; border:1px solid #fecaca; margin-bottom:28px;">
                                            <tr>
                                                <td style="padding:20px 24px; border-bottom:1px solid #fecaca;">
                                                    <p style="margin:0 0 4px; font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Amount</p>
                                                    <p style="margin:0; font-size:26px; font-weight:800; color:#dc2626;">${{ number_format($data['amount'], 2) }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:16px 24px;">
                                                    <p style="margin:0 0 4px; font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Reason</p>
                                                    <p style="margin:0; font-size:14px; color:#374151;">{{ $data['reason'] ?? 'No specific reason provided.' }}</p>
                                                </td>
                                            </tr>
                                        </table>

                                        <p style="margin:0 0 8px; color:#6b7280; font-size:14px; line-height:1.7;">
                                            If you believe this is an error or need further clarification, please contact our support team through your dashboard.
                                        </p>

                                        <p style="margin:28px 0 0; color:#374151; font-size:14px;">
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
