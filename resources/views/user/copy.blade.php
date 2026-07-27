@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

          

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between animate__animated animate__fadeInDown">
                        <h4 class="mb-sm-0 font-size-18">🤖 AI Expert Traders</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Trading</a></li>
                                <li class="breadcrumb-item active">Expert Traders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- AI Notification Bar -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card ai-notification-bar animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary me-3 ai-pulse">
                                    <i class="mdi mdi-robot-excited me-1"></i> AI Notice
                                </span>
                                <div class="marquee-container" style="overflow: hidden; white-space: nowrap;">
                                    <div class="marquee-content">
                                        <span class="text-muted">🚀 Explore The Expertise Of Our AI-Optimized Top-Performing Expert Traders Today And Maximize Your Trades With Neural Network Predictions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Traders Grid -->
            <div class="row">
                @foreach($traders as $trader)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card trader-card h-100 ai-trader-card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <!-- Verified Badge -->
                            <div class="verified-badge">
                                <i class="mdi mdi-check-circle text-success"></i>
                            </div>
                            
                            <!-- Trader Avatar -->
                            <div class="text-center mb-3">
                                <a href="{{asset('uploads/trader/'.$trader->image)}}" class="glightbox">
                                    <img src="{{asset('uploads/trader/'.$trader->image)}}" class="trader-avatar ai-pulse" alt="{{$trader->name}}">
                                </a>
                            </div>
                            
                            <!-- Trader Name -->
                            <h4 class="trader-name text-center mb-3">
                                <i class="mdi mdi-robot-industrial me-2 text-primary"></i>
                                {{$trader->name}}
                            </h4>
                            
                            <!-- Copy Button -->
                            <button id="copyButton{{$trader->id}}" 
                                    class="btn btn-primary w-100 ai-copy-btn mb-3"
                                    onclick="handleCopy('{{$trader->id}}', '{{$trader->name}}')">
                                <i class="mdi mdi-robot me-1"></i> AI Copy Trader
                            </button>
                            
                            <!-- Stats Grid -->
                            <div class="stats-container">
                                <div class="stat-item">
                                    <div class="stat-value copiers">
                                        <i class="mdi mdi-account-multiple me-1"></i>{{$trader->copier}}
                                    </div>
                                    <div class="stat-label">AI Copiers</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value gains">
                                        <i class="mdi mdi-trending-up me-1"></i>+{{$trader->gains}}%
                                    </div>
                                    <div class="stat-label">AI Gains</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value {{ $trader->risk == 'High' ? 'risk-high' : ($trader->risk == 'Medium' ? 'risk-medium' : 'risk-low') }}">
                                        <i class="mdi mdi-shield-alert me-1"></i>{{$trader->risk}}
                                    </div>
                                    <div class="stat-label">AI Risk</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value loss">
                                        <i class="mdi mdi-trending-down me-1"></i>-{{$trader->loss}}%
                                    </div>
                                    <div class="stat-label">Max Loss</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value commission">
                                        <i class="mdi mdi-cash me-1"></i>{{$trader->commission}}%
                                    </div>
                                    <div class="stat-label">AI Commission</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value transactions">
                                        <i class="mdi mdi-swap-horizontal me-1"></i>{{$trader->total_transactions}}
                                    </div>
                                    <div class="stat-label">AI Trades</div>
                                </div>
                            </div>
                            
                            <!-- AI Performance Indicator -->
                            <div class="ai-performance mt-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">AI Performance Score</small>
                                    <div class="ai-score">
                                        @php
                                            $performanceScore = min(100, max(60, ($trader->gains - $trader->loss) * 2 + 50));
                                        @endphp
                                        <span class="badge bg-success">{{$performanceScore}}%</span>
                                    </div>
                                </div>
                                <div class="progress mt-1" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$performanceScore}}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
    .ai-trader-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-trader-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-trader-card:hover::before {
        left: 100%;
    }

    .ai-trader-card:hover {
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

    .ai-copy-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .ai-copy-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-copy-btn:hover::before {
        left: 100%;
    }

    .ai-copy-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
    }

    .ai-copy-btn.copied {
        background: linear-gradient(135deg, #4cc9f0, #2ec4b6);
    }

    .ai-copy-btn.copied::after {
        content: '✓ AI Copied!';
    }

    .ai-notification-bar {
        background: linear-gradient(90deg, #4361ee, #3a0ca3);
        border: none;
        color: white;
    }

    /* Trader Card Styles */
    .trader-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid rgba(67, 97, 238, 0.2);
        transition: all 0.3s ease;
    }

    .ai-trader-card:hover .trader-avatar {
        border-color: #4361ee;
        transform: scale(1.05);
    }

    .verified-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 1.5rem;
        z-index: 2;
    }

    .stats-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .stat-item {
        text-align: center;
        padding: 0.5rem;
        border-radius: 8px;
        background-color: rgba(67, 97, 238, 0.05);
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        background-color: rgba(67, 97, 238, 0.1);
        transform: translateY(-2px);
    }

    .stat-value {
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 0.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stat-label {
        font-size: 0.7rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .gains { color: #28a745; }
    .loss { color: #dc3545; }
    .risk-high { color: #dc3545; }
    .risk-medium { color: #ffc107; }
    .risk-low { color: #28a745; }
    .copiers { color: #6c757d; }
    .commission { color: #6f42c1; }
    .transactions { color: #20c997; }

    .ai-performance {
        padding: 0.75rem;
        background: rgba(67, 97, 238, 0.05);
        border-radius: 8px;
        border-left: 4px solid #4361ee;
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

    /* Marquee Animation */
    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
    }

    .marquee-content {
        display: inline-block;
        animation: marquee 20s linear infinite;
    }

    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .stats-container {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .trader-avatar {
            width: 100px;
            height: 100px;
        }
        
        .ai-chat {
            width: 280px;
            right: 15px;
        }
    }

    @media (max-width: 576px) {
        .stats-container {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- GLightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

<script>
    // Initialize GLightbox
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    // Handle copy trader action
    function handleCopy(traderId, traderName) {
        const button = document.getElementById(`copyButton${traderId}`);
        
        // Add loading state
        button.innerHTML = '<i class="mdi mdi-robot me-1"></i> AI Processing...';
        button.classList.add('disabled');
        
        // Simulate API call with timeout
        setTimeout(() => {
            // Change to success state
            button.innerHTML = '<i class="mdi mdi-check me-1"></i> AI Copied!';
            button.classList.add('copied');
            button.classList.remove('disabled');
            button.classList.add('ai-pulse');
            
            // Store in localStorage
            localStorage.setItem(`aiCopiedTrader_${traderId}`, 'true');
            
            // Remove pulse animation after it completes
            setTimeout(() => {
                button.classList.remove('ai-pulse');
            }, 500);
            
            // Show AI confirmation
            showAIToast(`🤖 Successfully AI-copied ${traderName}`);
            
            // Reset button after 3 seconds
            setTimeout(() => {
                button.innerHTML = '<i class="mdi mdi-robot me-1"></i> AI Copy Again';
                button.classList.remove('copied');
            }, 3000);
        }, 1500);
    }

    // Show AI toast notification
    function showAIToast(message) {
        // Create toast element
        const toast = document.createElement('div');
        toast.className = 'position-fixed bottom-0 end-0 p-3';
        toast.style.zIndex = '1100';
        toast.innerHTML = `
            <div class="toast show" role="alert">
                <div class="toast-header">
                    <i class="mdi mdi-robot text-primary me-2"></i>
                    <strong class="me-auto">AI Assistant</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            </div>
        `;
        document.body.appendChild(toast);
        
        // Remove toast after 5 seconds
        setTimeout(() => {
            toast.remove();
        }, 5000);
    }

    // Check copied status on page load
    document.addEventListener('DOMContentLoaded', function() {
        @foreach($traders as $trader)
            if (localStorage.getItem(`aiCopiedTrader_{{ $trader->id }}`)) {
                const button = document.getElementById(`copyButton{{ $trader->id }}`);
                button.innerHTML = '<i class="mdi mdi-robot me-1"></i> AI Copy Again';
                button.classList.add('copied');
            }
        @endforeach

        // Show error modal if there's an error
        @if(session('error'))
            // You can implement a proper modal here
            console.error('Error:', '{{ session('error') }}');
        @endif

        // Add hover effects to trader cards
        const traderCards = document.querySelectorAll('.ai-trader-card');
        traderCards.forEach(card => {
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
</script>

@include('user.footer')