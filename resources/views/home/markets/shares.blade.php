@include('home.header')

<!-- Hero Section -->
<section class="hero-slider" style="min-height: 400px; padding: 120px 0 60px;">
    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=1920&auto=format&fit=crop'); padding: 0; min-height: 400px;">
        <div class="hero-float-shape shape-2"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-12 text-center text-md-start">
                    <h1 class="slide-h1">Trade <span class="gradient-text">Shares</span></h1>
                    <p class="slide-subtitle mx-auto mx-md-0">Invest in the world's leading companies. Trade stocks like Apple, Tesla, and Amazon with zero commission.</p>
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
                <span class="section-label"><i class="fas fa-building"></i> Stock Market</span>
                <h2 class="section-title text-start mt-3">Own a Piece of the Action</h2>
                <p class="text-muted-custom mt-4 mb-4">
                    Trade CFDs on thousands of global equities. Capitalize on earnings reports, product launches, and market news with instant execution and advanced charting tools.
                </p>
                <ul class="features-list mb-4">
                    <li><i class="fas fa-check text-primary me-2"></i> Thousands of Global Stocks</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Trade on Margin</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Earn Dividend Adjustments</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom w-100"><i class="fas fa-rocket"></i> Start Trading Shares</a>
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
                                    "name": "Top Tech Stocks",
                                    "originalName": "Shares",
                                    "symbols": [
                                        {"name": "NASDAQ:AAPL", "displayName": "Apple Inc."},
                                        {"name": "NASDAQ:TSLA", "displayName": "Tesla Inc."},
                                        {"name": "NASDAQ:MSFT", "displayName": "Microsoft Corp."},
                                        {"name": "NASDAQ:NVDA", "displayName": "NVIDIA Corp."},
                                        {"name": "NASDAQ:AMZN", "displayName": "Amazon.com Inc."},
                                        {"name": "NASDAQ:GOOGL", "displayName": "Alphabet Inc."}
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
