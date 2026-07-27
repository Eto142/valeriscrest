<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeris Crest | Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #52afee;
            --primary-dark: #2a6b9c;
            --primary-lt: #8ec9f0;
            --secondary: #f58634;
            --text: #e8eaed;
            --muted: #7a8499;
            --panel: #181b20;
            --panel-2: #111316;
            --border: rgba(255,255,255,0.07);
            --input-bg: #1b1e24;
            --input-border: rgba(255,255,255,0.12);
        }
        *, *::before, *::after { box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            margin: 0;
            color: var(--text);
        }

        /* ===== Split shell ===== */
        .auth-shell { display: flex; min-height: 100vh; width: 100%; }

        /* ---- Left: brand / visual panel ---- */
        .auth-visual {
            flex: 1 1 46%;
            position: relative; overflow: hidden;
            background: linear-gradient(160deg, #0b1a29 0%, #0f2e4a 50%, #144a75 100%);
            padding: 56px; display: flex; flex-direction: column; justify-content: space-between;
        }
        .visual-pattern {
            position: absolute; inset: 0; pointer-events: none;
            background-image: radial-gradient(rgba(255,255,255,0.07) 1px, transparent 1px);
            background-size: 26px 26px; opacity: 0.55;
        }
        .visual-glow { position: absolute; border-radius: 50%; filter: blur(6px); pointer-events: none; }
        .visual-glow-1 { width: 340px; height: 340px; top: -90px; right: -90px; background: radial-gradient(circle, rgba(82,175,238,0.35) 0%, transparent 70%); }
        .visual-glow-2 { width: 300px; height: 300px; bottom: -70px; left: -70px; background: radial-gradient(circle, rgba(245,134,52,0.22) 0%, transparent 70%); }
        .visual-content { position: relative; z-index: 1; display: flex; flex-direction: column; justify-content: space-between; height: 100%; animation: authSlide 0.6s cubic-bezier(.22,.68,0,1.2) both; }
        .visual-brand { display: flex; align-items: center; gap: 10px; }
        .visual-brand img { height: 34px; width: auto; }
        .visual-brand span { font-weight: 800; font-size: 1.15rem; letter-spacing: .3px; }
        .visual-mid h2 { font-size: 2rem; font-weight: 800; line-height: 1.25; margin: 0 0 16px; }
        .visual-mid p { color: rgba(232,234,237,0.75); font-size: 0.98rem; line-height: 1.6; margin: 0 0 28px; max-width: 420px; }
        .feature-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 14px; }
        .feature-list li { display: flex; align-items: center; gap: 12px; font-size: 0.92rem; }
        .feature-list i {
            width: 34px; height: 34px; border-radius: 10px; flex-shrink: 0;
            background: rgba(82,175,238,0.15); border: 1px solid rgba(82,175,238,0.3);
            display: flex; align-items: center; justify-content: center; color: var(--primary-lt);
        }
        .visual-stats { display: flex; gap: 34px; padding-top: 26px; border-top: 1px solid rgba(255,255,255,0.1); }
        .stat strong { display: block; font-size: 1.35rem; font-weight: 800; color: #fff; }
        .stat span { font-size: 0.8rem; color: rgba(232,234,237,0.6); }

        /* ---- Right: form panel ---- */
        .auth-form-side {
            flex: 1 1 54%; display: flex; align-items: center; justify-content: center;
            padding: 40px 24px; background: #0b0c0e; position: relative;
        }
        .form-wrap { width: 100%; max-width: 420px; animation: authSlide 0.55s cubic-bezier(.22,.68,0,1.2) both; }
        @keyframes authSlide {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .mobile-brand { display: none; text-align: center; margin-bottom: 24px; }
        .mobile-brand img { height: 40px; }
        .form-title { font-size: 1.6rem; font-weight: 800; margin: 0 0 6px; }
        .form-sub { color: var(--muted); font-size: 0.92rem; margin: 0 0 18px; }
        .trust-row { display:flex; flex-wrap:wrap; gap:7px; margin-bottom: 22px; }
        .trust-pill {
            display:inline-flex; align-items:center; gap:5px;
            background:rgba(82,175,238,0.08); border:1px solid rgba(82,175,238,0.25);
            border-radius:20px; padding:4px 11px;
            font-size:0.77rem; font-weight:600; color:var(--primary-lt);
        }
        .trust-pill i { font-size:0.7rem; }
        .auth-alert {
            padding: 11px 16px; margin-bottom: 18px;
            border-radius: 10px; font-size: 0.88rem; border-left: 4px solid;
        }
        .auth-alert.s { background:rgba(34,197,94,0.1); color:#4ade80; border-color:#22c55e; }
        .auth-alert.e { background:rgba(239,68,68,0.1); color:#f87171; border-color:#ef4444; }
        .auth-alert ul { margin:0; padding-left:16px; }
        .f-label { display:block; font-size:0.83rem; font-weight:600; color:var(--text); margin-bottom:6px; }
        .f-wrap  { position:relative; display:flex; align-items:center; }
        .f-icon  { position:absolute; left:13px; z-index:2; color:var(--primary); font-size:0.88rem; pointer-events:none; }
        .form-control {
            width: 100%;
            padding: 12px 14px 12px 38px;
            border: 1.5px solid var(--input-border);
            border-radius: 10px;
            font-size: 0.94rem;
            color: var(--text);
            background: var(--input-bg);
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(82,175,238,0.18);
            background: #20242b; outline: none;
        }
        .form-control.err { border-color: #ef4444; }
        .pass-eye {
            position:absolute; right:13px; z-index:2;
            color:var(--muted); cursor:pointer; font-size:0.88rem;
            transition:color .2s;
        }
        .pass-eye:hover { color:var(--primary); }
        .f-error { font-size:0.8rem; color:#f87171; margin-top:4px; }
        .check-row {
            display:flex; align-items:center; gap:8px;
            font-size:0.88rem; color:var(--muted); cursor:pointer;
        }
        .check-row input { accent-color:var(--primary); width:15px; height:15px; cursor:pointer; }
        .forgot-link { font-size:0.88rem; color:var(--primary); text-decoration:none; font-weight:500; }
        .forgot-link:hover { text-decoration:underline; }
        .btn-login {
            width:100%; padding:13px;
            background:linear-gradient(135deg,var(--primary),var(--primary-dark));
            color:#fff; border:none; border-radius:10px;
            font-weight:700; font-size:1rem; cursor:pointer;
            transition:all .3s; box-shadow:0 5px 18px rgba(82,175,238,0.3);
            display:flex; align-items:center; justify-content:center; gap:8px;
            margin-top: 6px;
        }
        .btn-login:hover { transform:translateY(-2px); box-shadow:0 10px 28px rgba(82,175,238,0.45); }
        .text-primary { color:var(--primary)!important; }
        .form-footer {
            text-align:center; margin-top:22px; padding-top:18px;
            border-top:1px solid var(--border);
            font-size:0.88rem; color:var(--muted);
        }
        .form-footer a { color:var(--primary); font-weight:700; text-decoration:none; }
        .form-footer a:hover { text-decoration:underline; }

        @media(max-width:900px){
            .auth-visual { display: none; }
            .mobile-brand { display: block; }
            .auth-form-side { flex: 1 1 100%; padding: 40px 20px; }
        }
        @media(max-width:480px){
            .form-title { font-size: 1.4rem; }
        }
    </style>
</head>
<body>
<div class="auth-shell">

    <!-- Brand / visual panel -->
    <div class="auth-visual">
        <div class="visual-pattern"></div>
        <div class="visual-glow visual-glow-1"></div>
        <div class="visual-glow visual-glow-2"></div>
        <div class="visual-content">
            <div class="visual-brand">
                <img src="{{ asset('logo.png') }}" alt="Valeris Crest">
                
            </div>
            <div class="visual-mid">
                <h2>Trade with confidence, anywhere in the world.</h2>
                <p>Access global markets, real-time analytics and secure funding all from one powerful dashboard.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-shield-alt"></i> Bank-grade security &amp; encryption</li>
                    <li><i class="fas fa-bolt"></i> Instant deposits &amp; withdrawals</li>
                    <li><i class="fas fa-headset"></i> 24/7 dedicated support</li>
                </ul>
            </div>
            <div class="visual-stats">
                <div class="stat"><strong>50K+</strong><span>Active Traders</span></div>
                <div class="stat"><strong>$2B+</strong><span>Volume Traded</span></div>
                <div class="stat"><strong>150+</strong><span>Countries</span></div>
            </div>
        </div>
    </div>

    <!-- Form panel -->
    <div class="auth-form-side">
        <div class="form-wrap">
            <div class="mobile-brand"><img src="{{ asset('logo.png') }}" alt="Valeris Crest"></div>

            <h4 class="form-title">Welcome Back</h4>
            <p class="form-sub">Sign in to your trading account</p>
            <div class="trust-row">
                <span class="trust-pill"><i class="fas fa-shield-alt"></i> SSL Secured</span>
                <span class="trust-pill"><i class="fas fa-lock"></i> Encrypted</span>
                <span class="trust-pill"><i class="fas fa-award"></i> Regulated</span>
            </div>

            @if(session('success'))
                <div class="auth-alert s">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="auth-alert e">{{ session('error') }}</div>
            @endif
            @if($errors->any())
                <div class="auth-alert e">
                    <ul>@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <div class="mb-4">
                    <label class="f-label" for="email">Email Address</label>
                    <div class="f-wrap">
                        <i class="fas fa-envelope f-icon"></i>
                        <input type="email" id="email" name="email"
                               class="form-control @error('email') err @enderror"
                               placeholder="you@example.com" value="{{ old('email') }}" required>
                    </div>
                    @error('email')<div class="f-error">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="f-label" for="password">Password</label>
                    <div class="f-wrap">
                        <i class="fas fa-lock f-icon"></i>
                        <input type="password" id="password" name="password"
                               class="form-control @error('password') err @enderror"
                               placeholder="Enter your password" required>
                        <span class="pass-eye" id="togglePassword"><i class="fas fa-eye"></i></span>
                    </div>
                    @error('password')<div class="f-error">{{ $message }}</div>@enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <label class="check-row">
                        <input type="checkbox" name="remember" id="remember"> Remember me
                    </label>
                    <a href="{{ route('forgot.password.form') }}" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>
            </form>

            <div class="form-footer">
                Don't have an account? <a href="{{ route('register') }}">Create one now</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const pw = document.getElementById('password');
        const ic = this.querySelector('i');
        if (pw.type === 'password') { pw.type = 'text'; ic.className = 'fas fa-eye-slash'; }
        else { pw.type = 'password'; ic.className = 'fas fa-eye'; }
    });
</script>
</body>
</html>
