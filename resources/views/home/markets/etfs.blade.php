@include('home.header')

<!-- Hero Section -->
<section class="hero-slider" style="min-height: 400px; padding: 120px 0 60px;">
    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=1920&auto=format&fit=crop'); padding: 0; min-height: 400px;">
        <div class="hero-float-shape shape-1"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-12 text-center text-md-start">
                    <h1 class="slide-h1">Trade <span class="gradient-text">ETFs</span></h1>
                    <p class="slide-subtitle mx-auto mx-md-0">Exchange Traded Funds offer a convenient way to invest in entire sectors, commodities, or bonds with a single trade.</p>
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
                <span class="section-label"><i class="fas fa-layer-group"></i> Exchange Traded Funds</span>
                <h2 class="section-title text-start mt-3">Diversified Portfolios</h2>
                <p class="text-muted-custom mt-4 mb-4">
                    ETFs combine the diversification of mutual funds with the flexibility of stocks. Track popular sectors, precious metals, or emerging markets instantly without the need to select individual assets.
                </p>
                <ul class="features-list mb-4">
                    <li><i class="fas fa-check text-primary me-2"></i> Low Cost Diversification</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Sector-Specific Exposure</li>
                    <li><i class="fas fa-check text-primary me-2"></i> High Liquidity</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom w-100"><i class="fas fa-rocket"></i> Start Trading ETFs</a>
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
                                    "name": "Popular ETFs",
                                    "originalName": "ETFs",
                                    "symbols": [
                                        {"name": "AMEX:SPY", "displayName": "SPDR S&P 500 ETF"},
                                        {"name": "NASDAQ:QQQ", "displayName": "Invesco QQQ Trust"},
                                        {"name": "AMEX:GLD", "displayName": "SPDR Gold Shares"},
                                        {"name": "AMEX:USO", "displayName": "United States Oil Fund"},
                                        {"name": "AMEX:ARKK", "displayName": "ARK Innovation ETF"},
                                        {"name": "AMEX:XLF", "displayName": "Financial Select Sector SPDR"}
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
