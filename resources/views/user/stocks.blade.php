@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Stock Market Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                <div>
                                    <h5 class="card-title mb-1">
                                        <i class="mdi mdi-robot-excited-outline me-2 text-primary"></i>
                                        AI Stock Market Analysis
                                    </h5>
                                    <p class="card-title-desc mb-0">Real-time AI-powered stock market insights and hotlists</p>
                                    <span class="badge bg-primary mt-1 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-brain me-1"></i> Neural Network Powered
                                    </span>
                                </div>
                                <div class="action-buttons mt-3 mt-md-0">
                                    <button type="button" class="btn btn-primary ai-button">
                                        <i class="mdi mdi-chart-line me-1"></i> Market Analysis
                                    </button>
                                    <button type="button" class="btn btn-outline-primary ms-2 ai-button">
                                        <i class="mdi mdi-trending-up me-1"></i> AI Signals
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Market Overview Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="wallet-icon me-3 ai-pulse">
                                    <i class="mdi mdi-chart-line text-success"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">S&P 500</h5>
                                    <small class="text-muted">AI Analysis</small>
                                </div>
                            </div>
                            <div class="wallet-balance">
                                <h3 class="text-primary mb-1">4,530.20</h3>
                                <p class="text-muted mb-0">+0.89% Today</p>
                                <div class="ai-trend mt-1">
                                    <i class="mdi mdi-trending-up text-success me-1"></i>
                                    <small class="text-success">AI Signal: Bullish</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="wallet-icon me-3 ai-pulse">
                                    <i class="mdi mdi-chart-bar text-info"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">NASDAQ</h5>
                                    <small class="text-muted">Tech Index</small>
                                </div>
                            </div>
                            <div class="wallet-balance">
                                <h3 class="text-primary mb-1">15,235.67</h3>
                                <p class="text-muted mb-0">+1.23% Today</p>
                                <div class="ai-trend mt-1">
                                    <i class="mdi mdi-rocket text-info me-1"></i>
                                    <small class="text-info">AI Signal: Strong Buy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="wallet-icon me-3 ai-pulse">
                                    <i class="mdi mdi-chart-areaspline text-warning"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">DOW JONES</h5>
                                    <small class="text-muted">Industrial Average</small>
                                </div>
                            </div>
                            <div class="wallet-balance">
                                <h3 class="text-primary mb-1">35,420.15</h3>
                                <p class="text-muted mb-0">+0.45% Today</p>
                                <div class="ai-trend mt-1">
                                    <i class="mdi mdi-trending-up text-success me-1"></i>
                                    <small class="text-success">AI Signal: Buy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="wallet-icon me-3">
                                    <i class="mdi mdi-robot text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">AI Accuracy</h5>
                                    <small class="text-muted">Stock Predictions</small>
                                </div>
                            </div>
                            <div class="wallet-balance">
                                <h3 class="text-primary mb-1">84.7%</h3>
                                <p class="text-muted mb-0">Last 30 Days</p>
                                <div class="ai-trend mt-1">
                                    <i class="mdi mdi-shield-check text-success me-1"></i>
                                    <small class="text-success">AI Performance: Excellent</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Market Hotlist Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-trending-up me-2 text-primary"></i>
                                AI Stock Market Hotlist
                            </h4>
                            <p class="card-title-desc">Real-time AI-powered stock market analysis and trending stocks</p>
                        </div>
                        <div class="card-body">
                            <!-- TradingView Widget -->
                            <div class="tradingview-widget-container ai-chart-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright">
                                    <a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank">
                                        <span class="blue-text">Stock Market Today</span>
                                    </a> by TradingView
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
                                                    <span class="text-muted">Bullish Stocks</span>
                                                    <span class="text-success">68%</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Market Volatility</span>
                                                    <span class="text-warning">Low</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">AI Confidence</span>
                                                    <span class="text-info">92%</span>
                                                </div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ai-recommendation text-center p-3 bg-light rounded">
                                                    <i class="mdi mdi-robot text-primary me-2"></i>
                                                    <strong>AI Recommendation:</strong> 
                                                    <span class="text-success">Focus on Tech Sector</span>
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
                                                    <h5 class="mb-0">Top AI Picks</h5>
                                                    <small class="text-muted">AI Recommended Stocks</small>
                                                </div>
                                            </div>
                                            <div class="top-picks">
                                                <div class="stock-pick mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <strong class="text-primary">AAPL</strong>
                                                            <small class="text-muted d-block">Apple Inc.</small>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="text-success">+2.3%</span>
                                                            <div class="ai-trend">
                                                                <small class="text-success">AI: Strong Buy</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stock-pick mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <strong class="text-primary">MSFT</strong>
                                                            <small class="text-muted d-block">Microsoft Corp.</small>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="text-success">+1.8%</span>
                                                            <div class="ai-trend">
                                                                <small class="text-success">AI: Buy</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stock-pick mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <strong class="text-primary">TSLA</strong>
                                                            <small class="text-muted d-block">Tesla Inc.</small>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="text-danger">-0.5%</span>
                                                            <div class="ai-trend">
                                                                <small class="text-warning">AI: Hold</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stock-pick">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <strong class="text-primary">NVDA</strong>
                                                            <small class="text-muted d-block">NVIDIA Corp.</small>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="text-success">+3.2%</span>
                                                            <div class="ai-trend">
                                                                <small class="text-success">AI: Strong Buy</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button class="btn btn-primary ai-button w-100">
                                                    <i class="mdi mdi-robot me-1"></i> View All AI Recommendations
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
        <h6 class="mb-0">AI Stock Analyst</h6>
    </div>
    <div class="ai-message">
        <p>Hello! I'm analyzing current market conditions. AI signals show strong momentum in tech stocks with particular strength in semiconductor and AI-related companies. Would you like me to generate specific trading recommendations?</p>
    </div>
    <div class="progress-bar">
        <div class="progress-fill"></div>
    </div>
    <p class="small text-muted mb-0">AI analyzing market patterns...</p>
</div>

<!-- TradingView Widget Script -->
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
{
  "colorTheme": "light",
  "dateRange": "12M",
  "exchange": "US",
  "showChart": true,
  "locale": "en",
  "width": "100%",
  "height": "500",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": false,
  "showFloatingTooltip": false,
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(42, 46, 57, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
}
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

    /* Trading Chart Styling */
    .ai-chart-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Stock Picks Styling */
    .stock-pick {
        padding: 12px;
        border-radius: 8px;
        background: #f8f9fa;
        transition: all 0.3s ease;
    }

    .stock-pick:hover {
        background: rgba(67, 97, 238, 0.05);
        transform: translateX(5px);
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

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .ai-chat {
            width: 280px;
            right: 15px;
        }
        
        .tradingview-widget-container__widget {
            height: 400px !important;
        }
    }

    @media (max-width: 576px) {
        .tradingview-widget-container__widget {
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

        // Simulate real-time market updates
        setInterval(function() {
            console.log("AI Market Analytics Updated");
            
            // Update some random numbers for demo
            const sp500Element = document.querySelector('.wallet-balance h3');
            if (sp500Element && sp500Element.textContent.includes('4,530')) {
                const currentValue = parseFloat(sp500Element.textContent.replace(',', ''));
                const randomChange = (Math.random() * 0.02) - 0.01; // -1% to +1%
                const newValue = currentValue * (1 + randomChange);
                sp500Element.textContent = newValue.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
                
                // Update the percentage
                const percentElement = sp500Element.parentElement.querySelector('.text-muted');
                if (percentElement) {
                    const sign = randomChange > 0 ? '+' : '';
                    percentElement.textContent = `${sign}${(randomChange * 100).toFixed(2)}% Today`;
                }
            }
        }, 8000);
    });
</script>

@include('user.footer')