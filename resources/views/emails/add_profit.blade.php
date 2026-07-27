<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profit Credited</title>
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
                                    <td style="background:linear-gradient(135deg,#059669,#34d399); padding:32px 40px; text-align:center;">
                                        <div style="width:56px; height:56px; background:rgba(255,255,255,0.2); border-radius:50%; margin:0 auto 14px; line-height:56px; font-size:26px; color:#fff;">&#9650;</div>
                                        <h1 style="margin:0; color:#ffffff; font-size:22px; font-weight:700; letter-spacing:0.3px;">Profit Credited!</h1>
                                        <p style="margin:8px 0 0; color:rgba(255,255,255,0.85); font-size:14px;">Your earnings have been added to your account</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:36px 40px;">

                                        <p style="margin:0 0 24px; color:#374151; font-size:15px; line-height:1.7;">
                                            Hello, <strong>{{ $data['name'] }}</strong>! Great news a profit has been credited to your account. Your investment is growing!
                                        </p>

                                        <!-- Amount highlight -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background:#f0fdf4; border-radius:10px; border:1px solid #86efac; margin-bottom:16px;">
                                            <tr>
                                                <td style="padding:20px 24px;">
                                                    <p style="margin:0 0 4px; font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Profit Amount</p>
                                                    <p style="margin:0; font-size:30px; font-weight:800; color:#059669;">+${{ number_format($data['amount'], 2) }}</p>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- Detail rows -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8fafc; border-radius:10px; border:1px solid #e2e8f0; margin-bottom:28px;">
                                            <tr>
                                                <td style="padding:14px 24px; border-bottom:1px solid #e2e8f0;">
                                                    <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="font-size:12px; color:#94a3b8; font-weight:600; text-transform:uppercase; letter-spacing:0.8px;">Transaction ID</td>
                                                            <td align="right" style="font-size:14px; color:#1e293b; font-weight:600; font-family:monospace;">{{ $data['transaction_id'] }}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:14px 24px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="font-size:12px; color:#94a3b8; font-weight:600; text-transform:uppercase; letter-spacing:0.8px;">Date</td>
                                                            <td align="right" style="font-size:14px; color:#1e293b; font-weight:600;">{{ $data['date'] }}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>

                                        <p style="margin:0 0 8px; color:#6b7280; font-size:14px; line-height:1.7;">
                                            Log in to your dashboard to view your updated balance and full earnings history.
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

    <div style="width:100%; padding:40px 0;">
        <div style="max-width:600px; margin:auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.04);">

            <!-- Header -->
            <div style="background:#ffffff; padding:35px 20px; text-align:center; border-bottom:1px solid #ececec;">
                <div style="
                    font-size:32px;
                    font-weight:800;
                    letter-spacing:1.5px;
                    font-family:'Trebuchet MS', Arial, sans-serif;
                    color:#0b1c36;
                    text-transform:uppercase;
                    background: linear-gradient(90deg, #0b1c36, #3a74ff);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
                    Swift<span style="font-weight:300;">Meta</span><span style="font-weight:800;">Trd</span>
                </div>
            </div>

            <!-- Body -->
            <div style="padding:35px 28px; color:#333; font-size:15px; line-height:1.7;">
                <h2 style="color:#2d3a4b; font-size:20px; margin-bottom:20px;">Hello, {{ $data['name'] }}!</h2>

                <p style="margin-bottom:20px; color:#4a5568;">
                    Great news! A profit has been credited to your account.
                </p>

                <p style="margin-bottom:10px; font-weight:bold;">Profit Details:</p>
                <ul style="margin:0 0 20px 20px; color:#4a5568; padding:0; font-size:15px; line-height:1.6;">
                    <li>Amount: ${{ number_format($data['amount'], 2) }}</li>
                    <li>Transaction ID: {{ $data['transaction_id'] }}</li>
                    <li>Date: {{ $data['date'] }}</li>
                </ul>

                <p style="margin-top:20px; color:#4a5568;">Log in to your account to view your updated balance.</p>
                <p style="color:#4a5568;">Thank you for investing with us!</p>
            </div>

            <!-- Footer -->
            <div style="background:#f8f9fc; padding:18px; text-align:center; font-size:12px; color:#7c869b; line-height:1.5;">
                You are receiving this message because you are a verified user of Swiftmetatrd.<br>
                If this email is not relevant to you, please disregard it.<br><br>
                &copy; {{ date('Y') }} Swiftmetatrd. All Rights Reserved.
            </div>

        </div>
    </div>

</body>
</html>
