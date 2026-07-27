@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Buy Crypto</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet</a></li>
                                <li class="breadcrumb-item active">Buy Crypto</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- Navigation Tabs -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <ul class="nav nav-tabs nav-tabs-custom justify-content-center" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('user.crypto.buy') }}">
                                                <i class="mdi mdi-arrow-down-circle-outline me-1"></i>
                                                Buy Crypto
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="mdi mdi-arrow-up-circle-outline me-1"></i>
                                                Sell Crypto
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Title Section -->
                            <div class="row mb-4">
                                <div class="col-12 text-center">
                                    <h3 class="card-title mb-2">Get Your Crypto Instantly</h3>
                                    <p class="text-muted">Choose from our trusted crypto exchange partners</p>
                                </div>
                            </div>

                            <!-- Exchange Buttons -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="exchange-buttons">
                                        <!-- LocalBitcoins -->
                                        <div class="exchange-item mb-3">
                                            <a href="https://www.localbitcoins.com/" target="_blank" class="btn btn-primary btn-lg w-100 exchange-btn">
                                                <div class="exchange-content">
                                                    <div class="exchange-icon">
                                                        <i class="mdi mdi-currency-btc"></i>
                                                    </div>
                                                    <div class="exchange-info">
                                                        <div class="exchange-name">LocalBitcoins</div>
                                                        <div class="exchange-desc">Peer-to-peer Bitcoin trading</div>
                                                    </div>
                                                    <div class="exchange-arrow">
                                                        <i class="mdi mdi-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Bitcoin.com -->
                                        <div class="exchange-item mb-3">
                                            <a href="https://www.bitcoin.com/" target="_blank" class="btn btn-outline-primary btn-lg w-100 exchange-btn">
                                                <div class="exchange-content">
                                                    <div class="exchange-icon">
                                                        <i class="mdi mdi-bitcoin"></i>
                                                    </div>
                                                    <div class="exchange-info">
                                                        <div class="exchange-name">Bitcoin.com</div>
                                                        <div class="exchange-desc">Official Bitcoin exchange</div>
                                                    </div>
                                                    <div class="exchange-arrow">
                                                        <i class="mdi mdi-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Binance -->
                                        <div class="exchange-item mb-3">
                                            <a href="https://www.binance.com/" target="_blank" class="btn btn-primary btn-lg w-100 exchange-btn">
                                                <div class="exchange-content">
                                                    <div class="exchange-icon">
                                                        <i class="mdi mdi-chart-line"></i>
                                                    </div>
                                                    <div class="exchange-info">
                                                        <div class="exchange-name">Binance</div>
                                                        <div class="exchange-desc">World's largest crypto exchange</div>
                                                    </div>
                                                    <div class="exchange-arrow">
                                                        <i class="mdi mdi-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Crypto.com -->
                                        <div class="exchange-item mb-3">
                                            <a href="https://www.crypto.com/" target="_blank" class="btn btn-outline-primary btn-lg w-100 exchange-btn">
                                                <div class="exchange-content">
                                                    <div class="exchange-icon">
                                                        <i class="mdi mdi-shield-check"></i>
                                                    </div>
                                                    <div class="exchange-info">
                                                        <div class="exchange-name">Crypto.com</div>
                                                        <div class="exchange-desc">Secure crypto trading platform</div>
                                                    </div>
                                                    <div class="exchange-arrow">
                                                        <i class="mdi mdi-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="info-section">
                                        <div class="row text-center">
                                            <div class="col-md-4 mb-3">
                                                <div class="info-item">
                                                    <i class="mdi mdi-shield-check-outline text-success fs-2 mb-2"></i>
                                                    <h6>Secure Trading</h6>
                                                    <p class="text-muted mb-0">All exchanges are verified and secure</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="info-item">
                                                    <i class="mdi mdi-rocket-launch-outline text-primary fs-2 mb-2"></i>
                                                    <h6>Instant Access</h6>
                                                    <p class="text-muted mb-0">Start trading immediately after purchase</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="info-item">
                                                    <i class="mdi mdi-headset text-info fs-2 mb-2"></i>
                                                    <h6>24/7 Support</h6>
                                                    <p class="text-muted mb-0">Get help from exchange support teams</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<style>
    /* Navigation Tabs */
    .nav-tabs-custom {
        border-bottom: 2px solid #e9ecef;
    }

    .nav-tabs-custom .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        padding: 1rem 2rem;
        margin: 0 0.5rem;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
    }

    .nav-tabs-custom .nav-link.active {
        color: #4361ee;
        background-color: white;
        border-bottom: 3px solid #4361ee;
    }

    .nav-tabs-custom .nav-link:hover {
        color: #4361ee;
        background-color: rgba(67, 97, 238, 0.05);
    }

    /* Exchange Buttons */
    .exchange-buttons {
        max-width: 500px;
        margin: 0 auto;
    }

    .exchange-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        padding: 1.25rem 1.5rem;
        border-radius: 12px;
        text-align: left;
        text-decoration: none;
    }

    .exchange-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        text-decoration: none;
    }

    .exchange-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .exchange-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-right: 1rem;
        background: rgba(255, 255, 255, 0.2);
    }

    .exchange-info {
        flex: 1;
        text-align: left;
    }

    .exchange-name {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.25rem;
    }

    .exchange-desc {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.8);
        opacity: 0.9;
    }

    .btn-outline-primary .exchange-desc {
        color: #6c757d;
    }

    .exchange-arrow {
        font-size: 1.25rem;
        opacity: 0.8;
        transition: transform 0.3s ease;
    }

    .exchange-btn:hover .exchange-arrow {
        transform: translateX(5px);
    }

    /* Info Section */
    .info-section {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        border: 1px solid #e9ecef;
    }

    .info-item {
        padding: 1rem;
    }

    .info-item h6 {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #495057;
    }

    /* Button Variants */
    .btn-primary {
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border: none;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #3a56d4, #2d0685);
        transform: translateY(-2px);
    }

    .btn-outline-primary {
        border: 2px solid #4361ee;
        color: #4361ee;
        background: white;
    }

    .btn-outline-primary:hover {
        background: #4361ee;
        color: white;
        transform: translateY(-2px);
    }

    /* Card Styling */
    .card {
        border: 1px solid #e9ecef;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .card-body {
        padding: 2.5rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
        
        .nav-tabs-custom .nav-link {
            padding: 0.75rem 1rem;
            margin: 0 0.25rem;
            font-size: 0.875rem;
        }
        
        .exchange-btn {
            padding: 1rem 1.25rem;
        }
        
        .exchange-icon {
            width: 40px;
            height: 40px;
            font-size: 1.25rem;
            margin-right: 0.75rem;
        }
        
        .info-section {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .exchange-content {
            flex-direction: column;
            text-align: center;
        }
        
        .exchange-icon {
            margin-right: 0;
            margin-bottom: 0.75rem;
        }
        
        .exchange-info {
            text-align: center;
            margin-bottom: 0.75rem;
        }
        
        .exchange-arrow {
            display: none;
        }
        
        .nav-tabs-custom .nav-link {
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
        }
    }
</style>

<script>
    // Add hover effects to exchange buttons
    document.addEventListener('DOMContentLoaded', function() {
        const exchangeBtns = document.querySelectorAll('.exchange-btn');
        
        exchangeBtns.forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 5px 15px rgba(67, 97, 238, 0.3)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });

        // Add loading state to buttons
        exchangeBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                const originalContent = this.innerHTML;
                this.innerHTML = `
                    <div class="exchange-content">
                        <div class="exchange-icon">
                            <i class="mdi mdi-loading mdi-spin"></i>
                        </div>
                        <div class="exchange-info">
                            <div class="exchange-name">Redirecting...</div>
                            <div class="exchange-desc">Please wait</div>
                        </div>
                        <div class="exchange-arrow">
                            <i class="mdi mdi-arrow-right"></i>
                        </div>
                    </div>
                `;
                
                // Reset after 2 seconds if still on page
                setTimeout(() => {
                    this.innerHTML = originalContent;
                }, 2000);
            });
        });

        // Tab functionality
        const navLinks = document.querySelectorAll('.nav-tabs-custom .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    // Show coming soon message
                    alert('Sell functionality coming soon!');
                }
            });
        });
    });
</script>

@include('user.footer')