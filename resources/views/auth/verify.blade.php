<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeris Crest | OTP Verification</title>
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
            background:#0b0c0e;
            min-height:100vh; display:flex; align-items:center; justify-content:center;
            padding:24px 16px; position:relative; overflow-x:hidden; color:var(--text);
        }
        body::before {
            content:''; position:fixed; top:-120px; right:-120px;
            width:500px; height:500px;
            background:radial-gradient(circle,rgba(82,175,238,0.13) 0%,transparent 70%);
            border-radius:50%; pointer-events:none; z-index:0;
        }
        body::after {
            content:''; position:fixed; bottom:-100px; left:-100px;
            width:400px; height:400px;
            background:radial-gradient(circle,rgba(245,134,52,0.1) 0%,transparent 70%);
            border-radius:50%; pointer-events:none; z-index:0;
        }
        .auth-card {
            background:var(--panel); border-radius:20px; overflow:hidden;
            box-shadow:0 20px 60px rgba(0,0,0,0.5),0 4px 20px rgba(0,0,0,0.3);
            border:1px solid var(--border);
            width:100%; max-width:440px;
            position:relative; z-index:1;
            animation:authSlide .55s cubic-bezier(.22,.68,0,1.2) both;
            text-align:center;
        }
        @keyframes authSlide {
            from{opacity:0;transform:translateY(28px) scale(.97)}
            to{opacity:1;transform:translateY(0) scale(1)}
        }
        .auth-card::before { content:''; display:block; height:4px; background:linear-gradient(90deg,var(--primary),var(--secondary)); }
        .auth-head {
            padding:2rem 2rem 1.5rem;
            background:var(--panel-2);
            border-bottom:1px solid var(--border);
        }
        .auth-logo { height: 44px; width: auto; margin: 0 auto 1rem; display: block; }
        .auth-head h2 { font-size:1.5rem; font-weight:800; color:var(--text); margin-bottom:4px; }
        .auth-head p  { font-size:0.9rem; color:var(--muted); margin:0; }
        .step-progress {
            display:flex; align-items:center; justify-content:center; gap:6px; margin-top:14px;
        }
        .step-progress .sp { display:inline-flex; align-items:center; gap:5px; background:rgba(82,175,238,0.08); border:1px solid rgba(82,175,238,0.25); border-radius:20px; padding:4px 12px; font-size:0.78rem; font-weight:600; color:var(--primary-lt); }
        .step-progress .sp.active { background:var(--primary); color:#fff; border-color:var(--primary); }
        .auth-alert { margin:1rem 2rem 0; padding:11px 16px; border-radius:10px; font-size:0.88rem; border-left:4px solid; }
        .auth-alert.s { background:rgba(34,197,94,0.1); color:#4ade80; border-color:#22c55e; }
        .auth-alert.e { background:rgba(239,68,68,0.1); color:#f87171; border-color:#ef4444; }
        .auth-body { padding:2rem; }
        /* OTP boxes */
        .otp-boxes { display:flex; gap:12px; justify-content:center; margin-bottom:8px; }
        .otp-box {
            width:58px; height:64px;
            border:1.5px solid var(--input-border); border-radius:12px;
            font-size:1.8rem; font-weight:700; color:var(--text);
            text-align:center; background:var(--input-bg);
            outline:none; transition:border-color .2s,box-shadow .2s;
        }
        .otp-box:focus {
            border-color:var(--primary);
            box-shadow:0 0 0 3px rgba(82,175,238,.18);
            background:#20242b;
        }
        /* Hidden actual input for form submission */
        .otp-hidden { display:none; }
        .otp-hint { font-size:0.82rem; color:var(--muted); margin-bottom:20px; }
        .btn-auth {
            width:100%; padding:13px;
            background:linear-gradient(135deg,var(--primary),var(--primary-dark));
            color:#fff; border:none; border-radius:10px;
            font-weight:700; font-size:1rem; cursor:pointer;
            transition:all .3s; box-shadow:0 5px 18px rgba(82,175,238,.3);
            display:flex; align-items:center; justify-content:center; gap:8px;
        }
        .btn-auth:hover { transform:translateY(-2px); box-shadow:0 10px 28px rgba(82,175,238,.45); }
        .btn-resend {
            width:100%; padding:11px;
            background:transparent; color:var(--primary);
            border:1.5px solid rgba(82,175,238,0.4); border-radius:10px;
            font-weight:600; font-size:0.95rem; cursor:pointer;
            transition:all .3s; margin-top:10px;
            display:flex; align-items:center; justify-content:center; gap:8px;
        }
        .btn-resend:hover { background:rgba(82,175,238,0.08); border-color:var(--primary); }
        .response { min-height:20px; font-size:0.85rem; color:#f87171; margin-top:8px; }
        @media(max-width:480px){
            .auth-body { padding:1.5rem; }
            .otp-box { width:48px; height:56px; font-size:1.5rem; }
        }
    </style>
</head>
<body>
<div class="auth-card">
    <div class="auth-head">
        <img src="{{ asset('logo.png') }}" alt="Valeris Crest" class="auth-logo">
        <h2>Verify Your Identity</h2>
        <p>Enter the 4-digit code sent to your email</p>
        <div class="step-progress">
            <span class="sp"><i class="fas fa-check"></i> Account</span>
            <span class="sp active"><i class="fas fa-shield-alt"></i> Verify</span>
            <span class="sp"><i class="fas fa-check-circle"></i> Done</span>
        </div>
    </div>

    @if(session('success'))
        <div class="auth-alert s" style="margin:1rem 2rem 0;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="auth-alert e" style="margin:1rem 2rem 0;">{{ session('error') }}</div>
    @endif

    <div class="auth-body">
        <form method="POST" action="{{ route('user.step3') }}" id="otpForm">
            @csrf
            <input type="hidden" name="otp_code" id="otpHidden">

            <div class="otp-boxes">
                <input type="text" class="otp-box" maxlength="1" inputmode="numeric" pattern="[0-9]" id="otp1" autofocus>
                <input type="text" class="otp-box" maxlength="1" inputmode="numeric" pattern="[0-9]" id="otp2">
                <input type="text" class="otp-box" maxlength="1" inputmode="numeric" pattern="[0-9]" id="otp3">
                <input type="text" class="otp-box" maxlength="1" inputmode="numeric" pattern="[0-9]" id="otp4">
            </div>
            <p class="otp-hint">Didn't receive it? Check your spam folder or resend below.</p>

            <button type="submit" class="btn-auth">
                <i class="fas fa-check-circle"></i> Verify Code
            </button>

            <div class="response">
                @error('otp_code') {{ $message }} @enderror
            </div>
        </form>

        <form method="POST" action="{{ route('user.resend.otp') }}">
            @csrf
            <button type="submit" class="btn-resend">
                <i class="fas fa-redo"></i> Resend OTP
            </button>
        </form>
    </div>
</div>

<script>
    const boxes = [1,2,3,4].map(n => document.getElementById('otp'+n));
    boxes.forEach((box, i) => {
        box.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g,'');
            if (this.value && i < 3) boxes[i+1].focus();
            syncHidden();
        });
        box.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && !this.value && i > 0) boxes[i-1].focus();
        });
        box.addEventListener('paste', function(e) {
            e.preventDefault();
            const p = (e.clipboardData || window.clipboardData).getData('text').replace(/\D/g,'').slice(0,4);
            p.split('').forEach((c,j) => { if(boxes[j]) boxes[j].value = c; });
            if(boxes[Math.min(p.length,3)]) boxes[Math.min(p.length,3)].focus();
            syncHidden();
        });
    });
    function syncHidden() {
        document.getElementById('otpHidden').value = boxes.map(b=>b.value).join('');
    }
    document.getElementById('otpForm').addEventListener('submit', function() { syncHidden(); });
</script>
</body>
</html>
