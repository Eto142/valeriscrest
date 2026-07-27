@include('home.header')





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Trading | Swift Meta Trade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #52afee;
            --secondary: #f58634;
            --dark-bg: #02021c;
            --darker-bg: #010113;
            --text-light: #f8f9fa;
            --text-muted: #adb5bd;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Raleway', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-light);
            overflow-x: hidden;
            line-height: 1.6;
        }
        
        /* Trade Hero Section */
        .trade-hero {
            background: linear-gradient(rgba(2, 2, 28, 0.9), rgba(2, 2, 28, 0.8)), url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding: 150px 0 100px;
            text-align: center;
        }
        
        .trade-main-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .trade-subtitle {
            font-size: 1.3rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Section Styling */
        .section {
            padding: 80px 0;
        }
        
        .section-dark {
            background-color: var(--darker-bg);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 50px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Trading Widgets */
        .tradingview-widget-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
        }
        
        /* Trading Platforms */
        .platform-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 30px;
        }
        
        .platform-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .platform-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), #2a6b9c);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
        }
        
        .platform-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        .btn-primary-custom {
            background-color: var(--primary);
            border-color: var(--primary);
            color: var(--dark-bg);
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            background-color: #3a9bd5;
            border-color: #3a9bd5;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(82, 175, 238, 0.3);
        }
        
        /* Market Stats */
        .market-stats {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: var(--text-muted);
            font-size: 1rem;
        }
        
        /* Trading Features */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .feature-item {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }
        
        .feature-item:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .feature-icon {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .trade-main-title {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Trade Hero Section -->
    <section class="trade-hero">
        <div class="container">
            <h1 class="trade-main-title">Live Trading</h1>
            <p class="trade-subtitle">
                Access real-time market data and advanced trading tools to maximize your investment potential
            </p>
        </div>
    </section>

    <!-- Live Market Data -->
    <section class="section">
        <div class="container">
            <!-- Ticker Tape -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        },
                        {
                            "proName": "BINANCE:ADAUSD",
                            "title": "ADA/USD"
                        },
                        {
                            "proName": "BINANCE:DOTUSD",
                            "title": "DOT/USD"
                        },
                        {
                            "proName": "BINANCE:LTCUSD",
                            "title": "LTC/USD"
                        }
                    ],
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
                </script>
            </div>

            <!-- Market Overview -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                    "colorTheme": "dark",
                    "dateRange": "12M",
                    "showChart": true,
                    "locale": "en",
                    "width": "100%",
                    "height": "500",
                    "largeChartUrl": "",
                    "isTransparent": true,
                    "plotLineColorGrowing": "rgba(82, 175, 238, 1)",
                    "plotLineColorFalling": "rgba(82, 175, 238, 1)",
                    "gridLineColor": "rgba(42, 46, 57, 1)",
                    "scaleFontColor": "rgba(120, 123, 134, 1)",
                    "belowLineFillColorGrowing": "rgba(82, 175, 238, 0.12)",
                    "belowLineFillColorFalling": "rgba(82, 175, 238, 0.12)",
                    "symbolActiveColor": "rgba(82, 175, 238, 0.12)",
                    "tabs": [
                        {
                            "title": "Indices",
                            "symbols": [
                                {
                                    "s": "OANDA:SPX500USD",
                                    "d": "S&P 500"
                                },
                                {
                                    "s": "OANDA:NAS100USD",
                                    "d": "Nasdaq 100"
                                },
                                {
                                    "s": "FOREXCOM:DJI",
                                    "d": "Dow 30"
                                },
                                {
                                    "s": "INDEX:NKY",
                                    "d": "Nikkei 225"
                                },
                                {
                                    "s": "INDEX:DEU30",
                                    "d": "DAX Index"
                                },
                                {
                                    "s": "OANDA:UK100GBP",
                                    "d": "FTSE 100"
                                }
                            ]
                        },
                        {
                            "title": "Commodities",
                            "symbols": [
                                {
                                    "s": "CME_MINI:ES1!",
                                    "d": "E-Mini S&P"
                                },
                                {
                                    "s": "CME:6E1!",
                                    "d": "Euro"
                                },
                                {
                                    "s": "COMEX:GC1!",
                                    "d": "Gold"
                                },
                                {
                                    "s": "NYMEX:CL1!",
                                    "d": "Crude Oil"
                                },
                                {
                                    "s": "NYMEX:NG1!",
                                    "d": "Natural Gas"
                                },
                                {
                                    "s": "CBOT:ZC1!",
                                    "d": "Corn"
                                }
                            ]
                        },
                        {
                            "title": "Forex",
                            "symbols": [
                                {
                                    "s": "FX:EURUSD"
                                },
                                {
                                    "s": "FX:GBPUSD"
                                },
                                {
                                    "s": "FX:USDJPY"
                                },
                                {
                                    "s": "FX:USDCHF"
                                },
                                {
                                    "s": "FX:AUDUSD"
                                },
                                {
                                    "s": "FX:USDCAD"
                                }
                            ]
                        }
                    ]
                }
                </script>
            </div>
        </div>
    </section>

    <!-- Advanced Trading Charts -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">Advanced Trading Charts</h2>
            <p class="section-subtitle">Real-time charts with professional technical analysis tools</p>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="tradingview-widget-container" style="height: 400px;">
                        <div id="tradingview_crypto"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "BINANCE:BTCUSDT",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_top_toolbar": false,
                            "hide_legend": false,
                            "save_image": false,
                            "container_id": "tradingview_crypto"
                        }
                        );
                        </script>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="tradingview-widget-container" style="height: 400px;">
                        <div id="tradingview_forex"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "FX:EURUSD",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_top_toolbar": false,
                            "hide_legend": false,
                            "save_image": false,
                            "container_id": "tradingview_forex"
                        }
                        );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Platforms -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Multi-Platform Trading</h2>
            <p class="section-subtitle">Trade anywhere, anytime with our advanced trading platforms</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h3 class="platform-title">Web Platform</h3>
                        <p class="text-muted">Advanced web-based trading platform with real-time charts and analysis tools.</p>
                        <a href="#" class="btn btn-primary-custom mt-3">Start Trading</a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="platform-title">Mobile App</h3>
                        <p class="text-muted">Trade on the go with our feature-rich mobile application for iOS and Android.</p>
                        <a href="#" class="btn btn-primary-custom mt-3">Download App</a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3 class="platform-title">Desktop</h3>
                        <p class="text-muted">Powerful desktop application with advanced features for professional traders.</p>
                        <a href="#" class="btn btn-primary-custom mt-3">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Statistics -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">Market Statistics</h2>
            <div class="market-stats">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">Trading Instruments</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Market Access</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">&lt;50ms</div>
                            <div class="stat-label">Execution Speed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">99.9%</div>
                            <div class="stat-label">Platform Uptime</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Trading Features -->
            <div class="feature-grid">
                <div class="feature-item">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h4>Advanced Charts</h4>
                    <p class="text-muted">Professional charting tools with multiple timeframes</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-bolt feature-icon"></i>
                    <h4>Fast Execution</h4>
                    <p class="text-muted">Ultra-fast trade execution with minimal slippage</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h4>Secure Platform</h4>
                    <p class="text-muted">Bank-level security for your funds and data</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-hand-holding-usd feature-icon"></i>
                    <h4>Leverage Trading</h4>
                    <p class="text-muted">Access to high leverage for amplified returns</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Trading CTA -->
    <section class="section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Ready to Start Trading?</h2>
                <p class="section-subtitle">Join thousands of successful traders today</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary-custom me-3" style="padding: 15px 40px; font-size: 1.2rem;">
                        <i class="fas fa-user-plus me-2"></i>Open Account
                    </a>
                    <a href="#" class="btn btn-outline-light" style="padding: 15px 40px; font-size: 1.2rem;">
                        <i class="fas fa-chart-line me-2"></i>Demo Account
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('home.footer')