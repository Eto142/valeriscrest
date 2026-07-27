@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Swift Meta Trade</title>
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
        
        /* Contact Hero Section */
        .contact-hero {
            background: linear-gradient(rgba(2, 2, 28, 0.9), rgba(2, 2, 28, 0.8)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .contact-hero-content {
            position: relative;
            z-index: 2;
        }
        
        .contact-main-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .contact-subtitle {
            font-size: 1.3rem;
            color: var(--text-muted);
            max-width: 600px;
        }
        
        .flying-man {
            max-width: 400px;
            width: 100%;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        /* Section Styling */
        .section {
            padding: 80px 0;
        }
        
        /* Contact Form */
        .contact-form-container {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.12);
            border-color: var(--primary);
            color: var(--text-light);
            box-shadow: 0 0 0 0.2rem rgba(82, 175, 238, 0.25);
        }
        
        .form-control::placeholder {
            color: var(--text-muted);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn-primary-custom {
            background-color: var(--primary);
            border-color: var(--primary);
            color: var(--dark-bg);
            padding: 12px 40px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s;
            font-size: 1.1rem;
        }
        
        .btn-primary-custom:hover {
            background-color: #3a9bd5;
            border-color: #3a9bd5;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(82, 175, 238, 0.3);
        }
        
        /* Contact Info */
        .contact-info-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), #2a6b9c);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: white;
        }
        
        .contact-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary);
        }
        
        .contact-detail {
            color: var(--text-muted);
            margin-bottom: 5px;
        }
        
        .green {
            color: #28a745 !important;
        }
        
        /* Alerts */
        .alert-danger {
            color: #ffffff;
            background-color: #db4c4c;
            border-color: #f8b4b4;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .alert {
            position: relative;
            border: 1px solid transparent;
            line-height: 1.5;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .contact-main-title {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .contact-form-container {
                padding: 25px;
            }
            
            .flying-man {
                max-width: 300px;
                margin-top: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .contact-main-title {
                font-size: 2rem;
            }
            
            .contact-subtitle {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 contact-hero-content">
                    <h1 class="contact-main-title">Contact Us</h1>
                    <p class="contact-subtitle">
                        Get in touch with our team. We're here to help you with any questions about trading, investments, or our platform.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img class="flying-man" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Contact Support">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-container">
                        <h2 class="mb-4" style="color: var(--primary);">Send Us a Message</h2>
                        
                        <!-- Success/Error Messages would appear here -->
                        <!-- <div class="alert alert-success">Your message has been sent successfully!</div> -->
                        <!-- <div class="alert alert-danger">There was an error sending your message. Please try again.</div> -->
                        
                        <form method="POST">
                            <div class="mb-4">
                                <select class="form-control" id="select" name="question">
                                    <option value="Trading Question">Trading Question</option>
                                    <option value="Finance Question">Finance Question</option>
                                    <option value="Technical Question">Technical Question</option>
                                    <option value="Account Support">Account Support</option>
                                    <option value="Withdrawal Question">Withdrawal Question</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
                                </div>
                                <div class="col-md-6 mb-3" style="display: none">
                                    <input type="text" class="form-control" placeholder="Url" name="url">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <textarea class="form-control" placeholder="Your Message" name="message" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary-custom" id="submit" name="btn_save">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="contact-title">ADDRESS</h3>
                        <p class="contact-detail">165 Bragaw St</p>
                        <p class="contact-detail">Anchorage, Alaska 99508</p>
                        <p class="contact-detail">United States</p>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-title">EMAIL ADDRESS</h3>
                        <p class="contact-detail green">support@valeriscrest.com</p>
                        <p class="contact-detail green">info@valeriscrest.com</p>
                    </div>
                    
                    {{-- <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="contact-title">PHONE NUMBERS</h3>
                        <p class="contact-detail">+1 (555) 123-4567</p>
                        <p class="contact-detail">+44 20 7946 0958</p>
                    </div>
                     --}}
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="contact-title">BUSINESS HOURS</h3>
                        <p class="contact-detail">Monday - Friday: 9:00 - 18:00</p>
                        <p class="contact-detail">Saturday: 10:00 - 16:00</p>
                        <p class="contact-detail">Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="contact-form-container">
                <h2 class="mb-4" style="color: var(--primary);">Find Us</h2>
                <div style="border-radius: 10px; overflow: hidden; height: 400px; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center;">
                    <!-- In a real implementation, you would embed a Google Map here -->
                    <div style="text-align: center; padding: 20px;">
                        <i class="fas fa-map-marked-alt" style="font-size: 3rem; color: var(--primary); margin-bottom: 20px;"></i>
                        <h4>Interactive Map</h4>
                        <p class="text-muted">165 Bragaw St, Anchorage, Alaska 99508, United States</p>
                        <button class="btn btn-primary-custom mt-3">
                            <i class="fas fa-directions me-2"></i>Get Directions
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