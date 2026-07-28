<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeris Crest | Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary:#52afee; --primary-dark:#2a6b9c; --primary-lt:#8ec9f0;
            --secondary:#f58634; --muted:#7a8499; --text:#e8eaed;
            --panel:#181b20; --panel-2:#111316;
            --border:rgba(255,255,255,0.07);
            --input-bg:#1b1e24; --input-border:rgba(255,255,255,0.12);
        }
        *, *::before, *::after { box-sizing:border-box; }
        body {
            font-family:'Inter','Segoe UI',sans-serif;
            background:#f4f6f9;
            min-height:100vh; display:flex; align-items:center; justify-content:center;
            padding:24px 16px; position:relative; overflow-x:hidden; color:#111111;
        }
        body::before {
            content:''; position:fixed; top:-120px; right:-120px;
            width:500px; height:500px;
            background:radial-gradient(circle,rgba(82,175,238,0.08) 0%,transparent 70%);
            border-radius:50%; pointer-events:none; z-index:0;
        }
        body::after {
            content:''; position:fixed; bottom:-100px; left:-100px;
            width:400px; height:400px;
            background:radial-gradient(circle,rgba(245,134,52,0.08) 0%,transparent 70%);
            border-radius:50%; pointer-events:none; z-index:0;
        }
        .auth-card {
            background:#ffffff; border-radius:20px; overflow:hidden;
            box-shadow:0 20px 60px rgba(15,23,42,0.12),0 4px 20px rgba(15,23,42,0.08);
            border:1px solid rgba(15,23,42,0.08);
            width:100%; max-width:440px;
            position:relative; z-index:1;
            animation:authSlide .55s cubic-bezier(.22,.68,0,1.2) both;
        }
        @keyframes authSlide {
            from{opacity:0;transform:translateY(28px) scale(.97)}
            to{opacity:1;transform:translateY(0) scale(1)}
        }
        .auth-card::before { content:''; display:block; height:4px; background:linear-gradient(90deg,var(--primary),var(--secondary)); }
        .auth-head {
            text-align:center; padding:2rem 2rem 1.5rem;
            background:#f7fafc;
            border-bottom:1px solid rgba(15,23,42,0.08);
        }
        .auth-logo { height: 44px; width: auto; margin: 0 auto 1rem; display: block; }
        .auth-head h2 { font-size:1.5rem; font-weight:800; color:#111111; margin-bottom:4px; }
        .auth-head p  { font-size:0.9rem; color:#4f4f4f; margin:0; }
        .info-box {
            margin:1.25rem 2rem 0; padding:12px 16px;
            background:rgba(66,153,225,0.12); border:1px solid rgba(66,153,225,0.25);
            border-radius:10px; font-size:0.88rem; color:#1e293b;
            display:flex; align-items:flex-start; gap:10px;
        }
        .info-box i { margin-top:2px; flex-shrink:0; }
        .auth-alert {
            margin:1rem 2rem 0; padding:11px 16px;
            border-radius:10px; font-size:0.88rem; border-left:4px solid;
        }
        .auth-alert.s { background:rgba(34,197,94,0.1); color:#166534; border-color:#22c55e; }
        .auth-alert.e { background:rgba(239,68,68,0.1); color:#991b1b; border-color:#ef4444; }
        .auth-body { padding:2rem; }
        .f-label { display:block; font-size:0.83rem; font-weight:600; color:#111111; margin-bottom:6px; }
        .f-wrap { position:relative; display:flex; align-items:center; }
        .f-icon { position:absolute; left:13px; z-index:2; color:var(--primary); font-size:0.88rem; pointer-events:none; }
        .f-input {
            width:100%; padding:12px 14px 12px 38px;
            border:1.5px solid rgba(15,23,42,0.14); border-radius:10px;
            font-size:0.94rem; color:#111111; background:#ffffff;
            outline:none; transition:border-color .2s,box-shadow .2s;
        }
        .f-input:focus { border-color:var(--primary); box-shadow:0 0 0 3px rgba(82,175,238,.18); background:#ffffff; }
        .btn-auth {
            width:100%; padding:13px;
            background:linear-gradient(135deg,var(--primary),var(--primary-dark));
            color:#fff; border:none; border-radius:10px;
            font-weight:700; font-size:1rem; cursor:pointer;
            transition:all .3s; box-shadow:0 5px 18px rgba(82,175,238,.3);
            display:flex; align-items:center; justify-content:center; gap:8px;
        }
        .btn-auth:hover { transform:translateY(-2px); box-shadow:0 10px 28px rgba(82,175,238,.45); }
        .auth-foot {
            text-align:center; padding:1.2rem 2rem;
            background:var(--panel-2); border-top:1px solid var(--border);
            font-size:0.88rem; color:var(--muted);
        }
        .auth-foot a { color:var(--primary); font-weight:700; text-decoration:none; }
        .auth-foot a:hover { text-decoration:underline; }
    </style>
</head>
<body>
<div class="auth-card">
    <div class="auth-head">
        <img src="{{ asset('logo.png') }}" alt="Valeris Crest" class="auth-logo">
        <h2>Forgot Password?</h2>
        <p>No worries &mdash; we'll send you reset instructions</p>
    </div>

    <div class="info-box">
        <i class="fas fa-info-circle"></i>
        Enter the email address linked to your account and we'll send you a password reset link.
    </div>

    @if(session('message'))
        <div class="auth-alert s" style="margin:1rem 2rem 0;">{{ session('message') }}</div>
    @endif
    @if(session('error'))
        <div class="auth-alert e" style="margin:1rem 2rem 0;">{{ session('error') }}</div>
    @endif

    <div class="auth-body">
        <form method="POST" action="{{ route('forgot.password.submit') }}">
            @csrf
            <div class="mb-4">
                <label class="f-label" for="email">Email Address</label>
                <div class="f-wrap">
                    <i class="fas fa-envelope f-icon"></i>
                    <input type="email" id="email" name="email" class="f-input"
                           placeholder="you@example.com" required>
                </div>
            </div>
            <button type="submit" class="btn-auth">
                <i class="fas fa-paper-plane"></i> Send Reset Link
            </button>
        </form>
    </div>

    <div class="auth-foot">
        Remember your password? <a href="{{ route('login') }}">Back to Sign In</a>
    </div>
</div>
</body>
</html>
