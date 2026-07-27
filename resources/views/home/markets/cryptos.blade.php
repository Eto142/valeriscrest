@include('home.header')

<!-- Hero Section -->
<section class="hero-slider" style="min-height: 400px; padding: 120px 0 60px;">
    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1621504450181-5d356f61d307?q=80&w=1920&auto=format&fit=crop'); padding: 0; min-height: 400px;">
        <div class="hero-float-shape shape-1"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-12 text-center text-md-start">
                    <h1 class="slide-h1">Trade <span class="gradient-text">Cryptocurrencies</span></h1>
                    <p class="slide-subtitle mx-auto mx-md-0">Access the fastest growing market in the world. Trade Bitcoin, Ethereum, Solana, and more with 24/7 AI-driven execution.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content & Widget -->
<section class="section section-dark">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <span class="section-label"><i class="fab fa-bitcoin"></i> Crypto Assets</span>
                <h2 class="section-title text-start mt-3">Next-Gen Crypto Trading</h2>
                <p class="text-muted-custom mt-4 mb-4">
                    The cryptocurrency market never sleeps, and neither does our AI. Take advantage of ultra-low spreads, high leverage, and instant execution. Whether you are holding for the long term or day-trading volatility, our platform provides all the tools you need.
                </p>
                <ul class="features-list mb-4">
                    <li><i class="fas fa-check text-primary me-2"></i> 24/7 Market Access</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Zero Hidden Fees</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Instant Deposit & Withdrawal</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom w-100"><i class="fas fa-rocket"></i> Start Trading Crypto</a>
            </div>
            <div class="col-lg-8">
                <div class="hero-widget-wrap" style="padding: 0; height: 500px;">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget" style="height: 500px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                        {
                            "width": "100%",
                            "height": "500",
                            "symbolsGroups": [
                                {
                                    "name": "Cryptocurrencies",
                                    "originalName": "Crypto",
                                    "symbols": [
                                        {"name": "CRYPTO:BTCUSD", "displayName": "Bitcoin"},
                                        {"name": "CRYPTO:ETHUSD", "displayName": "Ethereum"},
                                        {"name": "CRYPTO:SOLUSD", "displayName": "Solana"},
                                        {"name": "CRYPTO:BNBUSD", "displayName": "Binance Coin"},
                                        {"name": "CRYPTO:XRPUSD", "displayName": "XRP"},
                                        {"name": "CRYPTO:ADAUSD", "displayName": "Cardano"}
                                    ]
                                }
                            ],
                            "showSymbolLogo": true,
                            "isTransparent": true,
                            "colorTheme": "dark",
                            "locale": "en"
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.footer')
