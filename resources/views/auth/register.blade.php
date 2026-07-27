<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Valeris Crest | Create Account</title>
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
.form-wrap { width: 100%; max-width: 460px; animation: authSlide 0.55s cubic-bezier(.22,.68,0,1.2) both; }
@keyframes authSlide {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.mobile-brand { display: none; text-align: center; margin-bottom: 24px; }
.mobile-brand img { height: 40px; }
.form-title { font-size: 1.55rem; font-weight: 800; margin: 0 0 6px; }
.form-sub { color: var(--muted); font-size: 0.92rem; margin: 0 0 16px; }
.steps-row { display:flex; gap:6px; margin-bottom: 20px; }
.step-dot {
    display:inline-flex; align-items:center; gap:5px;
    background:rgba(82,175,238,0.08); border:1px solid rgba(82,175,238,0.25);
    border-radius:20px; padding:4px 12px;
    font-size:0.78rem; font-weight:600; color:var(--primary-lt);
}
.step-dot.active { background:var(--primary); color:#fff; border-color:var(--primary); }
.step-dot i { font-size:0.7rem; }
.auth-alert {
    padding: 11px 16px; margin-bottom: 18px;
    border-radius: 10px; font-size: 0.88rem; border-left: 4px solid;
}
.auth-alert.s { background:rgba(34,197,94,0.1); color:#4ade80; border-color:#22c55e; }
.auth-alert.e { background:rgba(239,68,68,0.1); color:#f87171; border-color:#ef4444; }
.row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.f-label { display:block; font-size:0.83rem; font-weight:600; color:var(--text); margin-bottom:6px; }
.f-wrap  { position:relative; display:flex; align-items:center; }
.f-icon  { position:absolute; left:13px; z-index:2; color:var(--primary); font-size:0.88rem; pointer-events:none; }
.form-control, .form-select {
    width: 100%; padding: 12px 14px 12px 38px;
    border: 1.5px solid var(--input-border); border-radius: 10px;
    font-size: 0.94rem; color: #f5f7fb; background: #0f1319;
    outline: none; transition: border-color .2s, box-shadow .2s;
    appearance: none;
    -webkit-text-fill-color: #f5f7fb;
}
.form-control::placeholder, .form-select::placeholder {
    color: rgba(232,234,237,0.58);
}
.form-control:focus, .form-select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(82,175,238,0.18);
    background: #151923;
    color: #f5f7fb;
    -webkit-text-fill-color: #f5f7fb;
}
.pass-eye { position:absolute; right:13px; z-index:2; color:var(--muted); cursor:pointer; font-size:0.88rem; transition:color .2s; }
.pass-eye:hover { color:var(--primary); }
.field-feedback { font-size:0.82rem; margin-top:5px; min-height:18px; }
.field-feedback.success { color:#4ade80; }
.field-feedback.error   { color:#f87171; }
.terms-row { display:flex; align-items:center; gap:8px; font-size:0.88rem; color:var(--muted); }
.terms-row input { accent-color:var(--primary); width:15px; height:15px; cursor:pointer; }
.terms-row a { color:var(--primary); text-decoration:none; font-weight:600; }
.btn-register {
    width:100%; padding:13px;
    background:linear-gradient(135deg,var(--primary),var(--primary-dark));
    color:#fff; border:none; border-radius:10px;
    font-weight:700; font-size:1rem; cursor:pointer;
    transition:all .3s; box-shadow:0 5px 18px rgba(82,175,238,0.3);
    display:flex; align-items:center; justify-content:center; gap:8px;
    margin-top: 6px;
}
.btn-register:hover { transform:translateY(-2px); box-shadow:0 10px 28px rgba(82,175,238,0.45); }
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
@media(max-width:520px){
    .row-2 { grid-template-columns:1fr; }
    .form-title { font-size: 1.35rem; }
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
                <a href="{{ url('/') }}" aria-label="Go to homepage">
                    <img src="{{ asset('logo.png') }}" alt="Valeris Crest">
                </a>
            </div>
            <div class="visual-mid">
                <h2>Start your trading journey today.</h2>
                <p>Create your account in minutes and get access to global markets, powerful tools and a dedicated support team.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-chart-line"></i> Multi-asset trading &amp; real-time insights</li>
                    <li><i class="fas fa-shield-alt"></i> Secure, regulated platform</li>
                    <li><i class="fas fa-bolt"></i> Fast onboarding &amp; instant funding</li>
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
            <div class="mobile-brand">
                <a href="{{ url('/') }}" aria-label="Go to homepage">
                    <img src="{{ asset('logo.png') }}" alt="Valeris Crest">
                </a>
            </div>

            <h4 class="form-title">Create Your Account</h4>
            <p class="form-sub">Join 50,000+ traders on Valeris Crest</p>
            <div class="steps-row">
                <span class="step-dot active"><i class="fas fa-user"></i> Details</span>
                <span class="step-dot"><i class="fas fa-shield-alt"></i> Verify</span>
                <span class="step-dot"><i class="fas fa-check"></i> Done</span>
            </div>

            @if(session('success'))
                <div class="auth-alert s">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="auth-alert e">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <div class="row-2 mb-3">
                    <div>
                        <label class="f-label" for="name">First Name</label>
                        <div class="f-wrap">
                            <i class="fas fa-user f-icon"></i>
                            <input type="text" class="form-control" id="name" name="name" placeholder="First name" required>
                        </div>
                        <div id="nameFeedback" class="field-feedback"></div>
                    </div>
                    <div>
                        <label class="f-label" for="lname">Last Name</label>
                        <div class="f-wrap">
                            <i class="fas fa-user f-icon"></i>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                        </div>
                        <div id="lnameFeedback" class="field-feedback"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="f-label" for="email">Email Address</label>
                    <div class="f-wrap">
                        <i class="fas fa-envelope f-icon"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                    </div>
                    <div id="emailFeedback" class="field-feedback"></div>
                </div>

                <div class="mb-3">
                    <label class="f-label" for="currency">Preferred Currency</label>
                    <div class="f-wrap">
                        <i class="fas fa-coins f-icon"></i>
                        <select class="form-select" id="currency" name="currency" required>
                            <option value="">Select currency</option>
                            <option value="$">USD &mdash; US Dollar</option>
                            <option value="€">EUR &mdash; Euro</option>
                            <option value="£">GBP &mdash; British Pound</option>
                            <option value="¥">JPY &mdash; Japanese Yen</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="f-label" for="password">Password</label>
                    <div class="f-wrap">
                        <i class="fas fa-lock f-icon"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Create a strong password" required>
                        <span class="pass-eye" id="togglePassword"><i class="fas fa-eye"></i></span>
                    </div>
                    <div id="passwordFeedback" class="field-feedback"></div>
                </div>

                <div class="mb-4">
                    <label class="f-label" for="password_confirmation">Confirm Password</label>
                    <div class="f-wrap">
                        <i class="fas fa-lock f-icon"></i>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat your password" required>
                        <span class="pass-eye" id="togglePasswordConfirm"><i class="fas fa-eye"></i></span>
                    </div>
                    <div id="passwordConfirmFeedback" class="field-feedback"></div>
                </div>

                <div class="mb-3">
                    <label class="terms-row">
                        <input type="checkbox" id="terms" required>
                        I agree to the <a href="#">Terms of Service</a> &amp; <a href="#">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="btn-register">
                    <i class="fas fa-rocket"></i> Create Account
                </button>
            </form>

            <div class="form-footer">
                Already have an account? <a href="{{ route('login') }}">Sign in</a>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('togglePassword').addEventListener('click', function() {
    const p = document.getElementById('password'), ic = this.querySelector('i');
    p.type === 'password' ? (p.type='text', ic.className='fas fa-eye-slash') : (p.type='password', ic.className='fas fa-eye');
});
document.getElementById('togglePasswordConfirm').addEventListener('click', function() {
    const p = document.getElementById('password_confirmation'), ic = this.querySelector('i');
    p.type === 'password' ? (p.type='text', ic.className='fas fa-eye-slash') : (p.type='password', ic.className='fas fa-eye');
});
document.getElementById('email').addEventListener('input', function(){
    const fb = document.getElementById('emailFeedback'), ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.value);
    fb.textContent = this.value ? (ok ? '✓ Valid email' : 'Invalid email format') : '';
    fb.className = 'field-feedback ' + (ok ? 'success' : 'error');
});
document.getElementById('password').addEventListener('input', function(){
    const fb = document.getElementById('passwordFeedback'), ok = this.value.length >= 6;
    fb.textContent = this.value ? (ok ? '✓ Strong enough' : 'Password must be at least 6 characters') : '';
    fb.className = 'field-feedback ' + (ok ? 'success' : 'error');
});
document.getElementById('password_confirmation').addEventListener('input', function(){
    const fb = document.getElementById('passwordConfirmFeedback'), ok = this.value === document.getElementById('password').value;
    fb.textContent = this.value ? (ok ? '✓ Passwords match' : 'Passwords do not match') : '';
    fb.className = 'field-feedback ' + (ok ? 'success' : 'error');
});
</script>
</body>
</html>
