<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $subjectLine ?? 'Message from valeriscrest' }}</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background:#f4f6fb; margin:0; padding:0; }
        .container { max-width:600px; margin:32px auto; padding:0 16px; }
        .card { background:#ffffff; border-radius:8px; padding:24px; box-shadow:0 1px 3px rgba(16,24,40,0.06); }
        h1 { font-size:18px; margin:0 0 12px; color:#0b1c36; }
        p { margin:0 0 12px; color:#334155; line-height:1.6; }
        .footer { font-size:12px; color:#64748b; text-align:center; margin-top:12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>{{ $subjectLine ?? 'Message from valeriscrest' }}</h1>
            <div>
                {!! nl2br(e($bodyMessage ?? '')) !!}
            </div>
        </div>
        <div class="footer">
            <p>You are receiving this because you are a verified user of valeriscrest.</p>
            <p>&copy; {{ date('Y') }} valeriscrest. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
