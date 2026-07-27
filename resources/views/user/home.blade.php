@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown">🤖 Welcome {{ Auth::user()->name }}!</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">AI Trading Platform</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Notification Marquee -->
            {{-- <div class="row mb-4">
                <div class="col-12">
                    <div class="notification-bar ai-notification animate__animated animate__fadeIn">
                        <div class="marquee-container">
                            <div class="marquee-content">
                                <span class="notification-badge ai-pulse">📢 NOTICE</span>
                                <span class="notification-text">{{ Auth::user()->update_notification }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

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

            <!-- Stats Cards -->
            <div class="row">
                <!-- TRADING BALANCE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card ai-stats-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING BALANCE</span>
                                    <h4 class="mb-3">
                                        <span class="ai-count" data-target="{{ $user_balance }}">{{ Auth::user()->currency }}0.0</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon ai-icon-pulse">
                                        <i class="mdi mdi-wallet-outline fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING CAPITAL -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card ai-stats-card animate__animated animate__fadeInLeft" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING CAPITAL</span>
                                    <h4 class="mb-3">
                                        <span class="ai-count" data-target="{{ $deposit }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon ai-icon-pulse">
                                        <i class="mdi mdi-piggy-bank-outline fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING PROFIT -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card ai-stats-card animate__animated animate__fadeInRight" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING PROFIT</span>
                                    <h4 class="mb-3">
                                        <span class="ai-count" data-target="{{ $profit }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon ai-icon-pulse">
                                        <i class="mdi mdi-chart-line fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOTAL WITHDRAWAL -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card ai-stats-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL WITHDRAWAL</span>
                                    <h4 class="mb-3">
                                        <span class="ai-count" data-target="{{ $withdrawal }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon ai-icon-pulse">
                                        <i class="mdi mdi-cash-multiple fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOTAL FEE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card ai-stats-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL FEE</span>
                                    <h4 class="mb-3">
                                        <span class="ai-count" data-target="{{ Auth::user()->update_trade_fee }}">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon ai-icon-pulse">
                                        <i class="mdi mdi-receipt fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BONUS BALANCE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card ai-stats-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">BONUS BALANCE</span>
                                    <h4 class="mb-3">
                                        <span class="ai-count" data-target="0">{{ Auth::user()->currency }}0.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon ai-icon-pulse">
                                        <i class="mdi mdi-gift fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              <!-- AI Signal Strength Card -->
<div class="col-xl-6 col-md-12">
    <div class="card sweet-card ai-signal-card shadow-sm border-0 animate__animated animate__fadeInUp">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title mb-0 d-flex align-items-center text-dark">
                    <i class="mdi mdi-access-point me-2 text-primary"></i>
                    AI Signal Strength
                </h5>

                <div class="signal-value fw-bold text-primary" style="font-size: 1.2rem;">
                    {{ Auth::user()->signal_strength }}%
                </div>
            </div>

            <!-- Progress Bar -->
            <div class="progress" style="height: 10px; border-radius: 10px; background: #e9ecef;">
                <div class="progress-bar" role="progressbar"
                     style="width: {{ Auth::user()->signal_strength }}%; 
                            background: linear-gradient(90deg, #4f8dfd, #6fb3ff); 
                            box-shadow: 0 0 8px rgba(79,141,253,0.7);"
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

            {{-- <!-- Action Buttons -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <a href="{{route('user.fund.wallet')}}" class="btn btn-primary btn-lg ai-action-btn me-3 animate__animated animate__pulse animate__infinite">
                        <i class="mdi mdi-plus-circle me-2"></i> Add Funds
                    </a>
                    <a href="{{route('user.copy')}}" class="btn btn-success btn-lg ai-action-btn">
                        <i class="mdi mdi-robot me-2"></i> Trading Bot
                    </a>
                </div>
            </div> --}}

            <div class="row mb-4">
    <div class="col-12 text-center">
        <div style="display:inline-flex; gap:15px; flex-wrap:nowrap;">
            <a href="{{route('user.fund.wallet')}}" 
               class="btn btn-primary btn-lg ai-action-btn"
               style="white-space:nowrap;">
                <i class="mdi mdi-plus-circle me-2"></i> Add Funds
            </a>

            <a href="{{route('user.copy')}}" 
               class="btn btn-success btn-lg ai-action-btn"
               style="white-space:nowrap;">
                <i class="mdi mdi-robot me-2"></i> Trading Bot
            </a>
        </div>
    </div>
</div>

            <!-- Charts Section -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card sweet-card ai-chart-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">
                                    <i class="mdi mdi-chart-areaspline me-2"></i>Market Overview
                                </h5>
                                <div class="ms-auto">
                                    <span class="badge bg-primary ai-pulse">
                                        <i class="mdi mdi-brain me-1"></i> Live Data
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
                    <div class="card sweet-card ai-trades-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <i class="mdi mdi-swap-horizontal me-2"></i>Trading Activity
                            </h5>

                            <!-- Tabs Navigation -->
                            <ul class="nav nav-tabs nav-justified mb-4 ai-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active ai-tab-link" data-bs-toggle="tab" href="#open-trades">
                                        <i class="mdi mdi-play-circle-outline me-1"></i> Open Trades
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ai-tab-link" data-bs-toggle="tab" href="#closed-trades">
                                        <i class="mdi mdi-check-circle-outline me-1"></i> Closed Trades
                                    </a>
                                </li>
                            </ul>

                            <!-- Tabs Content -->
                            <div class="tab-content">
                                <!-- Open Trades -->
                                <div class="tab-pane fade show active" id="open-trades">
                                    @if(!empty($profithistory))
                                        @foreach($profithistory as $history)
                                        <div class="trade-item ai-trade-item animate__animated animate__fadeIn">
                                            <div class="trade-icon bg-primary">
                                                <i class="mdi mdi-chart-line"></i>
                                            </div>
                                            <div class="trade-details">
                                                <div class="trade-date">{{ \Carbon\Carbon::parse($history->created_at)->format('M d, Y') }}</div>
                                                <div class="trade-amount">${{ number_format($history->amount, 2) }}</div>
                                            </div>
                                            <div class="trade-status">
                                                <span class="badge bg-success ai-pulse">Active</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="text-center py-4">
                                            <i class="mdi mdi-chart-line display-4 text-muted mb-3"></i>
                                            <p class="text-muted">No open trades</p>
                                        </div>
                                    @endif
                                </div>

                                <!-- Closed Trades -->
                                <div class="tab-pane fade" id="closed-trades">
                                    @if(!empty($withdrawalhistory))
                                        @foreach($withdrawalhistory as $withdrawal)
                                        <div class="trade-item ai-trade-item animate__animated animate__fadeIn">
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
                                            <p class="text-muted">No closed trades</p>
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
    /* Enhanced AI Animations */
    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
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
    }

    .ai-icon-pulse {
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }

    .ai-notification {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        padding: 15px;
        color: white;
        margin-bottom: 20px;
    }

    .marquee-content {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .notification-badge {
        background: rgba(255,255,255,0.2);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    /* Signal Strength */
    .ai-signal-card {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
    }

    .signal-strength {
        text-align: center;
    }

    .signal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .signal-value {
        font-size: 1.5rem;
        font-weight: bold;
        color: #4cd964;
    }

    .signal-progress-container {
        background: rgba(255,255,255,0.2);
        border-radius: 10px;
        height: 8px;
        margin: 20px 0;
        overflow: hidden;
    }

    .signal-progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #ff6b6b, #4cd964);
        border-radius: 10px;
        position: relative;
        transition: width 1s ease;
    }

    .signal-progress-fill {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    .signal-labels {
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.8);
    }

    /* Action Buttons */
    .ai-action-btn {
        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 12px;
        padding: 12px 30px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .ai-action-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-action-btn:hover::before {
        left: 100%;
    }

    .ai-action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    /* Trades Section */
    .ai-tabs {
        border-bottom: 2px solid #e9ecef;
    }

    .ai-tab-link {
        border: none;
        background: none;
        color: #6c757d;
        padding: 12px 20px;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
    }

    .ai-tab-link.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .ai-tab-link:hover {
        color: #4361ee;
    }

    .trade-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 10px;
        background: rgba(67, 97, 238, 0.05);
        transition: all 0.3s ease;
    }

    .trade-item:hover {
        transform: translateX(5px);
        background: rgba(67, 97, 238, 0.1);
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
        color: #28a745;
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
    .ai-count {
        font-variant-numeric: tabular-nums;
    }

    /* Enhanced Base Styles */
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

    .sweet-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Number counting animation
        const counters = document.querySelectorAll('.ai-count');
        
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
        const cards = document.querySelectorAll('.ai-stats-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Tab switching animation
        const tabLinks = document.querySelectorAll('.ai-tab-link');
        tabLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all tabs
                tabLinks.forEach(tab => tab.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
            });
        });

        // Trade items animation
        const tradeItems = document.querySelectorAll('.ai-trade-item');
        tradeItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
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

        // Signal strength animation
        const signalBar = document.querySelector('.signal-progress-bar');
        if (signalBar) {
            const width = signalBar.style.width;
            signalBar.style.width = '0%';
            setTimeout(() => {
                signalBar.style.width = width;
            }, 1000);
        }
    });
</script>

@include('user.footer')