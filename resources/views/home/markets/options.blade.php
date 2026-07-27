@include('home.header')

<!-- Hero Section -->
<section class="hero-slider" style="min-height: 400px; padding: 120px 0 60px;">
    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1640161704729-cbe966a08476?q=80&w=1920&auto=format&fit=crop'); padding: 0; min-height: 400px;">
        <div class="hero-float-shape shape-3"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-12 text-center text-md-start">
                    <h1 class="slide-h1">Trade <span class="gradient-text">Options</span></h1>
                    <p class="slide-subtitle mx-auto mx-md-0">Take control of market volatility. Use advanced options strategies to hedge risk or magnify returns.</p>
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
                <span class="section-label"><i class="fas fa-sliders-h"></i> Derivatives Market</span>
                <h2 class="section-title text-start mt-3">Strategic Flexibility</h2>
                <p class="text-muted-custom mt-4 mb-4">
                    Options trading gives you the flexibility to profit in any market condition—whether it's going up, down, or sideways. Access a wide range of underlying assets including equities, indices, and forex.
                </p>
                <ul class="features-list mb-4">
                    <li><i class="fas fa-check text-primary me-2"></i> Advanced Strategies (Straddles, Spreads)</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Defined Risk Trading</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Leverage Market Volatility</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom w-100"><i class="fas fa-rocket"></i> Start Trading Options</a>
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
                                    "name": "Volatility & Futures",
                                    "originalName": "Options",
                                    "symbols": [
                                        {"name": "CBOE:VIX", "displayName": "Volatility S&P 500 Index"},
                                        {"name": "CME_MINI:ES1!", "displayName": "S&P 500 Futures"},
                                        {"name": "CME_MINI:NQ1!", "displayName": "Nasdaq 100 Futures"},
                                        {"name": "COMEX:GC1!", "displayName": "Gold Futures"},
                                        {"name": "NYMEX:CL1!", "displayName": "Crude Oil Futures"}
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
