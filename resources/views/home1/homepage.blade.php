@include('home.header')

    <!-- ═══════════════════════════════════════════
         TOP TICKER TAPE
    ═══════════════════════════════════════════ -->
    <div class="top-ticker-tape">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                    {"proName":"CRYPTO:BTCUSD","title":"Bitcoin"},
                    {"proName":"CRYPTO:ETHUSD","title":"Ethereum"},
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
                "colorTheme": "light",
                "locale": "en"
            }
            </script>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════
         HERO SLIDER
    ═══════════════════════════════════════════ -->
    <section class="hero-slider">

        <!-- Slide 1 -->
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1920&auto=format&fit=crop')">
            <!-- Floating decorative shapes -->
            <div class="hero-float-shape shape-1"></div>
            <div class="hero-float-shape shape-2"></div>
            <div class="hero-float-shape shape-3"></div>

            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <div class="live-badge">
                            <span class="live-dot"></span> Markets Live Now
                        </div>
                        <h1 class="slide-h1">Advanced Trading.<br><span class="gradient-text">Fully Managed.</span></h1>
                        <p class="slide-subtitle">
                            Our professional trading strategies execute trades automatically, analyze market patterns, and aim to maximize returns.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('login') }}" class="btn btn-primary-custom"><i class="fas fa-sign-in-alt me-2"></i>Login to Account</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light-custom"><i class="fas fa-rocket me-2"></i>Start Trading</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Real-Time AI Market Analysis</li>
                            <li><i class="fas fa-check"></i> Smart Automated Strategies</li>
                            <li><i class="fas fa-check"></i> 24/7 AI Monitoring &amp; Execution</li>
                        </ul>
                        <div class="security-badges">
                            <span class="security-badge"><i class="fas fa-shield-alt"></i> SSL Secured</span>
                            <span class="security-badge"><i class="fas fa-lock"></i> Funds Protected</span>
                            <span class="security-badge"><i class="fas fa-award"></i> Regulated Platform</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget" style="height:450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {"colorTheme":"light","dateRange":"12M","showChart":true,"locale":"en","width":"100%","height":"100%","isTransparent":true,"tabs":[{"title":"Markets","symbols":[{"s":"CRYPTO:BTCUSD","d":"Bitcoin"},{"s":"NASDAQ:AAPL","d":"Apple"},{"s":"NASDAQ:NVDA","d":"NVIDIA"},{"s":"NASDAQ:GOOG","d":"Google"}]}]}
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1920&auto=format&fit=crop')">
            <div class="hero-float-shape shape-1"></div>
            <div class="hero-float-shape shape-2"></div>
            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <div class="live-badge">
                            <span class="live-dot"></span> Engine Active
                        </div>
                        <h1 class="slide-h1">Next-Generation<br><span class="gradient-text">Trading Tech</span></h1>
                        <p class="slide-subtitle">
                            Trade cryptocurrencies, indices, and forex with ultra-fast AI prediction engines designed to detect opportunities before humans can.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('register') }}" class="btn btn-primary-custom"><i class="fas fa-rocket me-2"></i>Start Trading</a>
                            <a href="#" class="btn btn-outline-light-custom"><i class="fas fa-info-circle me-2"></i>How It Works</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Predictive Algorithms</li>
                            <li><i class="fas fa-check"></i> Lightning-Fast Market Execution</li>
                            <li><i class="fas fa-check"></i> Intelligent Risk Optimization</li>
                        </ul>
                        <div class="hero-stats-row">
                            <span class="hero-stat-pill"><i class="fas fa-bolt"></i> <strong>0.001s</strong> Execution</span>
                            <span class="hero-stat-pill"><i class="fas fa-chart-line"></i> <strong>99.8%</strong> Uptime</span>
                            <span class="hero-stat-pill"><i class="fas fa-users"></i> <strong>50K+</strong> Traders</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tradingview-widget-container">
                            <div id="tradingview_crypto" style="height:450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {"colorTheme":"light","dateRange":"12M","showChart":true,"locale":"en","width":"100%","height":"100%","isTransparent":true,"tabs":[{"title":"Top Gainers","symbols":[{"s":"NASDAQ:TSLA","d":"Tesla"},{"s":"NASDAQ:MSFT","d":"Microsoft"},{"s":"NASDAQ:META","d":"Meta Platforms"},{"s":"CRYPTO:ETHUSD","d":"Ethereum"}]}]}
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1545235617-9465d2a55698?q=80&w=1920&auto=format&fit=crop')">
            <div class="hero-float-shape shape-1"></div>
            <div class="hero-float-shape shape-3"></div>
            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <div class="live-badge">
                            <span class="live-dot"></span> Zero Hidden Fees
                        </div>
                        <h1 class="slide-h1">Optimized Trading.<br><span class="gradient-text">Minimal Costs.</span></h1>
                        <p class="slide-subtitle">
                            Experience low fees, instant execution, and automated trade selection built to deliver competitive market entries.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('register') }}" class="btn btn-primary-custom"><i class="fas fa-user-plus me-2"></i>Create AI Account</a>
                            <a href="#" class="btn btn-outline-light-custom"><i class="fas fa-tags me-2"></i>View Pricing</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Account opens in seconds</li>
                            <li><i class="fas fa-check"></i> Automated Deposits (20+ Methods)</li>
                            <li><i class="fas fa-check"></i> Trade instantly with zero setup</li>
                        </ul>
                        <div class="security-badges">
                            <span class="security-badge"><i class="fas fa-percentage"></i> 0% Commission</span>
                            <span class="security-badge"><i class="fas fa-wallet"></i> Instant Withdrawals</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tradingview-widget-container">
                            <div id="tradingview_forex" style="height:450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {"colorTheme":"light","dateRange":"12M","showChart":true,"locale":"en","width":"100%","height":"100%","isTransparent":true,"tabs":[{"title":"Indices & Forex","symbols":[{"s":"FOREXCOM:SPXUSD","d":"S&P 500"},{"s":"FOREXCOM:NSXUSD","d":"US Tech 100"},{"s":"FX:GBPUSD","d":"GBP/USD"},{"s":"FX:USDJPY","d":"USD/JPY"}]}]}
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ═══════════════════════════════════════════
         LIVE PRICE MARQUEE TICKER
    ═══════════════════════════════════════════ -->
    <div class="marquee-ticker-wrap">
        <div class="marquee-track">
            <!-- Set 1 -->
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
            <!-- Set 2 (duplicate for seamless loop) -->
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

    <!-- ═══════════════════════════════════════════
         STATS STRIP
    ═══════════════════════════════════════════ -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3" data-reveal data-reveal-delay="1">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-users"></i></div>
                        <div class="stats-number" data-count="50000">0</div>
                        <div class="stats-label">Active Traders</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-reveal data-reveal-delay="2">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-dollar-sign"></i></div>
                        <div class="stats-number" data-count="2.4" data-prefix="$" data-suffix="B+">0</div>
                        <div class="stats-label">Volume Traded</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-reveal data-reveal-delay="3">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-globe"></i></div>
                        <div class="stats-number">Global</div>
                        <div class="stats-label">Countries Served</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-reveal data-reveal-delay="4">
                    <div class="stat-item">
                        <div class="stats-icon"><i class="fas fa-star"></i></div>
                        <div class="stats-number" data-count="4.9" data-suffix=" / 5">0</div>
                        <div class="stats-label">Client Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         TRUST STRIP
    ═══════════════════════════════════════════ -->
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

    <!-- ═══════════════════════════════════════════
         HOW IT WORKS
    ═══════════════════════════════════════════ -->
    <section class="section ai-section">
        <div class="container">
            <h2 class="section-title" data-reveal>How Our AI Trading System Works</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Begin automated AI-powered trading in just 3 simple steps</p>

            <div class="row ai-workflow">
                <div class="col-md-4" data-reveal data-reveal-delay="1">
                    <div class="how-it-work-card ai-card">
                        <span class="step-badge">01</span>
                        <div class="how-it-work-icon ai-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="how-it-work-title">Create Your AI Account</h3>
                        <p>Register and unlock your AI dashboard in minutes. Fund your account using over 20 global payment methods  zero paperwork.</p>
                    </div>
                </div>
                <div class="col-md-4" data-reveal data-reveal-delay="2">
                    <div class="how-it-work-card ai-card">
                        <span class="step-badge">02</span>
                        <div class="how-it-work-icon ai-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3 class="how-it-work-title">AI Starts Trading for You</h3>
                        <p>Our AI engine scans markets 24/7, executes trades with high-precision logic, and adapts strategies to live conditions automatically.</p>
                    </div>
                </div>
                <div class="col-md-4" data-reveal data-reveal-delay="3">
                    <div class="how-it-work-card ai-card">
                        <span class="step-badge">03</span>
                        <div class="how-it-work-icon ai-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h3 class="how-it-work-title">Withdraw Your Earnings</h3>
                        <p>Withdraw profits instantly to your bank or crypto wallet with zero hidden fees and same-day payout processing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         ADVANCED FEATURES
    ═══════════════════════════════════════════ -->
    <section class="section section-dark">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-reveal>
                    <span class="live-badge" style="background:rgba(82,175,238,0.12);color:#1a6fa0;border-color:rgba(82,175,238,0.3);">
                        <span class="live-dot" style="background:var(--primary);"></span> Platform Highlight
                    </span>
                    <h2 class="section-title text-start mt-2">Advanced Trading<br>Features</h2>
                    <p class="mb-4" style="color:#555;font-size:1.05rem;">
                        The fastest trading experience powered by modern technology  zero delays, pixel-perfect quotes, and a platform that never sleeps. Valeris Crest support is available 24/7.
                    </p>
                    <ul class="features-list">
                        <li>4 chart types, 8 indicators &amp; smart trend-line tools</li>
                        <li>Social trading  follow top traders or share your own strategy</li>
                        <li>100+ assets: crypto, stocks, forex &amp; commodities</li>
                        <li>Advanced order types with built-in risk management</li>
                    </ul>
                    <a href="#" class="btn btn-primary-custom mt-3"><i class="fas fa-layer-group me-2"></i>Explore Features</a>
                </div>
                <div class="col-lg-6" data-reveal data-reveal-delay="2">
                    <div class="tradingview-widget-container">
                        <div id="tradingview_advancedchart" style="height:450px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget({"autosize":true,"symbol":"BINANCE:ETHUSDT","interval":"D","timezone":"Etc/UTC","theme":"light","style":"1","locale":"en","toolbar_bg":"#f1f3f6","enable_publishing":false,"hide_top_toolbar":false,"hide_legend":false,"save_image":false,"container_id":"tradingview_advancedchart"});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         WHY CHOOSE US
    ═══════════════════════════════════════════ -->
    <section class="section">
        <div class="container">
            <h2 class="section-title" data-reveal>Why Traders Choose Valeris Crest</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Trusted by 50,000+ investors worldwide for speed, security, and superior returns</p>

            <div class="row g-4 mt-2">
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="1">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-brain"></i></div>
                        <h4>Advanced AI Engine</h4>
                        <p>Our proprietary AI analyzes millions of data points per second, predicting high-probability trade setups before markets move.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="2">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>Military-Grade Security</h4>
                        <p>256-bit SSL encryption, 2FA protection, and cold-storage custody keep your funds and personal data completely safe.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="3">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Lightning Execution</h4>
                        <p>Trades execute in under 0.001 seconds with zero slippage, ensuring you always get the price you see on screen.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="4">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-wallet"></i></div>
                        <h4>Instant Withdrawals</h4>
                        <p>Request a withdrawal anytime and receive your funds within hours no hidden delays or processing fees.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-reveal data-reveal-delay="5">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Expert Support</h4>
                        <p>Our team of trading experts is available around the clock via live chat, email, and phone to assist you at any time.</p>
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

    <!-- ═══════════════════════════════════════════
         TRADING INSTRUMENTS
    ═══════════════════════════════════════════ -->
    <section class="section">
        <div class="container">
            <h2 class="section-title" data-reveal>Trade Multiple Instruments</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Instant access to crypto, indices, commodities &amp; forex  all in one platform</p>

            <div class="market-table" data-reveal data-reveal-delay="2">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th>Symbol</th>
                            <th>Price</th>
                            <th>24h Change</th>
                            <th>Max Leverage</th>
                            <th>Trade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="d-flex align-items-center gap-2"><i class="fab fa-bitcoin text-warning fs-5"></i><strong>Bitcoin</strong></div></td>
                            <td><span class="badge" style="background:rgba(255,193,7,0.15);color:#b58800;font-weight:600;border-radius:6px;padding:4px 10px;">BTC/USD</span></td>
                            <td><strong>$107,243</strong></td>
                            <td><span class="positive fw-semibold">▲ +2.34%</span></td>
                            <td><span class="badge bg-primary-subtle text-primary fw-bold" style="border-radius:6px;padding:4px 10px;">100×</span></td>
                            <td><a href="{{ route('register') }}" class="btn btn-sm btn-primary-custom py-1 px-3">Trade</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex align-items-center gap-2"><i class="fab fa-ethereum text-primary fs-5"></i><strong>Ethereum</strong></div></td>
                            <td><span class="badge" style="background:rgba(82,175,238,0.12);color:#1a6fa0;font-weight:600;border-radius:6px;padding:4px 10px;">ETH/USD</span></td>
                            <td><strong>$3,842</strong></td>
                            <td><span class="positive fw-semibold">▲ +1.67%</span></td>
                            <td><span class="badge bg-primary-subtle text-primary fw-bold" style="border-radius:6px;padding:4px 10px;">100×</span></td>
                            <td><a href="{{ route('register') }}" class="btn btn-sm btn-primary-custom py-1 px-3">Trade</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex align-items-center gap-2"><i class="fas fa-euro-sign text-info fs-5"></i><strong>EUR/USD</strong></div></td>
                            <td><span class="badge" style="background:rgba(13,202,240,0.12);color:#0779a1;font-weight:600;border-radius:6px;padding:4px 10px;">EUR/USD</span></td>
                            <td><strong>1.0854</strong></td>
                            <td><span class="negative fw-semibold">▼ -0.23%</span></td>
                            <td><span class="badge bg-primary-subtle text-primary fw-bold" style="border-radius:6px;padding:4px 10px;">1000×</span></td>
                            <td><a href="{{ route('register') }}" class="btn btn-sm btn-primary-custom py-1 px-3">Trade</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex align-items-center gap-2"><i class="fas fa-chart-line text-success fs-5"></i><strong>S&amp;P 500</strong></div></td>
                            <td><span class="badge" style="background:rgba(40,167,69,0.12);color:#1a7a30;font-weight:600;border-radius:6px;padding:4px 10px;">SPX</span></td>
                            <td><strong>5,530.20</strong></td>
                            <td><span class="positive fw-semibold">▲ +0.89%</span></td>
                            <td><span class="badge bg-primary-subtle text-primary fw-bold" style="border-radius:6px;padding:4px 10px;">100×</span></td>
                            <td><a href="{{ route('register') }}" class="btn btn-sm btn-primary-custom py-1 px-3">Trade</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex align-items-center gap-2"><i class="fas fa-gem text-warning fs-5"></i><strong>Gold</strong></div></td>
                            <td><span class="badge" style="background:rgba(255,193,7,0.15);color:#b58800;font-weight:600;border-radius:6px;padding:4px 10px;">XAU/USD</span></td>
                            <td><strong>$3,320.40</strong></td>
                            <td><span class="positive fw-semibold">▲ +0.56%</span></td>
                            <td><span class="badge bg-primary-subtle text-primary fw-bold" style="border-radius:6px;padding:4px 10px;">500×</span></td>
                            <td><a href="{{ route('register') }}" class="btn btn-sm btn-primary-custom py-1 px-3">Trade</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-5" data-reveal data-reveal-delay="3">
                <a href="#" class="btn btn-outline-dark-custom"><i class="fas fa-th-list me-2"></i>View All Instruments</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         ACCOUNT PLANS
    ═══════════════════════════════════════════ -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title" data-reveal>Trading Account Plans</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Choose the plan that fits your trading goals and investment strategy</p>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="1">
                    <div class="plan-card">
                        <div class="plan-name">MINI PLAN</div>
                        <div class="plan-price">$500</div>
                        <div class="plan-feature"><i class="fas fa-headset me-2 text-primary"></i>24/7 Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar me-2 text-primary"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent me-2 text-primary"></i>10% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell me-2 text-primary"></i>Trading Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt me-2 text-primary"></i>100% Insurance</div>
                        <div class="plan-roi">ROI: $7,500</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="2">
                    <div class="plan-card popular">
                        <div class="plan-name">SILVER PLAN</div>
                        <div class="plan-price">$20,000</div>
                        <div class="plan-feature"><i class="fas fa-headset me-2"></i>24/7 Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar me-2"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent me-2"></i>15% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell me-2"></i>Trading Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt me-2"></i>100% Insurance</div>
                        <div class="plan-roi">ROI: $117,500</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="3">
                    <div class="plan-card">
                        <div class="plan-name">GOLD PLAN</div>
                        <div class="plan-price">$100,000</div>
                        <div class="plan-feature"><i class="fas fa-headset me-2 text-primary"></i>24/7 Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar me-2 text-primary"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent me-2 text-primary"></i>60% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell me-2 text-primary"></i>Trading Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt me-2 text-primary"></i>100% Insurance</div>
                        <div class="plan-roi">ROI: $420,000</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="4">
                    <div class="plan-card">
                        <div class="plan-name">DIAMOND PLAN</div>
                        <div class="plan-price">$500,000</div>
                        <div class="plan-feature"><i class="fas fa-headset me-2 text-primary"></i>24/7 VIP Support</div>
                        <div class="plan-feature"><i class="fas fa-chart-bar me-2 text-primary"></i>Professional Charts</div>
                        <div class="plan-feature"><i class="fas fa-percent me-2 text-primary"></i>60% Return</div>
                        <div class="plan-feature"><i class="fas fa-bell me-2 text-primary"></i>Priority Alerts</div>
                        <div class="plan-feature"><i class="fas fa-shield-alt me-2 text-primary"></i>100% Insurance</div>
                        <div class="plan-roi">ROI: $2,520,000</div>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         TESTIMONIALS
    ═══════════════════════════════════════════ -->
    <section class="section">
        <div class="container">
            <h2 class="section-title" data-reveal>What Our Investors Say</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Real investors. Real momentum. Hear how the Valeris Crest community is growing with every step.</p>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="1">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">"My first profit came faster than I expected. The dashboard is clear, the support is responsive, and every milestone feels rewarding."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=21" alt="Maya Chen" class="testimonial-avatar">
                            <div>
                                <strong>Maya Chen</strong><br>
                                <small style="color:var(--text-muted);">Mini Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Investor</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="2">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">"I recovered my crypto with the protection plan and never looked back. The process felt secure, transparent, and genuinely supportive."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=29" alt="Daniel Brooks" class="testimonial-avatar">
                            <div>
                                <strong>Daniel Brooks</strong><br>
                                <small style="color:var(--text-muted);">Silver Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Investor</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="3">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">"The Gold plan helped me clear a major debt and build long-term confidence. Valeris Crest made the entire journey feel realistic and steady."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=41" alt="Sofia Alvarez" class="testimonial-avatar">
                            <div>
                                <strong>Sofia Alvarez</strong><br>
                                <small style="color:var(--text-muted);">Gold Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Investor</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-reveal data-reveal-delay="4">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">"The Diamond plan gave me the freedom to grow my portfolio while staying focused on life. The team is consistent and the results speak for themselves."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=54" alt="Noah Bennett" class="testimonial-avatar">
                            <div>
                                <strong>Noah Bennett</strong><br>
                                <small style="color:var(--text-muted);">Diamond Plan Investor</small>
                            </div>
                        </div>
                        <div class="verified-badge"><i class="fas fa-check-circle"></i> Verified Investor</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         PAYMENT METHODS
    ═══════════════════════════════════════════ -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title" data-reveal>We Accept</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">20+ deposit &amp; withdrawal methods  fast, secure, and fee-free</p>

            <div class="d-flex flex-wrap justify-content-center gap-3" data-reveal data-reveal-delay="2">
                <div class="payment-method">
                    <i class="fab fa-bitcoin fa-2x text-warning"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">Bitcoin</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-ethereum fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">Ethereum</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-visa fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">Visa</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-mastercard fa-2x text-danger"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">Mastercard</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-university fa-2x text-info"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">Bank Transfer</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-paypal fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">PayPal</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-coins fa-2x" style="color:#f7931a;"></i>
                    <p class="mt-2 mb-0 text-dark fw-semibold">USDT</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         FOREX CROSS RATES
    ═══════════════════════════════════════════ -->
    <section class="section">
        <div class="container">
            <h2 class="section-title" data-reveal>Live Forex Cross Rates</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Real-time currency matrix across major global pairs</p>
            <div class="text-center" data-reveal data-reveal-delay="2">
                <img src="{{ asset('assets/images/bg-3.jpg') }}" alt="Live Forex Cross Rates" class="img-fluid rounded shadow-lg" style="max-width:100%; height:auto;">
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         FAQ
    ═══════════════════════════════════════════ -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title" data-reveal>Frequently Asked Questions</h2>
            <p class="section-subtitle" data-reveal data-reveal-delay="1">Everything you need to know before getting started</p>

            <div class="faq-wrap" data-reveal data-reveal-delay="2">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How does the AI trading system work?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our AI engine continuously scans live market data across hundreds of assets simultaneously. It identifies patterns, momentum shifts, and arbitrage opportunities using deep-learning models trained on decades of market history. Once a high-probability setup is detected, trades are executed automatically within milliseconds no manual input required.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Is my investment capital protected?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes. All account plans include our 100% Insurance Policy, which safeguards your principal investment. Funds are held in segregated accounts and never used for operational expenses. Additionally, our AI uses dynamic stop-loss algorithms to minimize drawdown during volatile market conditions.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How long does it take to withdraw profits?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Withdrawals are processed same-day for cryptocurrency requests and within 1–3 business days for bank transfers. There are zero hidden fees you receive 100% of the amount you request.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the minimum deposit to start trading?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer">
                        <p>You can begin with our Mini Plan starting at just $500. This gives you full access to the AI trading engine, live dashboard, and 24/7 support making it an ideal starting point for new investors.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Which countries can use Valeris Crest?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-answer">
                        <p>We currently serve clients in 120+ countries. Registration and trading are fully digital no physical presence is required. Simply create an account, verify your identity, fund your wallet, and let the AI trade for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         CTA BANNER
    ═══════════════════════════════════════════ -->
    <section class="cta-banner text-center">
        <div class="container" data-reveal>
            <h2>Ready to Let AI Trade for You?</h2>
            <p>Join 50,000+ investors already growing their wealth with Valeris Crest's intelligent automated platform.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('register') }}" class="btn-cta-white"><i class="fas fa-rocket me-2"></i>Create Free Account</a>
                <a href="{{ route('login') }}" class="btn-cta-outline"><i class="fas fa-sign-in-alt me-2"></i>Login</a>
            </div>
        </div>
    </section>

    </main>

    <!-- Scroll Reveal Script -->
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
        }, { threshold: 0.12 });
        els.forEach(function (el) { io.observe(el); });
    })();
    </script>

    <!-- Animated Counter Script -->
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
                        var target = parseFloat(el.getAttribute('data-count'));
                        var prefix = el.getAttribute('data-prefix') || '';
                        var suffix = el.getAttribute('data-suffix') || (Number.isInteger(target) ? '+' : '');
                        var isDecimal = !Number.isInteger(target);
                        var duration = 1800;
                        var start = null;
                        function step(ts) {
                            if (!start) start = ts;
                            var progress = Math.min((ts - start) / duration, 1);
                            var ease = 1 - Math.pow(1 - progress, 3);
                            var current = target * ease;
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

    <!-- FAQ Toggle Script -->
    <script>
    function toggleFaq(btn) {
        var item = btn.closest('.faq-item');
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function (i) { i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }
    </script>

@include('home.footer')