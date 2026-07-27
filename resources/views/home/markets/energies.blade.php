@include('home.header')

<!-- Hero Section -->
<section class="hero-slider" style="min-height: 400px; padding: 120px 0 60px;">
    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1582210183181-4351336a11cb?q=80&w=1920&auto=format&fit=crop'); padding: 0; min-height: 400px;">
        <div class="hero-float-shape shape-1"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-12 text-center text-md-start">
                    <h1 class="slide-h1">Trade <span class="gradient-text">Energies</span></h1>
                    <p class="slide-subtitle mx-auto mx-md-0">Diversify your portfolio with commodities like Crude Oil and Natural Gas. Leverage global supply and demand dynamics.</p>
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
                <span class="section-label"><i class="fas fa-gas-pump"></i> Energy Commodities</span>
                <h2 class="section-title text-start mt-3">Power Your Portfolio</h2>
                <p class="text-muted-custom mt-4 mb-4">
                    The energy sector is known for strong trends and high volatility. Trade WTI Crude, Brent, and Natural Gas on our powerful platform to capitalize on global economic shifts.
                </p>
                <ul class="features-list mb-4">
                    <li><i class="fas fa-check text-primary me-2"></i> Hedge Against Inflation</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Low Margin Requirements</li>
                    <li><i class="fas fa-check text-primary me-2"></i> High Market Volatility</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom w-100"><i class="fas fa-rocket"></i> Start Trading Energies</a>
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
                                    "name": "Energy Markets",
                                    "originalName": "Energies",
                                    "symbols": [
                                        {"name": "OANDA:WTICOUSD", "displayName": "WTI Crude Oil"},
                                        {"name": "OANDA:BCOUSD", "displayName": "Brent Crude Oil"},
                                        {"name": "OANDA:NATGASUSD", "displayName": "Natural Gas"},
                                        {"name": "OANDA:XAUUSD", "displayName": "Gold (Precious Metal)"},
                                        {"name": "OANDA:XAGUSD", "displayName": "Silver (Precious Metal)"}
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
