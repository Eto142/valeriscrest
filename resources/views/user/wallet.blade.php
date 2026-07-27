@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">


            <!-- end page title -->

            <!-- Dashboard Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                <div>
                                    <h5 class="card-title mb-1">
                                        <i class="mdi mdi-robot-excited-outline me-2 text-primary"></i>
                                        AI Account Wallet
                                    </h5>
                                    <p class="card-title-desc mb-0">Smart asset management with real-time AI analysis</p>
                                    <span class="badge bg-primary mt-1 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-brain me-1"></i> Neural Network Powered
                                    </span>
                                </div>
                                <div class="action-buttons mt-3 mt-md-0">
                                    <a href="{{route('user.fund.wallet')}}" class="btn btn-primary ai-button">
                                        <i class="mdi mdi-plus-circle-outline me-1"></i> AI Deposit
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pass" class="btn btn-outline-primary ms-2 ai-button">
                                        <i class="mdi mdi-arrow-up me-1"></i> Smart Withdraw
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Crypto Accounts Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-currency-btc me-2 text-warning"></i>
                                AI Crypto Accounts
                            </h4>
                            <p class="card-title-desc">Smart cryptocurrency wallets with AI optimization</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Bitcoin Wallet -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3 ai-pulse">
                                                    <i class="fab fa-btc text-warning"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Bitcoin AI Wallet</h5>
                                                    <small class="text-muted">BTC • Neural Optimized</small>
                                                </div>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-primary mb-1 animate-count" data-target="{{floatval($btc_balance)}}">{{$btc_balance}} <small class="text-muted">BTC</small></h3>
                                                <p class="text-muted mb-0">≈ {{$user_balance}} USD</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-trending-up text-success me-1"></i>
                                                    <small class="text-success">AI Prediction: Bullish</small>
                                                </div>
                                            </div>
                                            <div class="wallet-actions">
                                                <a href="{{route('user.fund.wallet')}}" class="btn btn-outline-primary btn-sm me-2 ai-action-btn">
                                                    <i class="mdi mdi-arrow-down me-1"></i> AI Deposit
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#pass" class="btn btn-outline-primary btn-sm me-2 ai-action-btn">
                                                    <i class="mdi mdi-arrow-up me-1"></i> Smart Withdraw
                                                </a>
                                                <a href="#" class="btn btn-outline-primary btn-sm ai-action-btn">
                                                    <i class="mdi mdi-swap-horizontal me-1"></i> AI Swap
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ethereum Wallet -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInUp">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3 ai-pulse">
                                                    <i class="fab fa-ethereum text-info"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Ethereum AI Wallet</h5>
                                                    <small class="text-muted">ETH • Smart Contract Ready</small>
                                                </div>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-primary mb-1 animate-count" data-target="{{floatval($eth_balance)}}">{{$eth_balance}} <small class="text-muted">ETH</small></h3>
                                                <p class="text-muted mb-0">≈ {{$user_balance}} USD</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-trending-neutral text-warning me-1"></i>
                                                    <small class="text-warning">AI Prediction: Stable</small>
                                                </div>
                                            </div>
                                            <div class="wallet-actions">
                                                <a href="{{route('user.fund.wallet')}}" class="btn btn-outline-primary btn-sm me-2 ai-action-btn">
                                                    <i class="mdi mdi-arrow-down me-1"></i> AI Deposit
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#pass" class="btn btn-outline-primary btn-sm me-2 ai-action-btn">
                                                    <i class="mdi mdi-arrow-up me-1"></i> Smart Withdraw
                                                </a>
                                                <a href="#" class="btn btn-outline-primary btn-sm ai-action-btn">
                                                    <i class="mdi mdi-swap-horizontal me-1"></i> AI Swap
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Escrow Account -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-lock text-danger"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">AI Escrow Vault</h5>
                                                    <small class="text-muted">Secure Holding • AI Protected</small>
                                                </div>
                                                <span class="badge bg-danger ms-auto ai-pulse">🔒 Locked</span>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-primary mb-1">{{Auth::user()->currency}}{{Auth::user()->update_escrow}}</h3>
                                                <p class="text-muted mb-0">AI Secured Funds</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-shield-check text-success me-1"></i>
                                                    <small class="text-success">AI Security: Active</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fiat Accounts Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-bank me-2 text-success"></i>
                                AI Fiat Accounts
                            </h4>
                            <p class="card-title-desc">Smart traditional currency accounts with AI analysis</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- USD Account -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3 ai-pulse">
                                                    <i class="mdi mdi-currency-usd text-success"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">USD AI Account</h5>
                                                    <small class="text-muted">US Dollar • AI Managed</small>
                                                </div>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-primary mb-1">{{$user_balance}}  <small class="text-muted">USD</small></h3>
                                                <p class="text-muted mb-0">≈ {{$user_balance}} USD</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-rocket-launch text-info me-1"></i>
                                                    <small class="text-info">AI Ready for Activation</small>
                                                </div>
                                            </div>
                                            <div class="wallet-actions">
                                                <a href="{{route('user.fund.wallet')}}" class="btn btn-outline-primary btn-sm me-2 ai-action-btn">
                                                    <i class="mdi mdi-arrow-down me-1"></i> AI Deposit
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#pass" class="btn btn-outline-primary btn-sm ai-action-btn">
                                                    <i class="mdi mdi-arrow-up me-1"></i> Smart Withdraw
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- EUR Account -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInUp">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-currency-eur text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">EUR AI Account</h5>
                                                    <small class="text-muted">Euro • AI Enhanced</small>
                                                </div>
                                                <span class="badge bg-danger ms-auto ai-pulse">🔒 AI Locked</span>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-muted mb-1">AI Locked</h3>
                                                <p class="text-muted mb-0">Neural Network Calibrating</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-timer-sand text-warning me-1"></i>
                                                    <small class="text-warning">AI Activation: 85%</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CHF Account -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-currency-chf text-info"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">CHF AI Account</h5>
                                                    <small class="text-muted">Swiss Franc • AI Optimized</small>
                                                </div>
                                                <span class="badge bg-danger ms-auto ai-pulse">🔒 AI Locked</span>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-muted mb-1">AI Locked</h3>
                                                <p class="text-muted mb-0">Machine Learning in Progress</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-brain text-info me-1"></i>
                                                    <small class="text-info">AI Training: 72%</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    /* AI Animations */
    .ai-wallet-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-wallet-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-wallet-card:hover::before {
        left: 100%;
    }

    .ai-wallet-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(67, 97, 238, 0.15);
        border-color: #4361ee;
    }

    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .ai-button {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .ai-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-button:hover::before {
        left: 100%;
    }

    .ai-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
    }

    .ai-action-btn {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .ai-action-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 3px 10px rgba(67, 97, 238, 0.2);
    }

    .ai-trend {
        font-size: 0.75rem;
        padding: 4px 8px;
        background: rgba(67, 97, 238, 0.05);
        border-radius: 4px;
        display: inline-block;
    }

    .wallet-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(67, 97, 238, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: all 0.3s ease;
    }

    .wallet-balance h3 {
        font-weight: 600;
    }

    .wallet-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .wallet-actions .btn {
        flex: 1;
        min-width: 80px;
        font-size: 12px;
        padding: 6px 12px;
    }

    /* AI Assistant */
    .ai-assistant {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        z-index: 1000;
        animation: float 3s ease-in-out infinite;
        transition: all 0.3s ease;
    }

    .ai-assistant:hover {
        transform: scale(1.1);
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .ai-chat {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 300px;
        background: white;
        border-radius: 12px;
        border: 1px solid #e9ecef;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        z-index: 999;
        transform: translateY(20px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .ai-chat.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .ai-chat-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e9ecef;
    }

    .ai-message {
        background: rgba(67, 97, 238, 0.05);
        padding: 10px 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 14px;
        border: 1px solid rgba(67, 97, 238, 0.1);
    }

    .progress-bar {
        height: 4px;
        background: #e9ecef;
        border-radius: 2px;
        overflow: hidden;
        margin: 15px 0;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #4361ee, #3a0ca3);
        border-radius: 2px;
        width: 0%;
        animation: loading 2s infinite;
    }

    @keyframes loading {
        0% { width: 0%; }
        50% { width: 100%; }
        100% { width: 0%; }
    }

    /* Counting Animation */
    .animate-count {
        font-variant-numeric: tabular-nums;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .wallet-actions {
            flex-direction: column;
        }
        
        .wallet-actions .btn {
            width: 100%;
            margin-bottom: 5px;
        }
        
        .ai-chat {
            width: 280px;
            right: 15px;
        }
    }
</style>

<script>
    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    // Number Counting Animation
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.animate-count');
        
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = current.toFixed(8) + ' ';
                    setTimeout(updateCount, 30);
                } else {
                    counter.textContent = target.toFixed(8) + ' ';
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

        // Add hover effects to wallet cards
        const walletCards = document.querySelectorAll('.ai-wallet-card');
        walletCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Simulate AI activity
        setInterval(() => {
            const badges = document.querySelectorAll('.ai-pulse');
            badges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'aiPulse 2s infinite';
                }, 10);
            });
        }, 5000);
    });

    // Simulate real-time updates
    setInterval(function() {
        console.log("AI Wallet Analytics Updated");
    }, 30000);
</script>

@include('user.footer')