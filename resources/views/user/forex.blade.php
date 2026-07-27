@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Trading Dashboard Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                <div>
                                    <h5 class="card-title mb-1">
                                        <i class="mdi mdi-robot-excited-outline me-2 text-primary"></i>
                                        AI Trading Dashboard
                                    </h5>
                                    <p class="card-title-desc mb-0">Smart trading with real-time AI market analysis</p>
                                    <span class="badge bg-primary mt-1 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-brain me-1"></i> Neural Network Powered
                                    </span>
                                </div>
                                <div class="action-buttons mt-3 mt-md-0">
                                    <button type="button" class="btn btn-primary ai-button">
                                        <i class="mdi mdi-arrow-down me-1"></i> AI Deposit
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#pass" class="btn btn-outline-primary ms-2 ai-button">
                                        <i class="mdi mdi-arrow-up me-1"></i> Smart Withdraw
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trading Chart Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-chart-areaspline me-2 text-primary"></i>
                                AI Market Analysis
                            </h4>
                            <p class="card-title-desc">Real-time AI-powered market analysis and predictions</p>
                        </div>
                        <div class="card-body">
                            <!-- TradingView Widget -->
                            <div class="tradingview-widget-container ai-chart-container">
                                <div id="tradingview_d31a6" class="tradingview-chart"></div>
                                <div class="tradingview-widget-copyright">
                                    <a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"></a>
                                </div>
                            </div>

                            <!-- AI Analysis Panel -->
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="card wallet-card h-100 ai-wallet-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-brain text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">AI Market Sentiment</h5>
                                                    <small class="text-muted">Neural Network Analysis</small>
                                                </div>
                                            </div>
                                            <div class="ai-analysis-content">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Bullish Confidence</span>
                                                    <span class="text-success">78%</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Market Volatility</span>
                                                    <span class="text-warning">Medium</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ai-trend">
                                                    <i class="mdi mdi-robot text-primary me-1"></i>
                                                    <small class="text-primary">AI Recommendation: Hold Position</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card wallet-card h-100 ai-wallet-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-lightning-bolt text-warning"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Quick Actions</h5>
                                                    <small class="text-muted">AI Trading Tools</small>
                                                </div>
                                            </div>
                                            <div class="quick-actions">
                                                <div class="row g-2">
                                                    <div class="col-6">
                                                        <button class="btn btn-outline-primary ai-action-btn w-100">
                                                            <i class="mdi mdi-arrow-up me-1"></i> Buy
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-outline-danger ai-action-btn w-100">
                                                            <i class="mdi mdi-arrow-down me-1"></i> Sell
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-outline-info ai-action-btn w-100">
                                                            <i class="mdi mdi-swap-horizontal me-1"></i> Swap
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-outline-success ai-action-btn w-100">
                                                            <i class="mdi mdi-chart-histogram me-1"></i> Analyze
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary ai-button w-100">
                                                        <i class="mdi mdi-robot me-1"></i> Auto Trade
                                                    </button>
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

           
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- TradingView Widget Script -->
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
new TradingView.widget(
{
    "width": "100%",
    "height": "500",
    "symbol": "NASDAQ:AAPL",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_d31a6"
}
);
</script>

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

    /* Trading Chart Styling */
    .ai-chart-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .tradingview-chart {
        border-radius: 12px;
    }

    /* Table Styling */
    .table {
        margin-bottom: 0;
    }

    .table th {
        border-top: none;
        font-weight: 600;
        color: #495057;
        background-color: #f8f9fa;
    }

    .table td {
        vertical-align: middle;
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

    /* Quick Actions */
    .quick-actions .btn {
        margin-bottom: 8px;
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
        
        .tradingview-chart {
            height: 400px !important;
        }
    }

    @media (max-width: 576px) {
        .tradingview-chart {
            height: 350px !important;
        }
        
        .action-buttons {
            width: 100%;
        }
        
        .action-buttons .btn {
            width: 48%;
        }
    }
</style>

<script>
    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    document.addEventListener('DOMContentLoaded', function() {
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

        // Simulate real-time trading updates
        setInterval(function() {
            console.log("AI Trading Analytics Updated");
            
            // Update some random numbers for demo
            const portfolioValue = document.querySelector('.wallet-balance h3');
            if (portfolioValue) {
                const currentValue = parseFloat(portfolioValue.textContent.replace('$', '').replace(',', ''));
                const randomChange = (Math.random() * 0.02) - 0.01; // -1% to +1%
                const newValue = currentValue * (1 + randomChange);
                portfolioValue.textContent = '$' + newValue.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            }
        }, 10000);
    });
</script>

@include('user.footer')