<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectLine ?? 'Message from SwiftMetaTrd' }}</title>
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
                                    <td style="background:linear-gradient(135deg,#0b1c36,#1d4ed8,#3a74ff); padding:28px 40px; text-align:center;">
                                        <div style="width:48px; height:48px; background:rgba(255,255,255,0.15); border-radius:50%; margin:0 auto 12px; line-height:48px; font-size:22px; color:#fff;">&#9993;</div>
                                        <h1 style="margin:0; color:#ffffff; font-size:20px; font-weight:700; letter-spacing:0.3px;">{{ $subjectLine }}</h1>
                                        <p style="margin:6px 0 0; color:rgba(255,255,255,0.75); font-size:13px;">A message from SwiftMetaTrd</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding:36px 40px;">

                                        <p style="margin:0 0 8px; color:#374151; font-size:15px; line-height:1.7;">Hello,</p>

                                        <!-- Message Box -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8fafc; border-radius:10px; border:1px solid #e2e8f0; margin:16px 0 28px;">
                                            <tr>
                                                <td style="padding:20px 24px; font-size:15px; color:#374151; line-height:1.8;">
                                                    {!! nl2br(e($bodyMessage)) !!}
                                                </td>
                                            </tr>
                                        </table>

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
    <div style="width: 100%; padding: 30px 0;">
        <div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.04);">

            <!-- Header with Premium Text Logo -->
            <div style="background: #ffffff; padding: 35px 20px; text-align: center; border-bottom: 1px solid #ececec;">
                <div style="
                    font-size: 32px;
                    font-weight: 800;
                    letter-spacing: 1.5px;
                    font-family: 'Trebuchet MS', Arial, sans-serif;
                    color: #0b1c36;
                    text-transform: uppercase;
                    background: linear-gradient(90deg, #0b1c36, #3a74ff);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
                    Swift<span style="font-weight:300;">Meta</span><span style="font-weight:800;">Trd</span>
                </div>
            
            </div>

            <!-- Body -->
            <div style="padding: 30px 28px;">
                <h2 style="color: #2d3a4b; font-size: 20px; margin-bottom: 15px;">{{ $subjectLine }}</h2>
                <p style="font-size: 15px; line-height: 1.6; color: #4a5568; margin-bottom: 15px;">
                    {!! nl2br(e($bodyMessage)) !!}
                </p>
            </div>

            <!-- Footer -->
            <div style="background: #f8f9fc; padding: 18px; text-align: center; font-size: 12px; color: #7c869b; line-height: 1.5;">
                You are receiving this message because you are a verified user of Swiftmetatrd.<br>
                If this message is not relevant to you, please disregard it.<br><br>
                &copy; {{ date('Y') }} Swiftmetatrd. All Rights Reserved.
            </div>

        </div>
    </div>
</body>
</html>
