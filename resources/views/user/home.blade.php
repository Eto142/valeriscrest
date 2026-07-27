@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown">Welcome back, {{ Auth::user()->name }}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Account Overview</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Quick Actions -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="quick-actions animate__animated animate__fadeIn">
                        <a href="{{route('user.fund.wallet')}}" class="cta-btn cta-btn-primary">
                            <i class="mdi mdi-plus-circle me-2"></i> Add Funds
                        </a>
                        <a href="{{route('user.withdrawal')}}" class="cta-btn cta-btn-secondary">
                            <i class="mdi mdi-bank-transfer-out me-2"></i> Withdraw Funds
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row">
                <div class="col-12">
                    <h6 class="text-uppercase text-muted mb-3 fw-semibold section-label">Account Summary</h6>
                </div>
                <!-- TRADING BALANCE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card stat-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING BALANCE</span>
                                    <h4 class="mb-3">
                                        <span class="stat-count" data-target="{{ $user_balance }}">{{ Auth::user()->currency }}0.0</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="stat-icon stat-icon-balance icon-float">
                                        <i class="mdi mdi-wallet-outline fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING CAPITAL -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card stat-card animate__animated animate__fadeInLeft" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING CAPITAL</span>
                                    <h4 class="mb-3">
                                        <span class="stat-count" data-target="{{ $deposit }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="stat-icon stat-icon-capital icon-float">
                                        <i class="mdi mdi-piggy-bank-outline fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING PROFIT -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card stat-card animate__animated animate__fadeInRight" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING PROFIT</span>
                                    <h4 class="mb-3">
                                        <span class="stat-count" data-target="{{ $profit }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="stat-icon stat-icon-profit icon-float">
                                        <i class="mdi mdi-chart-line fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOTAL WITHDRAWAL -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card stat-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL WITHDRAWAL</span>
                                    <h4 class="mb-3">
                                        <span class="stat-count" data-target="{{ $withdrawal }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="stat-icon stat-icon-withdrawal icon-float">
                                        <i class="mdi mdi-cash-multiple fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOTAL FEE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card stat-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL FEE</span>
                                    <h4 class="mb-3">
                                        <span class="stat-count" data-target="{{ Auth::user()->update_trade_fee }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="stat-icon stat-icon-fee icon-float">
                                        <i class="mdi mdi-receipt fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BONUS BALANCE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card stat-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">BONUS BALANCE</span>
                                    <h4 class="mb-3">
                                        <span class="stat-count" data-target="0">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="stat-icon stat-icon-bonus icon-float">
                                        <i class="mdi mdi-gift fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              <!-- Momentum Card -->
<div class="col-xl-6 col-md-12">
    <div class="card sweet-card momentum-card shadow-sm border-0 animate__animated animate__fadeInUp">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title mb-0 d-flex align-items-center text-dark">
                    <i class="mdi mdi-speedometer me-2 text-primary"></i>
                    Investment Momentum
                </h5>

                <div class="momentum-value fw-bold text-primary" style="font-size: 1.2rem;">
                    {{ Auth::user()->signal_strength }}%
                </div>
            </div>

            <!-- Progress Bar -->
            <div class="progress" style="height: 10px; border-radius: 10px; background: #e9ecef;">
                <div class="progress-bar momentum-fill" role="progressbar"
                     style="width: {{ Auth::user()->signal_strength }}%;"
                     aria-valuenow="{{ Auth::user()->signal_strength }}" 
                     aria-valuemin="0" 
                     aria-valuemax="100">
                </div>
            </div>

            <!-- Labels -->
            <div class="mt-3 d-flex justify-content-between text-muted small">
                <span>Weak</span>
                <span>Moderate</span>
                <span>Strong</span>
                <span>Excellent</span>
            </div>

        </div>
    </div>
</div>

                </div>
            </div>

            <!-- Charts Section -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card sweet-card market-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">
                                    <i class="mdi mdi-chart-areaspline me-2"></i>Live Markets
                                </h5>
                                <div class="ms-auto">
                                    <span class="badge bg-primary pulse-badge">
                                        <i class="mdi mdi-radar me-1"></i> Live Feed
                                    </span>
                                </div>
                            </div>

                            <!-- TradingView Ticker -->
                            <div class="mb-4">
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                    {
                                        "symbols": [
                                            { "proName": "FOREXCOM:SPXUSD", "title": "S&P 500" },
                                            { "proName": "FOREXCOM:NSXUSD", "title": "Nasdaq 100" },
                                            { "proName": "FX_IDC:EURUSD", "title": "EUR/USD" },
                                            { "proName": "BITSTAMP:BTCUSD", "title": "BTC/USD" },
                                            { "proName": "BITSTAMP:ETHUSD", "title": "ETH/USD" }
                                        ],
                                        "showSymbolLogo": true,
                                        "colorTheme": "light",
                                        "isTransparent": false,
                                        "displayMode": "adaptive",
                                        "locale": "en"
                                    }
                                    </script>
                                </div>
                            </div>

                            <!-- Crypto Widgets -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="crypto-widget">
                                        <div class="tradingview-widget-container">
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                            {
                                                "symbol": "FX:BTCUSD",
                                                "width": "100%",
                                                "height": "100%",
                                                "locale": "en",
                                                "dateRange": "12M",
                                                "colorTheme": "light",
                                                "trendLineColor": "rgba(33, 150, 243, 1)",
                                                "underLineColor": "rgba(33, 150, 243, 0.3)",
                                                "isTransparent": false,
                                                "autosize": true
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="crypto-widget">
                                        <div class="tradingview-widget-container">
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                            {
                                                "symbol": "FX:ETHUSD",
                                                "width": "100%",
                                                "height": "100%",
                                                "locale": "en",
                                                "dateRange": "12M",
                                                "colorTheme": "light",
                                                "trendLineColor": "rgba(33, 150, 243, 1)",
                                                "underLineColor": "rgba(33, 150, 243, 0.3)",
                                                "isTransparent": false,
                                                "autosize": true
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="crypto-widget">
                                        <div class="tradingview-widget-container">
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                            {
                                                "symbol": "FX:LTCUSD",
                                                "width": "100%",
                                                "height": "100%",
                                                "locale": "en",
                                                "dateRange": "12M",
                                                "colorTheme": "light",
                                                "trendLineColor": "rgba(33, 150, 243, 1)",
                                                "underLineColor": "rgba(33, 150, 243, 0.3)",
                                                "isTransparent": false,
                                                "autosize": true
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card sweet-card activity-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <i class="mdi mdi-swap-horizontal me-2"></i>Recent Activity
                            </h5>

                            <!-- Tabs Navigation -->
                            <ul class="nav nav-tabs nav-justified mb-4 activity-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active activity-tab-link" data-bs-toggle="tab" href="#open-trades">
                                        <i class="mdi mdi-trending-up me-1"></i> Earnings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link activity-tab-link" data-bs-toggle="tab" href="#closed-trades">
                                        <i class="mdi mdi-bank-transfer-out me-1"></i> Withdrawals
                                    </a>
                                </li>
                            </ul>

                            <!-- Tabs Content -->
                            <div class="tab-content">
                                <!-- Earnings -->
                                <div class="tab-pane fade show active" id="open-trades">
                                    @if(!empty($profithistory))
                                        @foreach($profithistory as $history)
                                        <div class="trade-item activity-item animate__animated animate__fadeIn">
                                            <div class="trade-icon bg-primary">
                                                <i class="mdi mdi-chart-line"></i>
                                            </div>
                                            <div class="trade-details">
                                                <div class="trade-date">{{ \Carbon\Carbon::parse($history->created_at)->format('M d, Y') }}</div>
                                                <div class="trade-amount">${{ number_format($history->amount, 2) }}</div>
                                            </div>
                                            <div class="trade-status">
                                                <span class="badge bg-success pulse-badge">Active</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="text-center py-4">
                                            <i class="mdi mdi-chart-line display-4 text-muted mb-3"></i>
                                            <p class="text-muted">No earnings recorded yet</p>
                                        </div>
                                    @endif
                                </div>

                                <!-- Withdrawals -->
                                <div class="tab-pane fade" id="closed-trades">
                                    @if(!empty($withdrawalhistory))
                                        @foreach($withdrawalhistory as $withdrawal)
                                        <div class="trade-item activity-item animate__animated animate__fadeIn">
                                            <div class="trade-icon bg-{{ $withdrawal->status == '0' ? 'warning' : 'success' }}">
                                                <i class="mdi mdi-cash"></i>
                                            </div>
                                            <div class="trade-details">
                                                <div class="trade-date">{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('M d, Y') }}</div>
                                                <div class="trade-amount">${{ number_format($withdrawal->amount, 2) }}</div>
                                                <div class="trade-method">{{ $withdrawal->mode }}</div>
                                            </div>
                                            <div class="trade-status">
                                                <span class="badge bg-{{ $withdrawal->status == '0' ? 'warning' : 'success' }}">
                                                    {{ $withdrawal->status == '0' ? 'Pending' : 'Completed' }}
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="text-center py-4">
                                            <i class="mdi mdi-cash-multiple display-4 text-muted mb-3"></i>
                                            <p class="text-muted">No withdrawals yet</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

<style>
    /* Dashboard accent animations */
    .pulse-badge {
        animation: pulseBadge 2s infinite;
    }

    @keyframes pulseBadge {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .section-label {
        letter-spacing: 0.08em;
        font-size: 0.75rem;
    }

    .stat-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(82, 175, 238, 0.12), transparent);
        transition: left 0.5s;
    }

    .stat-card:hover::before {
        left: 100%;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(42, 107, 156, 0.15);
    }

    .icon-float {
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }

    /* Stat icon colors */
    .stat-icon-balance { background: linear-gradient(135deg, #52afee 0%, #2a6b9c 100%); box-shadow: 0 4px 15px rgba(82, 175, 238, 0.35); }
    .stat-icon-capital { background: linear-gradient(135deg, #2a6b9c 0%, #143a54 100%); box-shadow: 0 4px 15px rgba(42, 107, 156, 0.35); }
    .stat-icon-profit { background: linear-gradient(135deg, #1fae7c 0%, #0f7a55 100%); box-shadow: 0 4px 15px rgba(31, 174, 124, 0.35); }
    .stat-icon-withdrawal { background: linear-gradient(135deg, #f58634 0%, #c2621e 100%); box-shadow: 0 4px 15px rgba(245, 134, 52, 0.35); }
    .stat-icon-fee { background: linear-gradient(135deg, #6c757d 0%, #495057 100%); box-shadow: 0 4px 15px rgba(108, 117, 125, 0.35); }
    .stat-icon-bonus { background: linear-gradient(135deg, #8ec9f0 0%, #52afee 100%); box-shadow: 0 4px 15px rgba(142, 201, 240, 0.35); }

    /* Momentum Card */
    .momentum-card {
        background: linear-gradient(135deg, #0b2540 0%, #144a75 100%);
        color: white;
    }

    .momentum-value {
        font-size: 1.5rem;
        font-weight: bold;
        color: #8ec9f0 !important;
    }

    .momentum-fill {
        background: linear-gradient(90deg, #52afee, #8ec9f0);
        box-shadow: 0 0 8px rgba(82, 175, 238, 0.7);
    }

    /* Quick Actions */
    .quick-actions {
        display: inline-flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .cta-btn {
        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 12px;
        padding: 12px 30px;
        font-weight: 600;
        white-space: nowrap;
        color: #fff;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .cta-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .cta-btn:hover::before {
        left: 100%;
    }

    .cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        color: #fff;
    }

    .cta-btn-primary {
        background: linear-gradient(135deg, #52afee 0%, #2a6b9c 100%);
    }

    .cta-btn-secondary {
        background: linear-gradient(135deg, #f58634 0%, #c2621e 100%);
    }

    /* Activity Section */
    .activity-tabs {
        border-bottom: 2px solid #e9ecef;
    }

    .activity-tab-link {
        border: none;
        background: none;
        color: #6c757d;
        padding: 12px 20px;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
    }

    .activity-tab-link.active {
        background: linear-gradient(135deg, #52afee 0%, #2a6b9c 100%);
        color: white;
    }

    .activity-tab-link:hover {
        color: #2a6b9c;
    }

    .trade-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 10px;
        background: rgba(82, 175, 238, 0.06);
        transition: all 0.3s ease;
    }

    .trade-item:hover {
        transform: translateX(5px);
        background: rgba(82, 175, 238, 0.12);
    }

    .trade-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-right: 15px;
    }

    .trade-details {
        flex: 1;
    }

    .trade-date {
        font-weight: 600;
        color: #2c3e50;
    }

    .trade-amount {
        font-weight: 700;
        color: #1fae7c;
    }

    .trade-method {
        font-size: 0.8rem;
        color: #6c757d;
    }

    /* Crypto Widgets */
    .crypto-widget {
        background: white;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .crypto-widget:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Counting Animation */
    .stat-count {
        font-variant-numeric: tabular-nums;
    }

    /* Base card styles */
    .sweet-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        background: white;
    }

    .sweet-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .market-card, .activity-card {
        border: 1px solid #e9ecef;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Number counting animation
        const counters = document.querySelectorAll('.stat-count');
        
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            const currency = counter.textContent.includes('$') ? '$' : '{{ Auth::user()->currency }}';
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = currency + Math.ceil(current).toLocaleString() + '.00';
                    setTimeout(updateCount, 30);
                } else {
                    counter.textContent = currency + target.toLocaleString() + '.00';
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
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Tab switching animation
        const tabLinks = document.querySelectorAll('.activity-tab-link');
        tabLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all tabs
                tabLinks.forEach(tab => tab.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
            });
        });

        // Activity items staggered animation
        const activityItems = document.querySelectorAll('.activity-item');
        activityItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
        });

        // Live badge pulse refresh
        setInterval(() => {
            const badges = document.querySelectorAll('.pulse-badge');
            badges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'pulseBadge 2s infinite';
                }, 10);
            });
        }, 5000);

        // Momentum bar animation
        const momentumBar = document.querySelector('.momentum-fill');
        if (momentumBar) {
            const width = momentumBar.style.width;
            momentumBar.style.width = '0%';
            setTimeout(() => {
                momentumBar.style.width = width;
            }, 1000);
        }
    });
</script>

@include('user.footer')