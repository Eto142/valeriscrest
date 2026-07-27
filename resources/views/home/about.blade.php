
@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Swift Meta Trade</title>
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
        
        /* About Hero Section */
        .about-hero {
            background: linear-gradient(rgba(2, 2, 28, 0.9), rgba(2, 2, 28, 0.8)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding: 150px 0 100px;
            text-align: center;
        }
        
        .about-main-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            line-height: 1.2;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
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
        
        /* About Content */
        .about-building img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .heading-about {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .heading-about span {
            color: var(--primary);
        }
        
        .our-value {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 30px;
        }
        
        .abt-number {
            display: inline-block;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), #2a6b9c);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            font-weight: 700;
            font-size: 1.2rem;
            margin-right: 20px;
            vertical-align: top;
        }
        
        .abt-us-2 {
            display: inline-block;
            width: calc(100% - 90px);
            vertical-align: top;
        }
        
        .t-p {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        .white {
            color: var(--text-light);
        }
        
        /* Features Section */
        .feature-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.05);
            margin-bottom: 30px;
            transition: all 0.3s;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), #2a6b9c);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: white;
        }
        
        .feature-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .value-item {
            margin-bottom: 40px;
            padding-left: 20px;
            border-left: 3px solid var(--primary);
        }
        
        .value-icon {
            color: var(--primary);
            font-size: 1.5rem;
            margin-right: 15px;
        }
        
        .p-20 {
            padding: 20px 0;
        }
        
        .p-40 {
            padding: 40px 0;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .about-main-title {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .abt-number {
                width: 50px;
                height: 50px;
                line-height: 50px;
                font-size: 1rem;
                margin-right: 15px;
            }
            
            .abt-us-2 {
                width: calc(100% - 75px);
            }
        }
    </style>
</head>
<body>
    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1 class="about-main-title">
                "We make trading available for everybody"
            </h1>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-building">  
                        <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Our Office">
                    </div>
                    <div class="p-20"></div>
                    <div class="abt-us-write">
                        <h1 class="heading-about">  
                            <span>About</span>  
                        </h1>
                        <br />
                        <p class="t-p">
                            Swift Meta Trade is founded with vision to create 100% transparent digital trading experience for its clients.
                        </p>
                        <br />
                        <p class="t-p">
                            We provide easy to use trading platform and spend lots of time providing education for our customers. 
                        </p>
                        <br /> 
                        <p class="t-p">
                            Our company is interested in successful and prosperous traders who will create high trading volume. 
                            We are proud that we helped many customers to make revenue.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="abt-us-write">
                        <h1 class="our-value">
                            <span>Our Values</span> 
                        </h1>
                        <div class="p-20"></div>
                        
                        <div class="value-item">
                            <span class="abt-number">01</span> 
                            <span class="t-p abt-us-2">
                                <b class="white">Clients:</b> 
                                Providing best customer service is our primary value. More than 100 account managers are focused on needs of our clients.
                            </span>
                        </div>
                        
                        <div class="value-item">
                            <span class="abt-number">02</span> 
                            <span class="t-p abt-us-2">
                                <b class="white">Reliability:</b> 
                                Being industry leader we provide our clients with extra solidity. We are doing more than anyone else to satisfy needs of our clients. 
                            </span>
                        </div>
                        
                        <div class="value-item">
                            <span class="abt-number">03</span> 
                            <span class="t-p abt-us-2">
                                <b class="white">Simplicity:</b> 
                                Everybody can become a trader with our easiest to use trading platform. Available on all modern platforms: Web, Windows, MacOS, iPhone, iPad and Android.
                            </span>
                        </div>
                        
                        <div class="value-item">
                            <span class="abt-number">04</span> 
                            <span class="t-p abt-us-2">
                                <b class="white">Speed:</b> 
                                We provide fastest trading using cutting-edge technologies. No delays in order executions and lags in user interface.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section section-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <h1 class="section-title">About Our Company</h1>
                    <p class="t-p text-center">
                        Swift Meta Trade is an Optimal Wealth Management Company with emphasis on Wealth Management, Wealth Creation, Trades and Digital Assets usage. We offer various insured services capable of generating and returning good profit yield on crypto assets in the Blockchain through trading on a wide range of Instrument Categories. Swift Meta Trade has qualified financiers/traders that manage and provide financial consulting services to her investors. We pride ourselves with a world class professional customer service, unique trading strategies, optimum transparency and fidelity. Funds Invested with Swift Meta Trade can be Withdrawn, Transferred or Reinvested at will.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h4 class="feature-title">Multiplatform</h4>
                        <p class="t-p">Our trading platform is available on all devices</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-title">Security Standards</h4>
                        <p class="t-p">Verified by Visa and MasterCard. All data is encrypted with strongest cryptographic algorithm.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="feature-title">Accurate Quotes</h4>
                        <p class="t-p">Real-time market data provided by leading analytical agencies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="p-40">
                        <h3><i class="fas fa-users value-icon"></i><b>Client Oriented</b></h3>
                        <p class="t-p">We serve as if we are serving ourselves, we value the feedback and use it to improve our work.</p>
                        <br />
                        
                        <h3><i class="fas fa-chart-pie value-icon"></i><b>Good ROI Oriented</b></h3>
                        <p class="t-p">We carefully chose the best and most profitable trading methods to get amazing results.</p>
                        <br />
                        
                        <h3><i class="fas fa-expand value-icon"></i><b>Expansion / Growth</b></h3>
                        <p class="t-p">We make ourselves known in the community; we create long term relations, while constantly expanding. Therefore, we are always bringing in more people to work for us.</p>
                        <br />
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="text-center p-40">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Certificate" class="img-fluid rounded" style="max-height: 400px;">
                        <button type="button" class="btn btn-primary mt-3" style="background-color: var(--primary); border-color: var(--primary);">
                            View Broker License
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('home.footer')