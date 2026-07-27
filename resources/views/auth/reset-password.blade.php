<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeris Crest | Reset Password</title>
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
        }
        @keyframes authSlide {
            from{opacity:0;transform:translateY(28px) scale(.97)}
            to{opacity:1;transform:translateY(0) scale(1)}
        }
        .auth-card::before { content:''; display:block; height:4px; background:linear-gradient(90deg,var(--primary),var(--secondary)); }
        .auth-head {
            text-align:center; padding:2rem 2rem 1.5rem;
            background:var(--panel-2);
            border-bottom:1px solid var(--border);
        }
        .auth-logo { height: 44px; width: auto; margin: 0 auto 1rem; display: block; }
        .auth-head h2 { font-size:1.5rem; font-weight:800; color:var(--text); margin-bottom:4px; }
        .auth-head p  { font-size:0.9rem; color:var(--muted); margin:0; }
        .auth-alert {
            margin:1rem 2rem 0; padding:11px 16px;
            border-radius:10px; font-size:0.88rem; border-left:4px solid;
        }
        .auth-alert.s { background:rgba(34,197,94,0.1); color:#4ade80; border-color:#22c55e; }
        .auth-alert.e { background:rgba(239,68,68,0.1); color:#f87171; border-color:#ef4444; }
        .auth-body { padding:2rem; }
        .f-label { display:block; font-size:0.83rem; font-weight:600; color:var(--text); margin-bottom:6px; }
        .f-wrap { position:relative; display:flex; align-items:center; }
        .f-icon { position:absolute; left:13px; z-index:2; color:var(--primary); font-size:0.88rem; pointer-events:none; }
        .f-input {
            width:100%; padding:12px 14px 12px 38px;
            border:1.5px solid var(--input-border); border-radius:10px;
            font-size:0.94rem; color:var(--text); background:var(--input-bg);
            outline:none; transition:border-color .2s,box-shadow .2s;
        }
        .f-input:focus { border-color:var(--primary); box-shadow:0 0 0 3px rgba(82,175,238,.18); background:#20242b; }
        .pass-eye { position:absolute; right:13px; z-index:2; color:var(--muted); cursor:pointer; font-size:0.88rem; transition:color .2s; }
        .pass-eye:hover { color:var(--primary); }
        .strength-bar {
            height:4px; border-radius:2px; margin-top:8px;
            background:var(--input-border); overflow:hidden;
        }
        .strength-bar-fill { height:100%; width:0; border-radius:2px; transition:width .3s,background .3s; }
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
        <h2>Reset Password</h2>
        <p>Choose a strong new password for your account</p>
    </div>

    @if(session('error'))
        <div class="auth-alert e" style="margin:1rem 2rem 0;">{{ session('error') }}</div>
    @endif

    <div class="auth-body">
        <form method="POST" action="{{ route('reset.password.submit') }}" id="resetForm">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="mb-4">
                <label class="f-label" for="password">New Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-icon"></i>
                    <input type="password" id="password" name="password" class="f-input"
                           placeholder="Enter new password" required>
                    <span class="pass-eye" id="togglePw1"><i class="fas fa-eye"></i></span>
                </div>
                <div class="strength-bar"><div class="strength-bar-fill" id="strengthFill"></div></div>
                <div id="strengthLabel" style="font-size:0.8rem;margin-top:4px;color:var(--muted);"></div>
            </div>

            <div class="mb-4">
                <label class="f-label" for="password_confirmation">Confirm New Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-icon"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="f-input"
                           placeholder="Repeat new password" required>
                    <span class="pass-eye" id="togglePw2"><i class="fas fa-eye"></i></span>
                </div>
                <div id="matchLabel" style="font-size:0.8rem;margin-top:4px;"></div>
            </div>

            <button type="submit" class="btn-auth">
                <i class="fas fa-check-circle"></i> Reset Password
            </button>
        </form>
    </div>

    <div class="auth-foot">
        <a href="{{ route('login') }}"><i class="fas fa-arrow-left me-1"></i> Back to Sign In</a>
    </div>
</div>

<script>
    function togglePass(btnId, inputId) {
        document.getElementById(btnId).addEventListener('click', function() {
            const p = document.getElementById(inputId), ic = this.querySelector('i');
            p.type === 'password' ? (p.type='text', ic.className='fas fa-eye-slash') : (p.type='password', ic.className='fas fa-eye');
        });
    }
    togglePass('togglePw1','password');
    togglePass('togglePw2','password_confirmation');
    document.getElementById('password').addEventListener('input', function() {
        const v = this.value, fill = document.getElementById('strengthFill'), lbl = document.getElementById('strengthLabel');
        let s = 0, c = '', t = '';
        if (v.length >= 6)  s++;
        if (v.length >= 10) s++;
        if (/[A-Z]/.test(v) && /[0-9]/.test(v)) s++;
        if (s===0){c='#ef4444';t='Weak';}
        else if(s===1){c='#f59e0b';t='Fair';}
        else if(s===2){c='#3b82f6';t='Good';}
        else{c='#16a34a';t='Strong';}
        fill.style.width = (s*33)+'%'; fill.style.background = c;
        lbl.textContent = v ? t : ''; lbl.style.color = c;
    });
    document.getElementById('password_confirmation').addEventListener('input', function() {
        const lbl = document.getElementById('matchLabel'), ok = this.value === document.getElementById('password').value;
        lbl.textContent = this.value ? (ok ? '✓ Passwords match' : 'Passwords do not match') : '';
        lbl.style.color = ok ? '#16a34a' : '#dc2626';
    });
</script>
</body>
</html>
