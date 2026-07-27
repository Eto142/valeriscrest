@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown animate__faster">🚀 AI Referral Program</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Earn</a></li>
                                <li class="breadcrumb-item active">Refer & Earn</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Alert Section -->
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success animate__animated animate__bounceIn" role="alert">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success animate__animated animate__bounceIn">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ $message }}
                        </div>
                    @endif
                </div>
            </div>

            <!-- AI Referral Header with Bonus -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-gradient-primary text-white ai-bonus-card animate__animated animate__fadeIn">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="mdi mdi-rocket-launch display-4 me-3"></i>
                                        <div>
                                            <h2 class="text-white mb-1">Earn $50 per Referral!</h2>
                                            <p class="text-white-50 mb-0">AI-powered matching for maximum earnings</p>
                                        </div>
                                    </div>
                                    <div class="ai-bonus-badge">
                                        <span class="badge bg-warning text-dark ai-pulse">
                                            <i class="mdi mdi-star me-1"></i> LIMITED TIME BONUS
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <div class="ai-reward-circle">
                                        <span class="reward-amount">$50</span>
                                        <small class="text-white-50">per friend</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Section -->
            <div class="row mt-4 mb-4">
                <div class="col-sm-12 col-md-4">
                    <div class="card share-boxes ai-referral-card animate__animated animate__fadeInLeft">
                        <div class="card-body text-center">
                            <div class="ai-icon-container bg-primary mb-3">
                                <i class="mdi mdi-share-variant icon"></i>
                            </div>
                            <h5 class="text-primary">Share Your Link</h5>
                            <p class="text-muted">Share your unique AI referral link with friends</p>
                            <div class="ai-step-pulse">1</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card share-boxes ai-referral-card animate__animated animate__fadeInUp">
                        <div class="card-body text-center position-relative">
                            <div class="ai-connection-line d-none d-md-block"></div>
                            <div class="ai-icon-container bg-success mb-3">
                                <i class="mdi mdi-account-plus icon"></i>
                            </div>
                            <h5 class="text-success">Friends Join</h5>
                            <p class="text-muted">Friends sign up using your referral link</p>
                            <div class="ai-step-pulse">2</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card share-boxes ai-referral-card animate__animated animate__fadeInRight">
                        <div class="card-body text-center position-relative">
                            <div class="ai-connection-line d-none d-md-block" style="right: -50%; left: auto;"></div>
                            <div class="ai-icon-container bg-warning mb-3">
                                <i class="mdi mdi-cash-usd icon"></i>
                            </div>
                            <h5 class="text-warning">Earn $50 Each</h5>
                            <p class="text-muted">Get $50 for every friend who invests $100+</p>
                            <div class="ai-step-pulse">3</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Referral Form Section -->
            <div class="row refer-form-sec mt-4">
                <div class="col-lg-6">
                    <div class="card refer-image-card animate__animated animate__fadeInLeft h-100">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="ai-network-visual mb-4">
                                    <div class="ai-node main-node">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <div class="ai-node connected-node node-1">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <div class="ai-node connected-node node-2">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <div class="ai-node connected-node node-3">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <div class="ai-node connected-node node-4">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                </div>
                                <h4 class="text-primary mb-3">Expand Your Network</h4>
                                <div class="ai-earnings-preview">
                                    <div class="earnings-item">
                                        <span class="text-muted">5 Friends =</span>
                                        <span class="text-success fw-bold">$250</span>
                                    </div>
                                    <div class="earnings-item">
                                        <span class="text-muted">10 Friends =</span>
                                        <span class="text-success fw-bold">$500</span>
                                    </div>
                                    <div class="earnings-item">
                                        <span class="text-muted">20 Friends =</span>
                                        <span class="text-success fw-bold">$1,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card refer-form-card animate__animated animate__fadeInRight h-100">
                        <div class="card-body">
                            <div class="refer-form-content">
                                <h3 class="text-primary mb-3">
                                    <i class="mdi mdi-link-variant me-2"></i>Your AI Referral Link
                                </h3>
                                <p class="text-muted mb-4">Share this link and earn $50 for every qualified referral</p>
                                
                                <div class="mb-4">
                                    <label class="form-label text-muted">Your Personal Referral Link</label>
                                    <div class="input-group ai-input-group">
                                        <input type="text" class="form-control ai-referral-input" 
                                               id="refer" value="{{ config('app.url') }}/register?ref=94388539" 
                                               readonly>
                                        <button class="btn btn-primary ai-copy-btn" onclick="copyReferralLink()">
                                            <i class="mdi mdi-content-copy"></i>
                                        </button>
                                    </div>
                                    <small class="text-muted mt-1">Friends get $5 bonus when they sign up with your link</small>
                                </div>

                                <div class="alert alert-success ai-copy-alert" id="copy_alert" style="display: none;">
                                    <i class="mdi mdi-check-circle-outline me-2"></i>
                                    Referral link copied to clipboard!
                                </div>

                                <div class="d-grid mb-4">
                                    <button class="btn btn-primary btn-lg ai-refer-btn" onclick="copyReferralLink()">
                                        <i class="mdi mdi-rocket me-2"></i>
                                        COPY & SHARE LINK
                                    </button>
                                </div>

                                <!-- Quick Share Options -->
                                <div class="mb-4">
                                    <h6 class="text-muted mb-3">Quick Share</h6>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary ai-social-btn facebook-color" onclick="shareOnFacebook()">
                                            <i class="mdi mdi-facebook me-1"></i> Facebook
                                        </button>
                                        <button class="btn btn-info ai-social-btn twitter-color" onclick="shareOnTwitter()">
                                            <i class="mdi mdi-twitter me-1"></i> Twitter
                                        </button>
                                        <button class="btn btn-success ai-social-btn whatsapp-color" onclick="shareOnWhatsApp()">
                                            <i class="mdi mdi-whatsapp me-1"></i> WhatsApp
                                        </button>
                                        <button class="btn btn-danger ai-social-btn email-color" onclick="shareViaEmail()">
                                            <i class="mdi mdi-email me-1"></i> Email
                                        </button>
                                    </div>
                                </div>

                                <!-- Referral Terms -->
                                <div class="ai-terms-card">
                                    <h6 class="text-muted mb-2">💡 How to Earn $50:</h6>
                                    <ul class="text-muted small">
                                        <li>Friend signs up using your link</li>
                                        <li>They deposit minimum $100</li>
                                        <li>You receive $50 instantly</li>
                                        <li>No limit on number of referrals</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Referral Progress & Leaderboard -->
            <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="mdi mdi-trophy me-2"></i>Your Referral Performance
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <div class="ai-stat-box">
                                        <h3 class="text-primary ai-count" data-target="0">0</h3>
                                        <p class="text-muted mb-0">Total Referrals</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ai-stat-box">
                                        <h3 class="text-success ai-count" data-target="0">$0</h3>
                                        <p class="text-muted mb-0">Total Earned</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ai-stat-box">
                                        <h3 class="text-warning ai-count" data-target="0">0</h3>
                                        <p class="text-muted mb-0">Pending</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ai-stat-box">
                                        <h3 class="text-info ai-count" data-target="50">$50</h3>
                                        <p class="text-muted mb-0">Per Referral</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="mdi mdi-crown me-2"></i>Top Referrers
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="ai-leaderboard">
                                <div class="leaderboard-item">
                                    <span class="rank">1</span>
                                    <span class="name">Alex Chen</span>
                                    <span class="earnings">$2,500</span>
                                </div>
                                <div class="leaderboard-item">
                                    <span class="rank">2</span>
                                    <span class="name">Sarah Kim</span>
                                    <span class="earnings">$1,800</span>
                                </div>
                                <div class="leaderboard-item">
                                    <span class="rank">3</span>
                                    <span class="name">Mike Ross</span>
                                    <span class="earnings">$1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<style>
    /* Enhanced AI Animations */
    .ai-bonus-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        position: relative;
        overflow: hidden;
    }

    .ai-bonus-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
        animation: shine 3s infinite;
    }

    @keyframes shine {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }

    .ai-bonus-badge {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .ai-reward-circle {
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        width: 120px;
        height: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-left: auto;
        animation: pulseGlow 2s infinite;
    }

    @keyframes pulseGlow {
        0%, 100% { box-shadow: 0 0 20px rgba(255,255,255,0.3); }
        50% { box-shadow: 0 0 30px rgba(255,255,255,0.6); }
    }

    .reward-amount {
        font-size: 2rem;
        font-weight: bold;
        color: white;
    }

    /* Network Visualization */
    .ai-network-visual {
        position: relative;
        height: 200px;
        margin: 40px 0;
    }

    .ai-node {
        position: absolute;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        animation: nodeFloat 3s ease-in-out infinite;
    }

    .main-node {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #ff6b6b, #ee5a24);
    }

    .connected-node {
        animation-delay: calc(var(--delay) * 0.5s);
    }

    .node-1 { top: 20%; left: 20%; --delay: 1; }
    .node-2 { top: 20%; right: 20%; --delay: 2; }
    .node-3 { bottom: 20%; left: 20%; --delay: 3; }
    .node-4 { bottom: 20%; right: 20%; --delay: 4; }

    @keyframes nodeFloat {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-10px) scale(1.05); }
    }

    /* Earnings Preview */
    .ai-earnings-preview {
        background: rgba(67, 97, 238, 0.1);
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
    }

    .earnings-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }

    .earnings-item:last-child {
        border-bottom: none;
    }

    /* Enhanced Cards */
    .ai-referral-card {
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .ai-referral-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(67, 97, 238, 0.2);
    }

    /* Social Buttons */
    .whatsapp-color { background: #25D366; border-color: #25D366; }
    .email-color { background: #EA4335; border-color: #EA4335; }

    /* Terms Card */
    .ai-terms-card {
        background: rgba(67, 97, 238, 0.05);
        border-radius: 10px;
        padding: 15px;
        border-left: 4px solid #4361ee;
    }

    .ai-terms-card ul {
        margin-bottom: 0;
        padding-left: 20px;
    }

    .ai-terms-card li {
        margin-bottom: 5px;
    }

    /* Stats Boxes */
    .ai-stat-box {
        padding: 20px;
    }

    .ai-stat-box h3 {
        font-size: 2rem;
        margin-bottom: 5px;
    }

    /* Leaderboard */
    .ai-leaderboard {
        space-y: 10px;
    }

    .leaderboard-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .leaderboard-item:last-child {
        border-bottom: none;
    }

    .rank {
        background: #4361ee;
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .name {
        flex: 1;
        margin-left: 10px;
        font-weight: 500;
    }

    .earnings {
        color: #28a745;
        font-weight: bold;
    }

    /* Enhanced Animations */
    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .ai-icon-container {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        border-radius: 20px;
        color: white;
        animation: iconFloat 3s ease-in-out infinite;
    }

    .ai-step-pulse {
        position: absolute;
        top: -10px;
        right: -10px;
        background: #4361ee;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: bold;
        animation: stepPulse 2s infinite;
    }

    .ai-connection-line {
        position: absolute;
        top: 50%;
        left: -50%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #4361ee, transparent);
        animation: lineFlow 3s infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Copy referral link function
        window.copyReferralLink = function() {
            const referralInput = document.getElementById('refer');
            const copyAlert = document.getElementById('copy_alert');
            
            // Select the text
            referralInput.select();
            referralInput.setSelectionRange(0, 99999);
            
            // Copy to clipboard
            navigator.clipboard.writeText(referralInput.value).then(() => {
                // Show success alert
                copyAlert.style.display = 'block';
                
                // Add animation
                copyAlert.classList.remove('animate__fadeIn');
                void copyAlert.offsetWidth;
                copyAlert.classList.add('animate__fadeIn');
                
                // Hide alert after 3 seconds
                setTimeout(() => {
                    copyAlert.style.display = 'none';
                }, 3000);
            });
        };

        // Share functions
        window.shareOnFacebook = function() {
            const link = document.getElementById('refer').value;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(link)}&quote=Join me on this amazing AI investment platform and get $5 bonus!`;
            window.open(url, '_blank', 'width=600,height=400');
        };

        window.shareOnTwitter = function() {
            const link = document.getElementById('refer').value;
            const text = "Join this amazing AI investment platform! Get $5 bonus when you sign up with my link. Earn with AI-powered trading!";
            const url = `https://twitter.com/intent/tweet?url=${encodeURIComponent(link)}&text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        };

        window.shareOnWhatsApp = function() {
            const link = document.getElementById('refer').value;
            const text = "Hey! Check out this AI investment platform. Use my link to get $5 bonus: " + link;
            const url = `https://wa.me/?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank');
        };

        window.shareViaEmail = function() {
            const link = document.getElementById('refer').value;
            const subject = "Join me on this amazing AI investment platform!";
            const body = `Hi! I wanted to share this amazing AI investment platform with you. 

Use my referral link to get $5 bonus when you sign up:
${link}

We can both earn $50 when you start investing!`;
            
            window.location.href = `mailto:?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        };

        // Number counting animation for stats
        const counters = document.querySelectorAll('.ai-count');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    if (counter.textContent.includes('$')) {
                        counter.textContent = '$' + Math.ceil(current).toLocaleString();
                    } else {
                        counter.textContent = Math.ceil(current).toLocaleString();
                    }
                    setTimeout(updateCount, 30);
                } else {
                    if (counter.textContent.includes('$')) {
                        counter.textContent = '$' + target.toLocaleString();
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                }
            };
            
            // Start counting when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(counter);
        });

        // Network animation
        const nodes = document.querySelectorAll('.ai-node');
        nodes.forEach((node, index) => {
            node.style.animationDelay = `${index * 0.5}s`;
        });

        // Auto-animate elements on scroll
        const animatedElements = document.querySelectorAll('.animate__animated');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.visibility = 'visible';
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>

@include('user.footer')