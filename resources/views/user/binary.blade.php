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
                                AI Market Analysis - EUR/USD
                            </h4>
                            <p class="card-title-desc">Real-time AI-powered Forex market analysis and predictions</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- TradingView Widget -->
                                <div class="col-xl-8">
                                    <div class="tradingview-widget-container ai-chart-container">
                                        <div id="tradingview_b4b8d" class="tradingview-chart"></div>
                                        <div class="tradingview-widget-copyright">
                                            <a href="https://www.tradingview.com/symbols/EURUSD/?exchange=FX" rel="noopener" target="_blank">
                                                <span class="blue-text">EURUSD Chart</span>
                                            </a> by TradingView
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Trading Controls -->
                                <div class="col-xl-4">
                                    <div class="card wallet-card h-100 ai-wallet-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-currency-eur text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">EUR/USD</h5>
                                                    <small class="text-muted">Forex Pair</small>
                                                </div>
                                            </div>
                                            
                                            <!-- Current Price -->
                                            <div class="current-price mb-4 text-center">
                                                <h2 class="text-primary mb-1">1.0854</h2>
                                                <p class="text-muted mb-0">Current Price</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-trending-up text-success me-1"></i>
                                                    <small class="text-success">+0.23% Today</small>
                                                </div>
                                            </div>
                                            
                                            <!-- AI Analysis -->
                                            <div class="ai-analysis mb-4">
                                                <h6 class="text-muted mb-3">AI Market Sentiment</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Bullish Confidence</span>
                                                    <span class="text-success">72%</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Volatility</span>
                                                    <span class="text-warning">Medium</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ai-recommendation text-center p-3 bg-light rounded">
                                                    <i class="mdi mdi-robot text-primary me-2"></i>
                                                    <strong>AI Recommendation:</strong> 
                                                    <span class="text-success">Hold Position</span>
                                                </div>
                                            </div>
                                            
                                            <!-- Quick Actions -->
                                            <div class="quick-actions">
                                                <h6 class="text-muted mb-3">Quick Actions</h6>
                                                <div class="row g-2 mb-3">
                                                    <div class="col-6">
                                                        <button class="btn btn-outline-success ai-action-btn w-100">
                                                            <i class="mdi mdi-arrow-up me-1"></i> Buy
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-outline-danger ai-action-btn w-100">
                                                            <i class="mdi mdi-arrow-down me-1"></i> Sell
                                                        </button>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary ai-button w-100">
                                                    <i class="mdi mdi-robot me-1"></i> AI Auto Trade
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Market Data -->
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="card wallet-card h-100 ai-wallet-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-trending-up text-success"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Support Level</h5>
                                                    <small class="text-muted">AI Calculated</small>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h3 class="text-success mb-1">1.0820</h3>
                                                <p class="text-muted mb-0">Strong Support</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card wallet-card h-100 ai-wallet-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-trending-down text-danger"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Resistance Level</h5>
                                                    <small class="text-muted">AI Calculated</small>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h3 class="text-danger mb-1">1.0890</h3>
                                                <p class="text-muted mb-0">Key Resistance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card wallet-card h-100 ai-wallet-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-gauge text-info"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Market Volatility</h5>
                                                    <small class="text-muted">AI Analysis</small>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h3 class="text-info mb-1">Medium</h3>
                                                <p class="text-muted mb-0">Stable Conditions</p>
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

<!-- AI Assistant -->
<div class="ai-assistant" id="aiAssistant">
    <i class="mdi mdi-robot"></i>
</div>

<div class="ai-chat" id="aiChat">
    <div class="ai-chat-header">
        <i class="mdi mdi-robot text-primary me-2"></i>
        <h6 class="mb-0">AI Trading Assistant</h6>
    </div>
    <div class="ai-message">
        <p>Hello! I'm analyzing EUR/USD market conditions. Current AI signals show moderate bullish momentum with key resistance at 1.0890. Would you like me to execute any trades?</p>
    </div>
    <div class="progress-bar">
        <div class="progress-fill"></div>
    </div>
    <p class="small text-muted mb-0">AI analyzing market patterns...</p>
</div>

<!-- TradingView Widget Script -->
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
new TradingView.widget(
{
    "width": "100%",
    "height": "500",
    "symbol": "FX:EURUSD",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "withdateranges": true,
    "hide_side_toolbar": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_b4b8d"
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
        height: 500px;
    }

    .tradingview-chart {
        border-radius: 12px;
        width: 100%;
        height: 100%;
    }

    /* Current Price Styling */
    .current-price h2 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .ai-recommendation {
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
        
        .ai-chart-container {
            height: 400px;
        }
    }

    @media (max-width: 576px) {
        .tradingview-chart {
            height: 350px !important;
        }
        
        .ai-chart-container {
            height: 350px;
        }
        
        .action-buttons {
            width: 100%;
        }
        
        .action-buttons .btn {
            width: 48%;
        }
        
        .current-price h2 {
            font-size: 2rem;
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

        // Simulate real-time price updates
        setInterval(function() {
            const priceElement = document.querySelector('.current-price h2');
            if (priceElement) {
                const currentPrice = parseFloat(priceElement.textContent);
                const randomChange = (Math.random() * 0.001) - 0.0005; // Small random change
                const newPrice = currentPrice * (1 + randomChange);
                priceElement.textContent = newPrice.toFixed(4);
                
                // Update trend indicator
                const trendElement = document.querySelector('.ai-trend');
                if (randomChange > 0) {
                    trendElement.innerHTML = '<i class="mdi mdi-trending-up text-success me-1"></i><small class="text-success">+' + (randomChange * 100).toFixed(2) + '% Today</small>';
                } else {
                    trendElement.innerHTML = '<i class="mdi mdi-trending-down text-danger me-1"></i><small class="text-danger">' + (randomChange * 100).toFixed(2) + '% Today</small>';
                }
            }
        }, 3000);
    });
</script>

@include('user.footer')