@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown">AI Investment Platform</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Investments</a></li>
                                <li class="breadcrumb-item active">AI Plans</li>
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

            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">🤖 AI-Optimized Investment Packages</h4>
                            <p class="card-title-desc">Powered by advanced machine learning algorithms for maximum returns</p>
                        </div>
                        <div class="card-body p-4">
                            
                            <!-- Investment History Link -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <a href="{{url('investment-history')}}" class="btn btn-outline-primary btn-sm animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-chart-line me-1"></i> AI Analytics Dashboard
                                    </a>
                                    <span class="badge bg-primary ms-2 animate__animated animate__bounce">
                                        <i class="mdi mdi-brain me-1"></i> AI-Powered
                                    </span>
                                </div>
                            </div>

                            <!-- Investment Plans -->
                            <div class="row">
                                <!-- Basic Package -->
                                <div class="col-xl-6">
                                    <div class="card plan-card mb-4 ai-plan-card basic-plan animate__animated animate__fadeInLeft">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <h5 class="card-title mb-0">
                                                    <i class="mdi mdi-robot-excited-outline me-2 text-primary"></i>
                                                    Basic AI Package
                                                </h5>
                                                <span class="badge bg-success ai-pulse">🤖 Active</span>
                                            </div>
                                            <h4 class="text-primary mb-3 animate-count" data-target="200">$0.00</h4>
                                            
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Minimum: <span class="text-primary fw-medium">$200.00 - $9,900</span>
                                            </div>
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                ROI: <span class="text-primary fw-medium">35% Hourly</span>
                                            </div>
                                            <div class="mb-3 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                <span class="text-primary fw-medium">Junior AI Trader Available to Copy</span>
                                            </div>
                                            
                                            <form action="{{route('user.buy.plan')}}" method="post" class="ai-form">
                                                @csrf
                                                <input type="hidden" name="plan_name" value="Basic">
                                                <input type="hidden" name="plan_duration" value="2 Days">
                                                <input type="hidden" name="status" value="1">
                                                
                                                <div class="mb-3">
                                                    <label for="basic-amount" class="form-label">
                                                        <i class="mdi mdi-calculator me-1"></i>AI Investment Amount
                                                    </label>
                                                    <input type="number" class="form-control ai-input" id="basic-amount" name="amount" 
                                                           min="200" max="9900" placeholder="Enter Amount ($200 - $9,900)" required>
                                                    <div class="ai-suggestion">AI Suggestion: $500 for optimal start</div>
                                                </div>
                                                
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary w-md ai-button">
                                                        <i class="mdi mdi-robot me-1"></i> Activate AI Trading
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Silver Package -->
                                <div class="col-xl-6">
                                    <div class="card plan-card mb-4 ai-plan-card silver-plan animate__animated animate__fadeInRight">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <h5 class="card-title mb-0">
                                                    <i class="mdi mdi-robot-industrial me-2 text-primary"></i>
                                                    Silver AI Package
                                                </h5>
                                                <span class="badge bg-success ai-pulse">🚀 Active</span>
                                            </div>
                                            <h4 class="text-primary mb-3 animate-count" data-target="10000">$0.00</h4>
                                            
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Minimum: <span class="text-primary fw-medium">$10,000 - $50,000</span>
                                            </div>
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                ROI: <span class="text-primary fw-medium">18.0% (24 hours)</span>
                                            </div>
                                            <div class="mb-3 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Trader: <span class="text-primary fw-medium">Pro AI Trader Available to Copy</span>
                                            </div>
                                            
                                            <form action="{{route('user.buy.plan')}}" method="post" class="ai-form">
                                                @csrf
                                                <input type="hidden" name="plan_name" value="Silver">
                                                <input type="hidden" name="plan_duration" value="24 hours">
                                                <input type="hidden" name="status" value="1">
                                                
                                                <div class="mb-3">
                                                    <label for="silver-amount" class="form-label">
                                                        <i class="mdi mdi-calculator me-1"></i>AI Investment Amount
                                                    </label>
                                                    <input type="number" class="form-control ai-input" id="silver-amount" name="amount" 
                                                           min="10000" max="50000" placeholder="Enter Amount ($10,000 - $50,000)" required>
                                                    <div class="ai-suggestion">AI Suggestion: $15,000 for balanced growth</div>
                                                </div>
                                                
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary w-md ai-button">
                                                        <i class="mdi mdi-robot me-1"></i> Activate AI Trading
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Premium Package -->
                                <div class="col-xl-6">
                                    <div class="card plan-card mb-4 ai-plan-card premium-plan animate__animated animate__fadeInLeft">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <h5 class="card-title mb-0">
                                                    <i class="mdi mdi-robot-angry-outline me-2 text-primary"></i>
                                                    Premium AI Package
                                                </h5>
                                                <span class="badge bg-success ai-pulse">🔥 Active</span>
                                            </div>
                                            <h4 class="text-primary mb-3 animate-count" data-target="50000">$0.00</h4>
                                            
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Minimum: <span class="text-primary fw-medium">$50,000 - $150,000</span>
                                            </div>
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                ROI: <span class="text-primary fw-medium">25.0% (24 hours)</span>
                                            </div>
                                            <div class="mb-3 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Trader: <span class="text-primary fw-medium">Expert AI Trader Available to Copy</span>
                                            </div>
                                            
                                            <form action="{{route('user.buy.plan')}}" method="post" class="ai-form">
                                                @csrf
                                                <input type="hidden" name="plan_name" value="Premium">
                                                <input type="hidden" name="plan_duration" value="24 hours">
                                                <input type="hidden" name="status" value="1">
                                                
                                                <div class="mb-3">
                                                    <label for="premium-amount" class="form-label">
                                                        <i class="mdi mdi-calculator me-1"></i>AI Investment Amount
                                                    </label>
                                                    <input type="number" class="form-control ai-input" id="premium-amount" name="amount" 
                                                           min="50000" max="150000" placeholder="Enter Amount ($50,000 - $150,000)" required>
                                                    <div class="ai-suggestion">AI Suggestion: $75,000 for premium returns</div>
                                                </div>
                                                
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary w-md ai-button">
                                                        <i class="mdi mdi-robot me-1"></i> Activate AI Trading
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- VIP Package -->
                                <div class="col-xl-6">
                                    <div class="card plan-card mb-4 ai-plan-card vip-plan animate__animated animate__fadeInRight">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <h5 class="card-title mb-0">
                                                    <i class="mdi mdi-robot-love-outline me-2 text-primary"></i>
                                                    VIP AI Package
                                                </h5>
                                                <span class="badge bg-success ai-pulse">💎 Active</span>
                                            </div>
                                            <h4 class="text-primary mb-3 animate-count" data-target="150000">$0.00</h4>
                                            
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Minimum: <span class="text-primary fw-medium">$150,000 - Unlimited</span>
                                            </div>
                                            <div class="mb-2 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                ROI: <span class="text-primary fw-medium">35.0% (24 hours)</span>
                                            </div>
                                            <div class="mb-3 feature-item">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Trader: <span class="text-primary fw-medium">Master AI Trader Available to Copy</span>
                                            </div>
                                            
                                            <form action="{{route('user.buy.plan')}}" method="post" class="ai-form">
                                                @csrf
                                                <input type="hidden" name="plan_name" value="VIP">
                                                <input type="hidden" name="plan_duration" value="24 hours">
                                                <input type="hidden" name="status" value="1">
                                                
                                                <div class="mb-3">
                                                    <label for="vip-amount" class="form-label">
                                                        <i class="mdi mdi-calculator me-1"></i>AI Investment Amount
                                                    </label>
                                                    <input type="number" class="form-control ai-input" id="vip-amount" name="amount" 
                                                           min="150000" placeholder="Enter Amount (Minimum $150,000)" required>
                                                    <div class="ai-suggestion">AI Suggestion: $200,000 for elite performance</div>
                                                </div>
                                                
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary w-md ai-button">
                                                        <i class="mdi mdi-robot me-1"></i> Activate AI Trading
                                                    </button>
                                                </div>
                                            </form>
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
    .ai-plan-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-plan-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-plan-card:hover::before {
        left: 100%;
    }

    .ai-plan-card:hover {
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

    .ai-input {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
    }

    .ai-input:focus {
        border-color: #4361ee;
        box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
    }

    .ai-suggestion {
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: 5px;
        font-style: italic;
        animation: fadeIn 0.5s ease;
    }

    .feature-item {
        animation: slideIn 0.5s ease;
        animation-fill-mode: both;
    }

    .feature-item:nth-child(1) { animation-delay: 0.1s; }
    .feature-item:nth-child(2) { animation-delay: 0.2s; }
    .feature-item:nth-child(3) { animation-delay: 0.3s; }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
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
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = '$' + Math.ceil(current).toLocaleString();
                    setTimeout(updateCount, 30);
                } else {
                    counter.textContent = '$' + target.toLocaleString();
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

        // Add hover effects to plan cards
        const planCards = document.querySelectorAll('.ai-plan-card');
        planCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // AI Input focus effects
        const aiInputs = document.querySelectorAll('.ai-input');
        aiInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    });

    // Add some random AI-like activity
    setInterval(() => {
        const badges = document.querySelectorAll('.ai-pulse');
        badges.forEach(badge => {
            badge.style.animation = 'none';
            setTimeout(() => {
                badge.style.animation = 'aiPulse 2s infinite';
            }, 10);
        });
    }, 5000);
</script>

@include('user.footer')