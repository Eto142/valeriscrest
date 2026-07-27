@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Swift Meta Trade</title>
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
        
        /* FAQ Hero Section */
        .faq-hero {
            background: linear-gradient(rgba(2, 2, 28, 0.9), rgba(2, 2, 28, 0.8)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding: 150px 0 100px;
            text-align: center;
        }
        
        .faq-main-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            line-height: 1.2;
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
        
        /* FAQ Accordion */
        .faq-accordion .accordion-item {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        
        .faq-accordion .accordion-button {
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--text-light);
            font-weight: 600;
            font-size: 1.1rem;
            padding: 20px 25px;
            border: none;
            box-shadow: none;
        }
        
        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: rgba(82, 175, 238, 0.1);
            color: var(--primary);
            border-bottom: 1px solid var(--primary);
        }
        
        .faq-accordion .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2352afee'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .faq-accordion .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2352afee'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .faq-accordion .accordion-body {
            background-color: rgba(255, 255, 255, 0.02);
            color: var(--text-muted);
            padding: 20px 25px;
            font-size: 1rem;
            line-height: 1.7;
        }
        
        .faq-category {
            font-size: 2rem;
            font-weight: 700;
            margin: 60px 0 30px;
            text-align: center;
            color: var(--primary);
            position: relative;
        }
        
        .faq-category:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        .t-p {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        .p-20 {
            padding: 20px 0;
        }
        
        .p-40 {
            padding: 40px 0;
        }
        
        /* Contact CTA */
        .contact-cta {
            background: linear-gradient(135deg, var(--primary), #2a6b9c);
            border-radius: 15px;
            padding: 50px;
            text-align: center;
            margin: 60px 0;
        }
        
        .contact-cta h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .contact-cta p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn-primary-custom {
            background-color: var(--dark-bg);
            border-color: var(--dark-bg);
            color: var(--text-light);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            background-color: rgba(2, 2, 28, 0.9);
            border-color: rgba(2, 2, 28, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .faq-main-title {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .faq-category {
                font-size: 1.8rem;
            }
            
            .contact-cta {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- FAQ Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <h1 class="faq-main-title">
                FAQ - Swift Meta Trade
            </h1>
        </div>
    </section>

    <!-- FAQ Introduction -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <h1 class="section-title">Frequently Asked Questions</h1>
                    <p class="t-p text-center">
                        Many of our customers have specific questions and concerns about our Professional trading services. Here are just a few of the questions asked and the answers to them.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="section section-dark">
        <div class="container">
            <!-- General Questions -->
            <h2 class="faq-category">General Questions</h2>
            <div class="faq-accordion">
                <div class="accordion" id="generalAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the risks and guarantees for your customers?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                There are risks in Trading all assets, that is exactly why there is Swift Meta Trade. All trade risks are borne by us. If there is any loss that stalls the trading, the Investor will be Refunded his Capital.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the minimum and the maximum amounts that I can invest?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                The minimum deposit is only $500, the maximum deposit is not limited.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the schedule for my profit accrual?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                Profit is returned to investments every 24 hours from their time of activation.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What are the payment systems you operate with?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                Deposits and Withdrawals to and from Swift Meta Trade are processed through Bitcoin & Ethereum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Deposits Questions -->
            <h2 class="faq-category">Deposits Questions</h2>
            <div class="faq-accordion">
                <div class="accordion" id="depositsAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Are my funds at risk in case of Insolvency/Bankruptcy?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#depositsAccordion">
                            <div class="accordion-body">
                                No, we have a Backup account holding funds in Relation to the amount of invested funds. Though we are confident of a foolproof trading technique, we will not claim to be perfect and that is why we offer an assurance to return 100% of investors Capital if there is any issue.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How to make a deposit?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#depositsAccordion">
                            <div class="accordion-body">
                                Read the terms of the proposed investment strategy and make a deposit to your desired plan using the deposit section in your account. Send the Indicated amount from any Bitcoin wallet or Ethereum Wallet to the wallet address generated for your account. The deposit will be credited as soon as the funds are confirmed.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Withdrawal Questions -->
            <h2 class="faq-category">Withdrawal Questions</h2>
            <div class="faq-accordion">
                <div class="accordion" id="withdrawalAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                When can I withdraw my profit?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#withdrawalAccordion">
                            <div class="accordion-body">
                                You can withdraw your profit from all of our investment plans once the trading period of such package elapses. You can also accumulate your profit to your desired amount till withdrawal. Always ensure to be in contact with your account manager. Also, our support is always available if assistance or enquiries needed.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact CTA -->
            <div class="contact-cta">
                <h3>Still Have Questions?</h3>
                <p>Can't find the answer you're looking for? Please chat with our friendly team.</p>
                <a href="#" class="btn btn-primary-custom">
                    <i class="fas fa-headset me-2"></i>Contact Support
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('home.footer')