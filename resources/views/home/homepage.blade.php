@include('home.header')

    {{-- =========================================================
         TICKER TAPE
         ========================================================= --}}
    {{-- <div class="top-ticker-tape">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                    {"proName":"TVC:USOIL","title":"Crude Oil"},
                    {"proName":"TVC:SILVER","title":"Silver"},
                    {"proName":"CRYPTO:SOLUSD","title":"Solana"},
                    {"proName":"CRYPTO:BNBUSD","title":"BNB"},
                    {"proName":"FOREXCOM:SPXUSD","title":"S&P 500"},
                    {"proName":"NASDAQ:NVDA","title":"NVIDIA"},
                    {"proName":"NASDAQ:AAPL","title":"Apple"},
                    {"proName":"FX:EURUSD","title":"EUR/USD"},
                    {"proName":"FX:GBPUSD","title":"GBP/USD"},
                    {"proName":"TVC:GOLD","title":"Gold"}
                ],
                "showSymbolLogo": true,
                "isTransparent": true,
                "displayMode": "adaptive",
                "colorTheme": "dark",
                "locale": "en"
            }
            </script>
        </div>
    </div> --}}

    {{-- =========================================================
         HERO SLIDER
         ========================================================= --}}
    <section class="hero-slider">

        {{-- Slide 1 --}}
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1920&auto=format&fit=crop')">
            <div class="hero-float-shape shape-1"></div>
            <div class="hero-float-shape shape-2"></div>
            <div class="hero-float-shape shape-3"></div>
            <div class="container">
                <div class="row align-items-center gy-5 slider-content">
                    <div class="col-lg-6">
                        {{-- <div class="live-badge"><span class="live-dot"></span> Markets Live Now</div> --}}
                        <h1 class="slide-h1">Precision Trading.<br><span class="gradient-text">Expert Results.</span></h1>
                        <p class="slide-subtitle">Our team of seasoned market professionals manage your portfolio with disciplined strategies, rigorous analysis, and a proven track record across global markets.</p>
                        <div class="hero-btns">
                            <a href="{{ route('login') }}" class="btn btn-primary-custom"><i class="fas fa-sign-in-alt"></i> Login to Account</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light-custom"><i class="fas fa-rocket"></i> Start Investing</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Real-Time Market Intelligence</li>
                            <li><i class="fas fa-check"></i> Professional Trading Strategies</li>
                            <li><i class="fas fa-check"></i> 24/7 Portfolio Monitoring</li>
                        </ul>
                        <div class="security-badges">
                            <span class="security-badge"><i class="fas fa-shield-alt"></i> SSL Secured</span>
                            <span class="security-badge"><i class="fas fa-lock"></i> Funds Protected</span>
                            <span class="security-badge"><i class="fas fa-award"></i> Regulated Platform</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-widget-wrap">
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget" style="height:420px;"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {"colorTheme":"dark","dateRange":"12M","showChart":true,"locale":"en","width":"100%","height":"100%","isTransparent":true,"tabs":[{"title":"Top Markets","symbols":[{"s":"CRYPTO:BTCUSD","d":"Bitcoin"},{"s":"NASDAQ:AAPL","d":"Apple"},{"s":"NASDAQ:NVDA","d":"NVIDIA"},{"s":"NASDAQ:GOOG","d":"Google"}]}]}
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Slide 2 --}}
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1920&auto=format&fit=crop')">
            <div class="hero-float-shape shape-1"></div>
            <div class="hero-float-shape shape-2"></div>
            <div class="container">
                <div class="row align-items-center gy-5 slider-content">
                    <div class="col-lg-6">
                        {{-- <div class="live-badge"><span class="live-dot"></span> Analysts Active</div> --}}
                        <h1 class="slide-h1">Multi-Asset<br><span class="gradient-text">Investment Platform</span></h1>
                        <p class="slide-subtitle">Trade cryptocurrencies, indices, and forex backed by expert analysts who monitor global markets around the clock to keep your portfolio performing.</p>
                        <div class="hero-btns">
                            <a href="{{ route('register') }}" class="btn btn-primary-custom"><i class="fas fa-chart-line"></i> Open an Account</a>
                            <a href="#" class="btn btn-outline-light-custom"><i class="fas fa-info-circle"></i> How It Works</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Expert-Led Market Analysis</li>
                            <li><i class="fas fa-check"></i> Lightning-Fast Order Execution</li>
                            <li><i class="fas fa-check"></i> Dynamic Risk Management</li>
                        </ul>
                        <div class="hero-stats-row">
                            <span class="hero-stat-pill"><i class="fas fa-bolt"></i> <strong>Fast</strong> Execution</span>
                            <span class="hero-stat-pill"><i class="fas fa-chart-line"></i> <strong>99.8%</strong> Uptime</span>
                            <span class="hero-stat-pill"><i class="fas fa-users"></i> <strong>50K+</strong> Investors</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-widget-wrap">
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget" style="height:420px;"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {"colorTheme":"dark","dateRange":"12M","showChart":true,"locale":"en","width":"100%","height":"100%","isTransparent":true,"tabs":[{"title":"Top Gainers","symbols":[{"s":"NASDAQ:TSLA","d":"Tesla"},{"s":"NASDAQ:MSFT","d":"Microsoft"},{"s":"NASDAQ:META","d":"Meta Platforms"},{"s":"CRYPTO:ETHUSD","d":"Ethereum"}]}]}
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Slide 3 --}}
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1545235617-9465d2a55698?q=80&w=1920&auto=format&fit=crop')">
            <div class="hero-float-shape shape-1"></div>
            <div class="hero-float-shape shape-3"></div>
            <div class="container">
                <div class="row align-items-center gy-5 slider-content">
                    <div class="col-lg-6">
                        {{-- <div class="live-badge"><span class="live-dot"></span> Zero Hidden Fees</div> --}}
                        <h1 class="slide-h1">Smart Investing.<br><span class="gradient-text">Minimal Costs.</span></h1>
                        <p class="slide-subtitle">Experience transparent low fees, instant execution, and professional trade selection built to deliver the best market entries for your portfolio.</p>
                        <div class="hero-btns">
                            <a href="{{ route('register') }}" class="btn btn-primary-custom"><i class="fas fa-user-plus"></i> Create Account</a>
                            <a href="#" class="btn btn-outline-light-custom"><i class="fas fa-tags"></i> View Pricing</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Account Setup in Minutes</li>
                            <li><i class="fas fa-check"></i> 20+ Global Deposit Methods</li>
                            <li><i class="fas fa-check"></i> Start Trading Immediately</li>
                        </ul>
                        <div class="security-badges">
                            <span class="security-badge"><i class="fas fa-percentage"></i> 0% Commission</span>
                            <span class="security-badge"><i class="fas fa-wallet"></i> Instant Withdrawals</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-widget-wrap">
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget" style="height:420px;"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {"colorTheme":"dark","dateRange":"12M","showChart":true,"locale":"en","width":"100%","height":"100%","isTransparent":true,"tabs":[{"title":"Indices & Forex","symbols":[{"s":"FOREXCOM:SPXUSD","d":"S&P 500"},{"s":"FOREXCOM:NSXUSD","d":"US Tech 100"},{"s":"FX:GBPUSD","d":"GBP/USD"},{"s":"FX:USDJPY","d":"USD/JPY"}]}]}
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- =========================================================
         MARQUEE CRYPTO TICKER
         ========================================================= --}}
    <div class="marquee-ticker-wrap">
        <div class="marquee-track">
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">BTC/USD</span><span class="m-price">$107,243</span><span class="m-up">▲ +2.34%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">ETH/USD</span><span class="m-price">$3,842</span><span class="m-up">▲ +1.67%</span></span>
            <span class="marquee-item"><span class="m-dot dn"></span><span class="m-name">EUR/USD</span><span class="m-price">1.0854</span><span class="m-down">▼ -0.23%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">S&amp;P 500</span><span class="m-price">5,530</span><span class="m-up">▲ +0.89%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">XAU/USD</span><span class="m-price">$3,320</span><span class="m-up">▲ +0.56%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">BNB/USD</span><span class="m-price">$724</span><span class="m-up">▲ +3.11%</span></span>
            <span class="marquee-item"><span class="m-dot dn"></span><span class="m-name">GBP/USD</span><span class="m-price">1.2741</span><span class="m-down">▼ -0.15%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">SOL/USD</span><span class="m-price">$183</span><span class="m-up">▲ +4.20%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">NASDAQ</span><span class="m-price">19,840</span><span class="m-up">▲ +1.02%</span></span>
            <span class="marquee-item"><span class="m-dot dn"></span><span class="m-name">USD/JPY</span><span class="m-price">157.34</span><span class="m-down">▼ -0.08%</span></span>
            {{-- Duplicate for seamless loop --}}
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">BTC/USD</span><span class="m-price">$107,243</span><span class="m-up">▲ +2.34%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">ETH/USD</span><span class="m-price">$3,842</span><span class="m-up">▲ +1.67%</span></span>
            <span class="marquee-item"><span class="m-dot dn"></span><span class="m-name">EUR/USD</span><span class="m-price">1.0854</span><span class="m-down">▼ -0.23%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">S&amp;P 500</span><span class="m-price">5,530</span><span class="m-up">▲ +0.89%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">XAU/USD</span><span class="m-price">$3,320</span><span class="m-up">▲ +0.56%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">BNB/USD</span><span class="m-price">$724</span><span class="m-up">▲ +3.11%</span></span>
            <span class="marquee-item"><span class="m-dot dn"></span><span class="m-name">GBP/USD</span><span class="m-price">1.2741</span><span class="m-down">▼ -0.15%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">SOL/USD</span><span class="m-price">$183</span><span class="m-up">▲ +4.20%</span></span>
            <span class="marquee-item"><span class="m-dot up"></span><span class="m-name">NASDAQ</span><span class="m-price">19,840</span><span class="m-up">▲ +1.02%</span></span>
            <span class="marquee-item"><span class="m-dot dn"></span><span class="m-name">USD/JPY</span><span class="m-price">157.34</span><span class="m-down">▼ -0.08%</span></span>
        </div>
    </div>

    {{-- =========================================================
         STATS SECTION
         ========================================================= --}}
    <section class="stats-section">
        <div class="container">
            <div class="row g-3 g-md-4">
                <div class="col-6 col-sm-6 col-md-3" data-reveal data-reveal-delay="1">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-users"></i></div>
                        <div class="stats-number" data-count="50000">0</div>
                        <div class="stats-label">Active Traders</div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3" data-reveal data-reveal-delay="2">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-dollar-sign"></i></div>
                        <div class="stats-number" data-count="2.4" data-prefix="$" data-suffix="B+">0</div>
                        <div class="stats-label">Volume Traded</div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3" data-reveal data-reveal-delay="3">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-globe"></i></div>
                        <div class="stats-number">Globally</div>
                        <div class="stats-label">Countries Served</div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3" data-reveal data-reveal-delay="4">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-star"></i></div>
                        <div class="stats-number" data-count="4.9" data-suffix=" / 5">0</div>
                        <div class="stats-label">Client Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         TRUST STRIP
         ========================================================= --}}
    <div class="trust-strip">
        <div class="container">
            <div class="trust-inner">
                <span class="trust-label">Trusted &amp; Regulated By</span>
                <div class="trust-badges">
                    <span class="trust-item"><i class="fas fa-balance-scale"></i> FCA Regulated</span>
                    <span class="trust-item"><i class="fas fa-certificate"></i> ISO 27001 Certified</span>
                    <span class="trust-item"><i class="fas fa-lock"></i> PCI-DSS Compliant</span>
                    <span class="trust-item"><i class="fas fa-shield-alt"></i> FSCS Protected</span>
                    <span class="trust-item"><i class="fas fa-award"></i> 5-Star Rated 2024</span>
                </div>
            </div>
        </div>
    </div>

    {{-- =========================================================
         HOW IT WORKS  3 STEPS
         ========================================================= --}}
    <section class="section ai-section">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-route"></i> Simple Process</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">How Valeris Crest Works</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Begin your investment journey in just 3 simple steps</p>

            <div class="row ai-workflow g-4">
                <div class="col-md-4" data-reveal data-reveal-delay="1">
                    <div class="how-it-work-card ai-card">
                        <span class="step-badge">01</span>
                        <div class="how-it-work-icon ai-icon"><i class="fas fa-user-circle"></i></div>
                        <h3 class="how-it-work-title">Create Your Account</h3>
                        <p class="text-muted-custom">Register and access your personal dashboard in minutes. Fund your account using over 20 global payment methods — no paperwork required.</p>
                    </div>
                </div>
                <div class="col-md-4" data-reveal data-reveal-delay="2">
                    <div class="how-it-work-card ai-card">
                        <span class="step-badge">02</span>
                        <div class="how-it-work-icon ai-icon"><i class="fas fa-chart-line"></i></div>
                        <h3 class="how-it-work-title">Our Experts Trade for You</h3>
                        <p class="text-muted-custom">Our professional trading team monitors global markets around the clock, executing high-conviction positions and managing risk on your behalf.</p>
                    </div>
                </div>
                <div class="col-md-4" data-reveal data-reveal-delay="3">
                    <div class="how-it-work-card ai-card">
                        <span class="step-badge">03</span>
                        <div class="how-it-work-icon ai-icon"><i class="fas fa-coins"></i></div>
                        <h3 class="how-it-work-title">Withdraw Your Returns</h3>
                        <p class="text-muted-custom">Withdraw your earnings instantly to your bank account or crypto wallet — zero hidden fees and same-day payout processing guaranteed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         ADVANCED TRADING FEATURES
         ========================================================= --}}
    <section class="section section-dark">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-reveal>
                    <span class="section-label"><i class="fas fa-layer-group"></i> Platform Highlight</span>
                    <h2 class="section-title text-start mt-2">Professional Trading<br>Tools & Features</h2>
                    <p class="mb-4" style="color:var(--text-muted);font-size:1rem;line-height:1.75;">The fastest trading experience built on modern technology — zero delays, pixel-perfect quotes, and a platform engineered for serious investors. Valeris Crest support is available 24/7.</p>
                    <ul class="features-list">
                        <li>4 chart types, 8 indicators &amp; precision trend-line tools</li>
                        {{-- <li>Copy trading — follow top performers or publish your own strategy</li> --}}
                        <li>100+ assets: crypto, stocks, forex &amp; commodities</li>
                        <li>Advanced order types with built-in risk management controls</li>
                    </ul>
                    <a href="#" class="btn btn-primary-custom mt-4"><i class="fas fa-layer-group"></i> Explore Features</a>
                </div>
                <div class="col-lg-6" data-reveal data-reveal-delay="2">
                    <div class="hero-widget-wrap">
                        <div id="tradingview_advancedchart" style="height:420px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget({"autosize":true,"symbol":"BINANCE:ETHUSDT","interval":"D","timezone":"Etc/UTC","theme":"dark","style":"1","locale":"en","enable_publishing":false,"hide_top_toolbar":false,"container_id":"tradingview_advancedchart"});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         WHY CHOOSE US
         ========================================================= --}}
    <section class="section">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-trophy"></i> Our Advantages</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">Why Investors Choose Valeris Crest</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Trusted by 50,000+ investors worldwide for speed, security, and consistent returns</p>

            <div class="row g-4 mt-1">
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="1">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-user-tie"></i></div>
                        <h4>Expert Trading Team</h4>
                        <p>Our senior portfolio managers bring decades of combined experience across global markets, executing strategies with precision and discipline.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="2">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>Bank-Grade Security</h4>
                        <p>256-bit SSL encryption, 2FA protection, and cold-storage custody keep your funds and personal data completely safe at all times.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="3">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Ultra-Fast Execution</h4>
                        <p>Orders are filled in milliseconds with minimal slippage, ensuring your positions are opened and closed at the prices you see.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="4">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-wallet"></i></div>
                        <h4>Instant Withdrawals</h4>
                        <p>Request a withdrawal anytime and receive your funds within hours — no hidden delays, no unnecessary holdbacks, no extra fees.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="5">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Dedicated Support</h4>
                        <p>Our client-relations team is available around the clock via live chat, email, and phone — ready to assist with any query.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="6">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-chart-pie"></i></div>
                        <h4>Transparent Reporting</h4>
                        <p>Full audit logs, real-time P&amp;L tracking, and downloadable trade history give you 100% visibility into every transaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         MARKET TABLE
         ========================================================= --}}
    <section class="section section-dark">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-chart-bar"></i> Live Markets</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">Trade Multiple Instruments</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Instant access to crypto, indices, commodities &amp; forex  all in one platform</p>

            <div class="market-table-scroll" data-reveal data-reveal-delay="3">
                <div class="hero-widget-wrap" style="padding: 0;">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget" style="height: 500px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                        {
                            "width": "100%",
                            "height": "500",
                            "symbolsGroups": [
                                {
                                    "name": "Crypto",
                                    "originalName": "Crypto",
                                    "symbols": [
                                        {"name": "CRYPTO:BTCUSD", "displayName": "Bitcoin"},
                                        {"name": "CRYPTO:ETHUSD", "displayName": "Ethereum"},
                                        {"name": "CRYPTO:SOLUSD", "displayName": "Solana"},
                                        {"name": "CRYPTO:BNBUSD", "displayName": "BNB"}
                                    ]
                                },
                                {
                                    "name": "Forex",
                                    "originalName": "Forex",
                                    "symbols": [
                                        {"name": "FX:EURUSD", "displayName": "EUR/USD"},
                                        {"name": "FX:GBPUSD", "displayName": "GBP/USD"},
                                        {"name": "FX:USDJPY", "displayName": "USD/JPY"}
                                    ]
                                },
                                {
                                    "name": "Indices",
                                    "originalName": "Indices",
                                    "symbols": [
                                        {"name": "FOREXCOM:SPXUSD", "displayName": "S&P 500"},
                                        {"name": "FOREXCOM:NSXUSD", "displayName": "Nasdaq 100"},
                                        {"name": "FOREXCOM:UKXGBP", "displayName": "FTSE 100"}
                                    ]
                                },
                                {
                                    "name": "Commodities",
                                    "originalName": "Commodities",
                                    "symbols": [
                                        {"name": "OANDA:XAUUSD", "displayName": "Gold"},
                                        {"name": "OANDA:XAGUSD", "displayName": "Silver"},
                                        {"name": "OANDA:WTICOUSD", "displayName": "WTI Crude Oil"}
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

            <div class="text-center mt-5" data-reveal data-reveal-delay="4">
                <a href="#" class="btn-outline-dark-custom"><i class="fas fa-th-list me-2"></i>View All Instruments</a>
            </div>
        </div>
    </section>

    {{-- =========================================================
         PLAN CARDS
         ========================================================= --}}
    <section class="section">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-gem"></i> Investment Plans</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">Managed Investment Plans</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Select a plan that matches your financial goals and let our experts do the heavy lifting</p>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="1">
                    <div class="plan-card">
                        <div class="plan-name">MINI PLAN</div>
                        <div class="plan-price">$500</div>
                        <div class="plan-feature"><i class="fas fa-headset"></i>24/7 Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent"></i>10% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell"></i>Trading Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt"></i>100% Insurance</div>
                        <div class="plan-roi">$7,500</div>
                        <div class="plan-roi-label">Projected ROI</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="2">
                    <div class="plan-card popular">
                        <div class="plan-popular-badge">Most Popular</div>
                        <div class="plan-name">SILVER PLAN</div>
                        <div class="plan-price">$20,000</div>
                        <div class="plan-feature"><i class="fas fa-headset"></i>24/7 Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent"></i>15% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell"></i>Trading Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt"></i>100% Insurance</div>
                        <div class="plan-roi">$117,500</div>
                        <div class="plan-roi-label">Projected ROI</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="3">
                    <div class="plan-card">
                        <div class="plan-name">GOLD PLAN</div>
                        <div class="plan-price">$100,000</div>
                        <div class="plan-feature"><i class="fas fa-headset"></i>24/7 Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent"></i>60% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell"></i>Trading Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt"></i>100% Insurance</div>
                        <div class="plan-roi">$420,000</div>
                        <div class="plan-roi-label">Projected ROI</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="4">
                    <div class="plan-card">
                        <div class="plan-name">DIAMOND PLAN</div>
                        <div class="plan-price">$500,000</div>
                        <div class="plan-feature"><i class="fas fa-headset"></i>24/7 VIP Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent"></i>60% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell"></i>Priority Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt"></i>100% Insurance</div>
                        <div class="plan-roi">$2,520,000</div>
                        <div class="plan-roi-label">Projected ROI</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         TESTIMONIALS
         ========================================================= --}}
    <section class="section section-dark">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-quote-left"></i> Client Stories</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">What Our Clients Say</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Real investors. Real returns. Hear directly from the Valeris Crest community.</p>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="1">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"I got my first investment profit of $15k. Big thanks to the team at Valeris Crest! The platform is intuitive and support is always there when you need them."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=11" alt="Robert Pope" class="testimonial-avatar">
                            <div>
                                <strong>Robert Pope</strong>
                                <small>Mini Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Client</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="2">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"Big shout-out to Valeris Crest. I got my Bitcoin back after a trading error  the insurance policy really works! I'll never trade anywhere else."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=32" alt="Steve Walter" class="testimonial-avatar">
                            <div>
                                <strong>Steve Walter</strong>
                                <small>Silver Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Client</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="3">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"Thank you Valeris Crest! I'm now debt free. I repaid my $64,000 loan entirely from profits. The Gold plan was the best investment decision of my life."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=47" alt="Veronica Keith" class="testimonial-avatar">
                            <div>
                                <strong>Veronica Keith</strong>
                                <small>Gold Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Client</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="4">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"Started with the Diamond plan 6 months ago. My portfolio has grown beyond anything I imagined. The team at Valeris Crest works hard — positions are managed even while I sleep!"</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=60" alt="Marcus J. Lee" class="testimonial-avatar">
                            <div>
                                <strong>Marcus J. Lee</strong>
                                <small>Diamond Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Client</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         PAYMENT METHODS
         ========================================================= --}}
    <section class="section">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-credit-card"></i> Payment Methods</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">We Accept</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">20+ deposit &amp; withdrawal methods — fast, secure, and always fee-free</p>

            <div class="payment-grid" data-reveal data-reveal-delay="3">
                <div class="payment-method"><i class="fab fa-bitcoin fa-2x text-warning"></i><p>Bitcoin</p></div>
                <div class="payment-method"><i class="fab fa-ethereum fa-2x text-primary"></i><p>Ethereum</p></div>
                <div class="payment-method"><i class="fab fa-cc-visa fa-2x" style="color:#1a1f71;"></i><p>Visa</p></div>
                <div class="payment-method"><i class="fab fa-cc-mastercard fa-2x text-danger"></i><p>Mastercard</p></div>
                <div class="payment-method"><i class="fas fa-university fa-2x text-info"></i><p>Bank Wire</p></div>
                <div class="payment-method"><i class="fab fa-paypal fa-2x" style="color:#003087;"></i><p>PayPal</p></div>
                <div class="payment-method"><i class="fas fa-coins fa-2x" style="color:#26a17b;"></i><p>USDT</p></div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         LIVE FOREX CROSS RATES
         ========================================================= --}}
    <section class="section section-dark">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-exchange-alt"></i> Live Data</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">Live Forex Cross Rates</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Real-time currency matrix across major global pairs</p>
            <div class="tradingview-widget-container" data-reveal data-reveal-delay="3">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {"width":"100%","height":"400","currencies":["EUR","USD","JPY","GBP","CHF","AUD","CAD","NZD","CNY"],"isTransparent":true,"colorTheme":"dark","locale":"en"}
                </script>
            </div>
        </div>
    </section>

    {{-- =========================================================
         FAQ
         ========================================================= --}}
    <section class="section">
        <div class="container">
            <div class="text-center mb-2" data-reveal>
                <span class="section-label"><i class="fas fa-question-circle"></i> FAQ</span>
            </div>
            <h2 class="section-title" data-reveal data-reveal-delay="1">Frequently Asked Questions</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="2">Everything you need to know before opening your account</p>

            <div class="faq-wrap" data-reveal data-reveal-delay="3">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How does Valeris Crest manage my investments?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer"><p>Our team of experienced portfolio managers monitors live market data across hundreds of assets simultaneously. They identify high-probability setups using advanced technical and fundamental analysis, then execute trades on your behalf with speed and precision — keeping your portfolio performing around the clock.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Is my investment capital protected?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer"><p>Yes. All account plans include our 100% Insurance Policy, which safeguards your principal investment. Funds are held in segregated accounts and never used for operational expenses. Our trading team also applies strict stop-loss protocols to limit drawdown during volatile market conditions.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How long does it take to withdraw profits?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer"><p>Withdrawals are processed same-day for cryptocurrency requests and within 1–3 business days for bank transfers. There are zero hidden fees — you receive 100% of the amount you request.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the minimum deposit to start trading?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer"><p>You can begin with our Mini Plan starting at just $500. This gives you full access to the trading platform, live dashboard, and 24/7 support — making it an ideal starting point for new investors.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Which countries can use Valeris Crest?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer"><p>We currently serve clients in multiple countries. Registration and trading are fully digital — no physical presence is required. Simply create an account, verify your identity, fund your wallet, and our team takes it from there.</p></div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         CTA BANNER
         ========================================================= --}}
    <section class="cta-banner">
        <div class="container" data-reveal>
            <h2>Ready to Grow Your Wealth with Valeris Crest?</h2>
            <p>Join 50,000+ investors already building their financial future with the Valeris Crest expert investment platform.</p>
            <div class="cta-btns">
                <a href="{{ route('register') }}" class="btn-cta-white"><i class="fas fa-rocket"></i>Create Free Account</a>
                <a href="{{ route('login') }}" class="btn-cta-outline"><i class="fas fa-sign-in-alt"></i>Login</a>
            </div>
        </div>
    </section>

    {{-- =========================================================
         JAVASCRIPT
         ========================================================= --}}

    {{-- Scroll reveal --}}
    <script>
    (function () {
        var els = document.querySelectorAll('[data-reveal]');
        if (!els.length) return;
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.classList.add('revealed');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        els.forEach(function (el) { io.observe(el); });
    })();
    </script>

    {{-- Counter animation --}}
    <script>
    (function () {
        var counters = document.querySelectorAll('.stats-number[data-count]');
        if (!counters.length) return;
        var fired = false;
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting && !fired) {
                    fired = true;
                    counters.forEach(function (el) {
                        var target   = parseFloat(el.getAttribute('data-count'));
                        var prefix   = el.getAttribute('data-prefix') || '';
                        var suffix   = el.getAttribute('data-suffix') || (Number.isInteger(target) ? '+' : '');
                        var isDecimal = !Number.isInteger(target);
                        var duration = 2000;
                        var start    = null;
                        function step(ts) {
                            if (!start) start = ts;
                            var progress = Math.min((ts - start) / duration, 1);
                            var ease     = 1 - Math.pow(1 - progress, 3);
                            var current  = target * ease;
                            el.textContent = prefix + (isDecimal ? current.toFixed(1) : Math.floor(current).toLocaleString()) + suffix;
                            if (progress < 1) requestAnimationFrame(step);
                        }
                        requestAnimationFrame(step);
                    });
                }
            });
        }, { threshold: 0.4 });
        if (counters[0]) io.observe(counters[0].closest('section') || counters[0]);
    })();
    </script>

    {{-- FAQ accordion --}}
    <script>
    function toggleFaq(btn) {
        var item   = btn.closest('.faq-item');
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function (i) { i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }
    </script>

@include('home.footer')