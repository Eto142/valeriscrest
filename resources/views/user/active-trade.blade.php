@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Active Trade</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('user.buy.plan') }}">Investments</a></li>
                                <li class="breadcrumb-item active">Active Trade</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Live Trade Status Banner -->
            <div class="row">
                <div class="col-12">
                    <div class="trade-status-banner">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 mb-3 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <div class="live-indicator me-3">
                                        <span class="live-dot"></span>
                                        <span class="live-text">LIVE</span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 text-white">{{ $plan->plan_name }} Package</h5>
                                        <p class="mb-0 text-white-50">Trade is actively running</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="trade-stat">
                                            <p class="mb-1 text-white-50 small">Invested</p>
                                            <h5 class="mb-0 text-white">${{ number_format($plan->amount, 2) }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="trade-stat">
                                            <p class="mb-1 text-white-50 small">Duration</p>
                                            <h5 class="mb-0 text-white">{{ $plan->plan_duration }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="trade-stat">
                                            <p class="mb-1 text-white-50 small">Status</p>
                                            <h5 class="mb-0">
                                                <span class="badge bg-success px-3 py-2 pulse-badge">Active</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TradingView Chart -->
            <div class="row mt-4">
                <div class="col-xl-9 col-lg-8">
                    <div class="card trading-chart-card">
                        <div class="card-header trading-chart-header d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title mb-0 text-white me-3">
                                    <i class="mdi mdi-chart-line me-2"></i>Live Market Chart
                                </h5>
                                <div class="chart-pair-badges">
                                    <span class="chart-pair active" data-symbol="BINANCE:BTCUSDT" onclick="changeSymbol(this)">BTC/USDT</span>
                                    <span class="chart-pair" data-symbol="BINANCE:ETHUSDT" onclick="changeSymbol(this)">ETH/USDT</span>
                                    <span class="chart-pair" data-symbol="FX:EURUSD" onclick="changeSymbol(this)">EUR/USD</span>
                                    <span class="chart-pair" data-symbol="BINANCE:SOLUSDT" onclick="changeSymbol(this)">SOL/USDT</span>
                                </div>
                            </div>
                            <div class="chart-live-tag">
                                <span class="live-chart-dot"></span> Real-time
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="tradingview-chart" style="height: 500px; width: 100%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Trade Details Sidebar -->
                <div class="col-xl-3 col-lg-4">
                    <!-- P&L Card -->
                    <div class="card pnl-card mb-4">
                        <div class="card-body text-center">
                            <div class="pnl-icon mb-3">
                                <i class="mdi mdi-trending-up"></i>
                            </div>
                            <p class="text-white-50 mb-1 small">Unrealized P&L</p>
                            <h3 class="pnl-value mb-2" id="pnlValue">+$0.00</h3>
                            <div class="pnl-percent" id="pnlPercent">
                                <i class="mdi mdi-arrow-up-bold me-1"></i>
                                <span>+0.00%</span>
                            </div>
                            <div class="pnl-progress mt-3">
                                <div class="progress" style="height: 4px; background: rgba(255,255,255,0.1);">
                                    <div class="progress-bar bg-success" id="pnlProgress" role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trade Details Card -->
                    <div class="card trade-details-card mb-4">
                        <div class="card-header">
                            <h6 class="card-title mb-0">
                                <i class="mdi mdi-information-outline me-1"></i> Trade Details
                            </h6>
                        </div>
                        <div class="card-body p-0">
                            <ul class="trade-detail-list">
                                <li>
                                    <span class="detail-label">Plan</span>
                                    <span class="detail-value">{{ $plan->plan_name }}</span>
                                </li>
                                <li>
                                    <span class="detail-label">Amount</span>
                                    <span class="detail-value text-primary">${{ number_format($plan->amount, 2) }}</span>
                                </li>
                                <li>
                                    <span class="detail-label">Duration</span>
                                    <span class="detail-value">{{ $plan->plan_duration }}</span>
                                </li>
                                <li>
                                    <span class="detail-label">Opened</span>
                                    <span class="detail-value">{{ $plan->created_at->format('M d, H:i') }}</span>
                                </li>
                                <li>
                                    <span class="detail-label">Trade ID</span>
                                    <span class="detail-value text-white-50">#{{ $plan->transaction_id }}</span>
                                </li>
                                <li>
                                    <span class="detail-label">Status</span>
                                    <span class="detail-value">
                                        <span class="badge bg-success">Running</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="card quick-actions-card">
                        <div class="card-body">
                            <a href="{{ route('user.buy.plan') }}" class="btn btn-outline-primary w-100 mb-2 quick-btn">
                                <i class="mdi mdi-plus-circle-outline me-1"></i> Buy Another Plan
                            </a>
                            <a href="{{ url('user/investments') }}" class="btn btn-outline-info w-100 mb-2 quick-btn">
                                <i class="mdi mdi-history me-1"></i> Investment History
                            </a>
                            <a href="{{ route('user.home') }}" class="btn btn-outline-light w-100 quick-btn">
                                <i class="mdi mdi-view-dashboard-outline me-1"></i> Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Market Overview Row -->
            <div class="row mt-2">
              
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="mini-stat-icon bg-soft-warning me-3">
                                    <i class="mdi mdi-wallet text-warning"></i>
                                </div>
                                <div>
                                    <p class="mb-1 text-muted small">Your Balance</p>
                                    <h6 class="mb-0">${{ number_format($user_balance, 2) }}</h6>
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
    /* ========================================
       TRADE STATUS BANNER
    ======================================== */
    .trade-status-banner {
        background: linear-gradient(135deg, #1a1e2e 0%, #0d1117 50%, #161b22 100%);
        border: 1px solid rgba(56, 189, 248, 0.15);
        border-radius: 12px;
        padding: 24px 28px;
        position: relative;
        overflow: hidden;
    }

    .trade-status-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, #10b981, #38bdf8, transparent);
        animation: scanLine 3s linear infinite;
    }

    @keyframes scanLine {
        0% { opacity: 0.3; }
        50% { opacity: 1; }
        100% { opacity: 0.3; }
    }

    .live-indicator {
        display: flex;
        align-items: center;
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.3);
        border-radius: 20px;
        padding: 6px 14px;
    }

    .live-dot {
        width: 8px;
        height: 8px;
        background: #10b981;
        border-radius: 50%;
        margin-right: 8px;
        animation: livePulse 1.5s ease-in-out infinite;
        box-shadow: 0 0 8px rgba(16, 185, 129, 0.6);
    }

    @keyframes livePulse {
        0%, 100% { opacity: 1; transform: scale(1); box-shadow: 0 0 8px rgba(16,185,129,0.6); }
        50% { opacity: 0.5; transform: scale(0.8); box-shadow: 0 0 4px rgba(16,185,129,0.3); }
    }

    .live-text {
        font-size: 11px;
        font-weight: 700;
        color: #10b981;
        letter-spacing: 2px;
    }

    .trade-stat {
        padding: 0 12px;
        border-left: 1px solid rgba(255,255,255,0.1);
    }

    .text-white-50 {
        color: rgba(255,255,255,0.5) !important;
    }

    /* ========================================
       TRADING CHART CARD
    ======================================== */
    .trading-chart-card {
        background: #0d1117;
        border: 1px solid rgba(56, 189, 248, 0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    .trading-chart-header {
        background: linear-gradient(135deg, #161b22, #1a1e2e);
        border-bottom: 1px solid rgba(56, 189, 248, 0.1);
        padding: 14px 20px;
    }

    .chart-pair-badges {
        display: flex;
        gap: 6px;
    }

    .chart-pair {
        padding: 4px 12px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 600;
        color: rgba(255,255,255,0.5);
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.08);
        cursor: pointer;
        transition: all 0.25s ease;
        letter-spacing: 0.5px;
    }

    .chart-pair:hover {
        color: #38bdf8;
        border-color: rgba(56, 189, 248, 0.3);
        background: rgba(56, 189, 248, 0.08);
    }

    .chart-pair.active {
        color: #38bdf8;
        border-color: rgba(56, 189, 248, 0.4);
        background: rgba(56, 189, 248, 0.12);
        box-shadow: 0 0 12px rgba(56, 189, 248, 0.15);
    }

    .chart-live-tag {
        display: flex;
        align-items: center;
        font-size: 11px;
        color: rgba(255,255,255,0.4);
        letter-spacing: 0.5px;
    }

    .live-chart-dot {
        width: 6px;
        height: 6px;
        background: #10b981;
        border-radius: 50%;
        margin-right: 6px;
        animation: livePulse 1.5s ease-in-out infinite;
    }

    /* ========================================
       P&L CARD
    ======================================== */
    .pnl-card {
        background: linear-gradient(135deg, #0d1117 0%, #1a1e2e 100%);
        border: 1px solid rgba(16, 185, 129, 0.15);
        border-radius: 12px;
        overflow: hidden;
        position: relative;
    }

    .pnl-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, #10b981, transparent);
    }

    .pnl-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.2);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #10b981;
    }

    .pnl-value {
        font-size: 28px;
        font-weight: 700;
        color: #10b981;
        font-variant-numeric: tabular-nums;
        text-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
    }

    .pnl-percent {
        display: inline-flex;
        align-items: center;
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 6px;
        padding: 4px 10px;
        color: #10b981;
        font-size: 13px;
        font-weight: 600;
    }

    /* ========================================
       TRADE DETAILS CARD
    ======================================== */
    .trade-details-card {
        background: #0d1117;
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 12px;
    }

    .trade-details-card .card-header {
        background: rgba(255,255,255,0.03);
        border-bottom: 1px solid rgba(255,255,255,0.06);
        padding: 14px 18px;
        color: rgba(255,255,255,0.8);
    }

    .trade-detail-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .trade-detail-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 11px 18px;
        border-bottom: 1px solid rgba(255,255,255,0.04);
        transition: background 0.2s ease;
    }

    .trade-detail-list li:last-child {
        border-bottom: none;
    }

    .trade-detail-list li:hover {
        background: rgba(255,255,255,0.02);
    }

    .detail-label {
        color: rgba(255,255,255,0.45);
        font-size: 13px;
    }

    .detail-value {
        color: rgba(255,255,255,0.85);
        font-size: 13px;
        font-weight: 500;
    }

    /* ========================================
       QUICK ACTIONS
    ======================================== */
    .quick-actions-card {
        background: #0d1117;
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 12px;
    }

    .quick-btn {
        border-radius: 8px;
        padding: 10px 16px;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.25s ease;
    }

    .quick-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    /* ========================================
       MINI STAT CARDS
    ======================================== */
    .mini-stat-card {
        background: #0d1117;
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 10px;
        transition: all 0.25s ease;
    }

    .mini-stat-card:hover {
        border-color: rgba(56, 189, 248, 0.15);
        transform: translateY(-2px);
    }

    .mini-stat-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .bg-soft-success { background: rgba(16,185,129,0.1) !important; }
    .bg-soft-primary { background: rgba(67,97,238,0.1) !important; }
    .bg-soft-warning { background: rgba(245,158,11,0.1) !important; }
    .bg-soft-info { background: rgba(56,189,248,0.1) !important; }

    /* ========================================
       PULSE BADGE
    ======================================== */
    .pulse-badge {
        animation: badgePulse 2s ease-in-out infinite;
    }

    @keyframes badgePulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
        50% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    }

    /* ========================================
       RESPONSIVE
    ======================================== */
    @media (max-width: 768px) {
        .chart-pair-badges {
            display: none;
        }

        .trading-chart-header {
            flex-wrap: wrap;
            gap: 8px;
        }

        #tradingview-chart {
            height: 350px !important;
        }

        .pnl-value {
            font-size: 22px;
        }
    }
</style>

<!-- TradingView Widget Script -->
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script>
    // Initialize TradingView Chart
    let tvWidget;
    function initChart(symbol) {
        document.getElementById('tradingview-chart').innerHTML = '';
        tvWidget = new TradingView.widget({
            "autosize": true,
            "symbol": symbol || "BINANCE:BTCUSDT",
            "interval": "5",
            "timezone": "Etc/UTC",
            "theme": "light",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#0d1117",
            "enable_publishing": false,
            "hide_top_toolbar": false,
            "hide_legend": false,
            "save_image": false,
            "container_id": "tradingview-chart",
            "backgroundColor": "#0d1117",
            "gridColor": "rgba(255,255,255,0.03)",
            "hide_side_toolbar": true,
            "allow_symbol_change": true,
            "studies": [
                "MASimple@tv-basicstudies",
                "Volume@tv-basicstudies"
            ]
        });
    }

    function changeSymbol(el) {
        document.querySelectorAll('.chart-pair').forEach(p => p.classList.remove('active'));
        el.classList.add('active');
        initChart(el.getAttribute('data-symbol'));
    }

    // Init on load
    initChart();

    // ========================================
    // P&L TICKER SIMULATION
    // ========================================
    const investedAmount = {{ $plan->amount }};
    const startTime = new Date('{{ $plan->created_at->toISOString() }}');
    let currentPnL = 0;

    function updatePnL() {
        // Simulate small random profit fluctuations
        const elapsed = (Date.now() - startTime.getTime()) / 1000; // seconds
        const baseGrowth = investedAmount * 0.0001 * (elapsed / 60); // slow growth per minute
        const noise = (Math.random() - 0.35) * investedAmount * 0.0002; // slight upward bias
        currentPnL = Math.max(0, baseGrowth + noise);

        const pnlPercent = (currentPnL / investedAmount) * 100;

        document.getElementById('pnlValue').textContent = '+$' + currentPnL.toFixed(2);
        document.getElementById('pnlPercent').querySelector('span').textContent = '+' + pnlPercent.toFixed(4) + '%';

        // Update progress bar (max at 100%)
        const progress = Math.min(pnlPercent * 10, 100);
        document.getElementById('pnlProgress').style.width = progress + '%';
    }

    setInterval(updatePnL, 2000);
    updatePnL();

    // ========================================
    // TIME ELAPSED COUNTER
    // ========================================
    function updateTimeElapsed() {
        const now = new Date();
        const diff = Math.floor((now - startTime) / 1000);

        const hours = Math.floor(diff / 3600);
        const minutes = Math.floor((diff % 3600) / 60);
        const seconds = diff % 60;

        document.getElementById('timeElapsed').textContent =
            String(hours).padStart(2, '0') + ':' +
            String(minutes).padStart(2, '0') + ':' +
            String(seconds).padStart(2, '0');
    }

    setInterval(updateTimeElapsed, 1000);
    updateTimeElapsed();

    // ========================================
    // SIMULATED MARKET PRICES
    // ========================================
    function simulateMarketPrices() {
        // BTC price simulation
        const btcBase = 67500 + (Math.random() - 0.5) * 200;
        const btcChange = ((Math.random() - 0.4) * 2.5).toFixed(2);
        document.getElementById('btcPrice').textContent = '$' + btcBase.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
        const btcEl = document.getElementById('btcChange');
        btcEl.textContent = (btcChange >= 0 ? '+' : '') + btcChange + '%';
        btcEl.className = btcChange >= 0 ? 'badge bg-soft-success text-success' : 'badge bg-soft-danger text-danger';

        // ETH price simulation
        const ethBase = 3450 + (Math.random() - 0.5) * 50;
        const ethChange = ((Math.random() - 0.4) * 3).toFixed(2);
        document.getElementById('ethPrice').textContent = '$' + ethBase.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
        const ethEl = document.getElementById('ethChange');
        ethEl.textContent = (ethChange >= 0 ? '+' : '') + ethChange + '%';
        ethEl.className = ethChange >= 0 ? 'badge bg-soft-primary text-primary' : 'badge bg-soft-danger text-danger';
    }

    simulateMarketPrices();
    setInterval(simulateMarketPrices, 5000);
</script>

@include('user.footer')
