@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">      <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Fund Your Account</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet</a></li>
                                <li class="breadcrumb-item active">Funding</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Success Messages -->
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <i class="mdi mdi-check-circle-outline me-2"></i> {{ session('status') }}
                    </div>
                    @endif
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <i class="mdi mdi-check-circle-outline me-2"></i> {{$message}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Main Funding Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="mdi mdi-robot-outline me-2 text-primary"></i>
                                Deposit Funds
                            </h4>
                            <p class="card-title-desc mb-0">Choose your preferred payment method</p>
                        </div>
                        <div class="card-body">
                            <form accept-charset="utf-8" method="post" action="{{route('user.deposit.get')}}">
                                {{csrf_field()}}
                                
                                <!-- Amount Section -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label for="amount" class="form-label fw-semibold">Deposit Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light fw-semibold">{{Auth::user()->currency}}</span>
                                            <input type="number" name="amount" id="amount" placeholder="Enter amount" class="form-control" required>
                                        </div>
                                        <div class="form-text text-muted">
                                            <i class="mdi mdi-information-outline me-1"></i>
                                            Minimum deposit: {{Auth::user()->currency}}50
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Methods Section -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Payment Method</label>
                                        <div class="row g-3">
                                            <!-- Bitcoin -->
                                            <div class="col-md-6">
                                                <div class="payment-option">
                                                    <input type="radio" name="item" value="Bitcoin" id="payWithBitcoin" class="payment-radio" required />
                                                    <label for="payWithBitcoin" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="fab fa-btc text-warning"></i>
                                                        </div>
                                                        <div class="payment-info">
                                                            <div class="payment-name">Bitcoin</div>
                                                            <div class="payment-desc">BTC Network</div>
                                                        </div>
                                                        <div class="payment-badge">
                                                            <span class="badge bg-warning-subtle text-warning">Fast</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Ethereum -->
                                            <div class="col-md-6">
                                                <div class="payment-option">
                                                    <input type="radio" name="item" value="Ethereum" id="payWithEthereum" class="payment-radio" required />
                                                    <label for="payWithEthereum" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="fab fa-ethereum text-primary"></i>
                                                        </div>
                                                        <div class="payment-info">
                                                            <div class="payment-name">Ethereum</div>
                                                            <div class="payment-desc">ETH Network</div>
                                                        </div>
                                                        <div class="payment-badge">
                                                            <span class="badge bg-primary-subtle text-primary">Smart</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- USDT -->
                                            <div class="col-md-6">
                                                <div class="payment-option">
                                                    <input type="radio" name="item" value="Usdt" id="payWithUsdt" class="payment-radio" required />
                                                    <label for="payWithUsdt" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="mdi mdi-currency-usd text-success"></i>
                                                        </div>
                                                        <div class="payment-info">
                                                            <div class="payment-name">USDT</div>
                                                            <div class="payment-desc">Tether</div>
                                                        </div>
                                                        <div class="payment-badge">
                                                            <span class="badge bg-success-subtle text-success">Stable</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Bank -->
                                            <div class="col-md-6">
                                                <div class="payment-option">
                                                    <input type="radio" name="item" value="Bank" id="payWithBank" class="payment-radio" required />
                                                    <label for="payWithBank" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="mdi mdi-bank text-info"></i>
                                                        </div>
                                                        <div class="payment-info">
                                                            <div class="payment-name">Bank Transfer</div>
                                                            <div class="payment-desc">Wire Transfer</div>
                                                        </div>
                                                        <div class="payment-badge">
                                                            <span class="badge bg-info-subtle text-info">Secure</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Security Features -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="security-features">
                                            <div class="row text-center">
                                                <div class="col-md-4 mb-2">
                                                    <div class="feature-item">
                                                        <i class="mdi mdi-shield-check text-success fs-4"></i>
                                                        <div class="feature-text">Bank-Level Security</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <div class="feature-item">
                                                        <i class="mdi mdi-lock-outline text-primary fs-4"></i>
                                                        <div class="feature-text">256-bit Encryption</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <div class="feature-item">
                                                        <i class="mdi mdi-zap-outline text-warning fs-4"></i>
                                                        <div class="feature-text">Instant Processing</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-2">
                                            <i class="mdi mdi-arrow-right me-2"></i>
                                            Continue to Payment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <a href="{{route('user.crypto.buy')}}" class="card quick-action-card">
                                <div class="card-body text-center p-3">
                                    <i class="mdi mdi-currency-btc text-warning fs-2 mb-2"></i>
                                    <h6 class="mb-1">Buy Crypto</h6>
                                    <small class="text-muted">Purchase cryptocurrencies</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="#" class="card quick-action-card">
                                <div class="card-body text-center p-3">
                                    <i class="mdi mdi-help-circle-outline text-info fs-2 mb-2"></i>
                                    <h6 class="mb-1">Get Help</h6>
                                    <small class="text-muted">Support & guidance</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="text-center mt-4">
                        <p class="text-muted mb-1">
                            <i class="mdi mdi-information-outline me-1"></i>
                            All transactions are secured and encrypted
                        </p>
                        <p class="text-muted">
                            Need assistance? <a href="#" class="text-decoration-underline">Contact support</a>
                        </p>
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
    /* Payment Options Styling */
    .payment-option {
        margin-bottom: 0.5rem;
    }

    .payment-radio {
        display: none;
    }

    .payment-label {
        display: flex;
        align-items: center;
        padding: 1rem;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
        margin: 0;
    }

    .payment-radio:checked + .payment-label {
        border-color: #4361ee;
        background: rgba(67, 97, 238, 0.05);
        box-shadow: 0 2px 8px rgba(67, 97, 238, 0.15);
    }

    .payment-label:hover {
        border-color: #4361ee;
        transform: translateY(-1px);
    }

    .payment-icon {
        width: 48px;
        height: 48px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        font-size: 1.5rem;
    }

    .payment-info {
        flex: 1;
    }

    .payment-name {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #495057;
    }

    .payment-desc {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .payment-badge {
        margin-left: auto;
    }

    /* Security Features */
    .security-features {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        border: 1px solid #e9ecef;
    }

    .feature-item {
        padding: 0.5rem;
    }

    .feature-text {
        font-size: 0.875rem;
        color: #6c757d;
        margin-top: 0.5rem;
    }

    /* Quick Action Cards */
    .quick-action-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        text-decoration: none;
        color: inherit;
    }

    .quick-action-card:hover {
        border-color: #4361ee;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        color: inherit;
    }

    /* AI Assistant */
    .ai-assistant {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        z-index: 1000;
        animation: float 3s ease-in-out infinite;
        transition: all 0.3s ease;
    }

    .ai-assistant:hover {
        transform: scale(1.1);
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .ai-chat {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 300px;
        background: white;
        border-radius: 12px;
        border: 1px solid #e9ecef;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        z-index: 999;
        transform: translateY(20px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .ai-chat.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .ai-chat-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e9ecef;
    }

    .ai-message {
        background: rgba(67, 97, 238, 0.05);
        padding: 10px 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 14px;
        border: 1px solid rgba(67, 97, 238, 0.1);
    }

    .progress-bar {
        height: 4px;
        background: #e9ecef;
        border-radius: 2px;
        overflow: hidden;
        margin: 15px 0;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #4361ee, #3a0ca3);
        border-radius: 2px;
        width: 0%;
        animation: loading 2s infinite;
    }

    @keyframes loading {
        0% { width: 0%; }
        50% { width: 100%; }
        100% { width: 0%; }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .payment-label {
            padding: 0.75rem;
        }
        
        .payment-icon {
            width: 40px;
            height: 40px;
            font-size: 1.25rem;
            margin-right: 0.75rem;
        }
        
        .ai-chat {
            width: 280px;
            right: 15px;
        }
        
        .security-features {
            padding: 1rem;
        }
    }

    @media (max-width: 576px) {
        .payment-label {
            flex-direction: column;
            text-align: center;
        }
        
        .payment-icon {
            margin-right: 0;
            margin-bottom: 0.5rem;
        }
        
        .payment-info {
            margin-bottom: 0.5rem;
        }
        
        .payment-badge {
            margin-left: 0;
        }
    }
</style>

<script>
    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    // Payment method selection enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const paymentRadios = document.querySelectorAll('.payment-radio');
        
        paymentRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                // Remove all selected states
                document.querySelectorAll('.payment-label').forEach(label => {
                    label.classList.remove('selected');
                });
                
                // Add selected state to current
                if (this.checked) {
                    const label = this.nextElementSibling;
                    label.classList.add('selected');
                }
            });
        });

        // Quick action card hover effects
        const quickCards = document.querySelectorAll('.quick-action-card');
        quickCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Amount input validation
        const amountInput = document.getElementById('amount');
        if (amountInput) {
            amountInput.addEventListener('input', function() {
                const value = parseFloat(this.value);
                if (value < 50) {
                    this.style.borderColor = '#dc3545';
                } else {
                    this.style.borderColor = '#4361ee';
                }
            });
        }
    });

    // Enhanced copy function
    function copyAddress(id, currency) {
        var copyText = document.getElementById(id);
        copyText.select();
        document.execCommand("copy");
        
        // Show notification
        const notification = document.createElement('div');
        notification.style.position = 'fixed';
        notification.style.bottom = '20px';
        notification.style.right = '20px';
        notification.style.backgroundColor = '#1e293b';
        notification.style.color = 'white';
        notification.style.padding = '12px 20px';
        notification.style.borderRadius = '8px';
        notification.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
        notification.style.zIndex = '1000';
        notification.style.display = 'flex';
        notification.style.alignItems = 'center';
        notification.style.fontSize = '14px';
        notification.innerHTML = `
            <i class="mdi mdi-check-circle text-success me-2"></i>
            ${currency} address copied to clipboard
        `;
        
        document.body.appendChild(notification);
        
        // Remove notification after 3 seconds
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 500);
        }, 3000);
    }
</script>

@include('user.footer')