@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown animate__faster">🤖 AI Investment Analytics</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Investments</a></li>
                                <li class="breadcrumb-item active">AI Analytics Dashboard</li>
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

            <!-- AI Analytics Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-primary text-white ai-pulse-border animate__animated animate__fadeIn">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="text-white mb-2">
                                        <i class="mdi mdi-brain me-2"></i>AI Investment History
                                    </h3>
                                    <p class="text-white-50 mb-0">Real-time analytics from your AI trading activities</p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <a href="{{route('user.buy.plan')}}" class="btn btn-outline-light me-2 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-arrow-left me-1"></i> Back to Plans
                                    </a>
                                    <button class="btn btn-light ai-button">
                                        <i class="mdi mdi-download me-1"></i> Export Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h4 class="mb-0 animate-count" data-target="{{ count($plan) }}">0</h4>
                                    <p class="text-muted mb-0">Total Investments</p>
                                </div>
                                <div class="icon-container bg-success ms-3 ai-pulse">
                                    <i class="mdi mdi-chart-line icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInLeft" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h4 class="mb-0 animate-count" data-target="{{ $plan->sum('amount') }}">0</h4>
                                    <p class="text-muted mb-0">Total Invested</p>
                                </div>
                                <div class="icon-container bg-primary ms-3 ai-pulse">
                                    <i class="mdi mdi-cash-multiple icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInRight" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    @php
                                        $activePlans = $plan->where('status', 1)->count();
                                    @endphp
                                    <h4 class="mb-0 animate-count" data-target="{{ $activePlans }}">0</h4>
                                    <p class="text-muted mb-0">Active Plans</p>
                                </div>
                                <div class="icon-container bg-info ms-3 ai-pulse">
                                    <i class="mdi mdi-robot icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    @php
                                        $completedPlans = $plan->where('status', 0)->count();
                                    @endphp
                                    <h4 class="mb-0 animate-count" data-target="{{ $completedPlans }}">0</h4>
                                    <p class="text-muted mb-0">Completed Plans</p>
                                </div>
                                <div class="icon-container bg-warning ms-3 ai-pulse">
                                    <i class="mdi mdi-check-circle icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Investment History Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">
                                    <i class="mdi mdi-history me-2"></i>AI Trading History
                                </h4>
                                <span class="badge bg-primary ai-pulse">
                                    <i class="mdi mdi-brain me-1"></i> Live Analytics
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(count($plan) > 0)
                            <div class="table-responsive">
                                <table class="table table-hover table-centered mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="animate__animated animate__fadeIn">Transaction ID</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.1s">Amount</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.2s">Plan Name</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.3s">Plan Duration</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.4s">Date</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.5s">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($plan as $transaction)
                                        <tr class="ai-table-row animate__animated animate__fadeIn" style="animation-delay: {{ $loop->index * 0.1 }}s">
                                            <td>
                                                <span class="fw-medium text-primary transaction-id">
                                                    <i class="mdi mdi-identifier me-1"></i>{{ $transaction->transaction_id }}
                                                </span>
                                            </td>
                                            <td class="fw-bold text-success amount-cell">
                                                ${{ number_format($transaction->amount, 2) }}
                                            </td>
                                            <td>
                                                @php
                                                    $planName = $transaction->plan_name;
                                                    $badgeClass = 'bg-primary ai-badge';
                                                    if (strpos(strtolower($planName), 'silver') !== false) {
                                                        $badgeClass = 'bg-secondary ai-badge';
                                                    } elseif (strpos(strtolower($planName), 'premium') !== false) {
                                                        $badgeClass = 'bg-warning ai-badge';
                                                    } elseif (strpos(strtolower($planName), 'vip') !== false) {
                                                        $badgeClass = 'bg-info ai-badge';
                                                    }
                                                @endphp
                                                <span class="badge {{ $badgeClass }}">
                                                    <i class="mdi mdi-robot me-1"></i>{{ $transaction->plan_name }}
                                                </span>
                                            </td>
                                            <td>{{ $transaction->plan_duration }}</td>
                                            <td>
                                                <span class="ai-date">
                                                    {{ \Carbon\Carbon::parse($transaction->created_at)->format('M d, Y h:i A') }}
                                                </span>
                                            </td>
                                            <td>
                                                @if($transaction->status == 1)
                                                    <span class="badge bg-success ai-status-pulse">Active</span>
                                                @else
                                                    <span class="badge bg-secondary">Completed</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="text-center py-5 animate__animated animate__fadeIn">
                                <div class="mb-4">
                                    <i class="mdi mdi-robot-confused display-4 text-muted ai-float"></i>
                                </div>
                                <h5 class="text-muted">No Investment History Found</h5>
                                <p class="text-muted mb-4">Start your AI investment journey to see analytics here</p>
                                <a href="{{route('user.buy.plan')}}" class="btn btn-primary ai-button">
                                    <i class="mdi mdi-robot me-1"></i> Start AI Investing
                                </a>
                            </div>
                            @endif
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
    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .ai-pulse-border {
        position: relative;
        overflow: hidden;
    }

    .ai-pulse-border::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-pulse-border:hover::before {
        left: 100%;
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

    .ai-stats-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-stats-card:hover::before {
        left: 100%;
    }

    .ai-stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(67, 97, 238, 0.15);
        border-color: #4361ee;
    }

    .ai-table-row {
        transition: all 0.3s ease;
        position: relative;
    }

    .ai-table-row:hover {
        transform: translateX(5px);
        background: rgba(67, 97, 238, 0.05) !important;
    }

    .ai-table-row::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(180deg, #4361ee, #3a0ca3);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .ai-table-row:hover::before {
        opacity: 1;
    }

    .ai-badge {
        animation: badgeGlow 3s infinite;
    }

    @keyframes badgeGlow {
        0%, 100% { box-shadow: 0 0 5px rgba(67, 97, 238, 0.3); }
        50% { box-shadow: 0 0 15px rgba(67, 97, 238, 0.6); }
    }

    .ai-status-pulse {
        animation: statusPulse 2s infinite;
    }

    @keyframes statusPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .ai-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .transaction-id {
        font-family: 'Courier New', monospace;
        position: relative;
    }

    .amount-cell {
        position: relative;
        font-variant-numeric: tabular-nums;
    }

    .ai-date {
        font-size: 0.875rem;
        color: #6c757d;
    }

    /* Icon Container Styles */
    .icon-container {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 8px;
        color: white;
        transition: all 0.3s ease;
    }

    .icon {
        font-size: 24px;
    }

    /* Counting Animation */
    .animate-count {
        font-variant-numeric: tabular-nums;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Number counting animation
        const counters = document.querySelectorAll('.animate-count');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    if (counter.classList.contains('text-success')) {
                        counter.textContent = '$' + Math.ceil(current).toLocaleString();
                    } else {
                        counter.textContent = Math.ceil(current).toLocaleString();
                    }
                    setTimeout(updateCount, 30);
                } else {
                    if (counter.classList.contains('text-success')) {
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

        // Add hover effects to cards
        const cards = document.querySelectorAll('.ai-stats-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Table row animation on scroll
        const tableRows = document.querySelectorAll('.ai-table-row');
        const rowObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    rowObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        tableRows.forEach(row => {
            row.style.animationPlayState = 'paused';
            rowObserver.observe(row);
        });

        // Random AI-like activity
        setInterval(() => {
            const badges = document.querySelectorAll('.ai-pulse');
            badges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'aiPulse 2s infinite';
                }, 10);
            });
        }, 5000);

        // Add data streaming effect to transaction IDs
        const transactionIds = document.querySelectorAll('.transaction-id');
        transactionIds.forEach(id => {
            const originalText = id.textContent;
            id.textContent = originalText.replace(/./g, '█');
            
            let index = 0;
            const streamText = () => {
                if (index < originalText.length) {
                    id.textContent = originalText.substring(0, index + 1) + 
                                   originalText.substring(index + 1).replace(/./g, '█');
                    index++;
                    setTimeout(streamText, 50);
                }
            };
            
            setTimeout(streamText, 1000);
        });
    });
</script>

@include('user.footer')