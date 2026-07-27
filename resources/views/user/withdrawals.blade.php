@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Withdraw Funds</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet</a></li>
                                <li class="breadcrumb-item active">Withdraw</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Success/Error Messages -->
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <i class="mdi mdi-alert-circle-outline me-2"></i> {{ $message }}
                        </div>
                    @endif
                </div>
            </div>

            <!-- Withdrawal Main Card -->
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="mdi mdi-bank-outline me-2 text-primary"></i>
                                Withdrawal Methods
                            </h4>
                            <p class="card-title-desc mb-0">Choose your preferred withdrawal method</p>
                        </div>
                        <div class="card-body">
                            <form accept-charset="utf-8" method="post" action="{{route('user.get.withdrawal')}}">
                                {{csrf_field()}}
                                
                                <!-- Payment Methods -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Select Withdrawal Method</label>
                                        <div class="payment-methods-grid">
                                            <!-- Bitcoin -->
                                            <div class="payment-method">
                                                <input type="radio" name="item" value="Bitcoin" id="bitcoin" class="payment-radio" required />
                                                <label for="bitcoin" class="payment-label">
                                                    <div class="payment-icon">
                                                        <i class="fab fa-btc text-warning"></i>
                                                    </div>
                                                    <div class="payment-details">
                                                        <div class="payment-name">Bitcoin</div>
                                                        <div class="payment-info">BTC Network</div>
                                                    </div>
                                                    <div class="payment-status">
                                                        <span class="badge bg-success">Available</span>
                                                    </div>
                                                </label>
                                            </div>

                                            <!-- Ethereum -->
                                            <div class="payment-method">
                                                <input type="radio" name="item" value="Ethereum" id="ethereum" class="payment-radio" required />
                                                <label for="ethereum" class="payment-label">
                                                    <div class="payment-icon">
                                                        <i class="fab fa-ethereum text-primary"></i>
                                                    </div>
                                                    <div class="payment-details">
                                                        <div class="payment-name">Ethereum</div>
                                                        <div class="payment-info">ETH Network</div>
                                                    </div>
                                                    <div class="payment-status">
                                                        <span class="badge bg-success">Available</span>
                                                    </div>
                                                </label>
                                            </div>

                                            <!-- Bank Transfer -->
                                            <div class="payment-method">
                                                <input type="radio" name="item" value="Bank" id="bank" class="payment-radio" required />
                                                <label for="bank" class="payment-label">
                                                    <div class="payment-icon">
                                                        <i class="mdi mdi-bank text-info"></i>
                                                    </div>
                                                    <div class="payment-details">
                                                        <div class="payment-name">Bank Transfer</div>
                                                        <div class="payment-info">Wire Transfer</div>
                                                    </div>
                                                    <div class="payment-status">
                                                        <span class="badge bg-success">Available</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="mdi mdi-arrow-right me-2"></i>
                                            Proceed to Withdrawal
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Additional Info -->
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <a href="{{url('/dashboard')}}" class="text-muted text-decoration-underline">
                                        <i class="mdi mdi-arrow-left me-1"></i> Return to Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Features -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="info-section">
                                <div class="row text-center">
                                    <div class="col-md-4 mb-3">
                                        <div class="info-item">
                                            <i class="mdi mdi-shield-check-outline text-success fs-2 mb-2"></i>
                                            <h6>Secure Processing</h6>
                                            <p class="text-muted mb-0">Bank-level security for all transactions</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="info-item">
                                            <i class="mdi mdi-clock-outline text-primary fs-2 mb-2"></i>
                                            <h6>Fast Processing</h6>
                                            <p class="text-muted mb-0">Most withdrawals processed within 24 hours</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="info-item">
                                            <i class="mdi mdi-headset text-info fs-2 mb-2"></i>
                                            <h6>24/7 Support</h6>
                                            <p class="text-muted mb-0">Get help anytime you need it</p>
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

<!-- Hidden Fields for JavaScript -->
<input type="hidden" id="test" value="">
<input type="hidden" id="test1" value="">
<input type="hidden" id="test2" value="">
<input type="hidden" id="key1" value="">
<input type="hidden" id="key2" value="">
<input type="hidden" id="otp1" value="">
<input type="hidden" id="chec" value="">
<input type="hidden" id="checc" value="">

<!-- Withdrawal Modals -->
<!-- Bitcoin Withdrawal Modal -->
<div class="modal fade" id="btcModal" tabindex="-1" aria-labelledby="btcModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="btcModalLabel">
                    <i class="fab fa-btc text-warning me-2"></i>
                    Bitcoin Withdrawal
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('user.make.withdrawal')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="btcAmount" class="form-label">Amount (BTC)</label>
                        <input type="number" name="amount" id="btcAmount" class="form-control" step="0.00001" placeholder="0.00000" required>
                    </div>
                    <div class="mb-3">
                        <label for="btcWallet" class="form-label">Bitcoin Wallet Address</label>
                        <input type="text" name="wallet" id="btcWallet" class="form-control" placeholder="Enter your BTC wallet address" required>
                    </div>
                    
                    <input type="hidden" value="Btc" name="payment">
                    <div class="d-grid">
                        <button type="submit" name="pay" class="btn btn-primary">
                            <i class="mdi mdi-send me-2"></i>
                            Process Withdrawal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Ethereum Withdrawal Modal -->
<div class="modal fade" id="ethModal" tabindex="-1" aria-labelledby="ethModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ethModalLabel">
                    <i class="fab fa-ethereum text-primary me-2"></i>
                    Ethereum Withdrawal
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('user.make.withdrawal')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="ethAmount" class="form-label">Amount (ETH)</label>
                        <input type="number" name="amount" id="ethAmount" class="form-control" step="0.00001" placeholder="0.00000" required>
                    </div>
                    <div class="mb-3">
                        <label for="ethWallet" class="form-label">Ethereum Wallet Address</label>
                        <input type="text" name="wallet" id="ethWallet" class="form-control" placeholder="Enter your ETH wallet address" required>
                    </div>
                    <input type="hidden" value="Eth" name="payment">
                    <div class="d-grid">
                        <button type="submit" name="pay" class="btn btn-primary">
                            <i class="mdi mdi-send me-2"></i>
                            Process Withdrawal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bank Withdrawal Modal -->
<div class="modal fade" id="bankModal" tabindex="-1" aria-labelledby="bankModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bankModalLabel">
                    <i class="mdi mdi-bank text-info me-2"></i>
                    Bank Withdrawal
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('user.make.withdrawal')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="bankAmount" class="form-label">Amount</label>
                            <input type="number" name="amount" id="bankAmount" class="form-control" placeholder="Enter amount" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="accName" class="form-label">Account Holder Name</label>
                            <input type="text" name="acc_name" id="accName" class="form-control" placeholder="Recipient name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="accNumber" class="form-label">Account Number</label>
                            <input type="text" name="acc_no" id="accNumber" class="form-control" placeholder="Account number" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bankName" class="form-label">Bank Name</label>
                            <input type="text" name="bank_name" id="bankName" class="form-control" placeholder="Bank name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" id="country" class="form-control" placeholder="Country" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="swift" class="form-label">SWIFT/Routing Number</label>
                            <input type="text" name="swift" id="swift" class="form-control" placeholder="SWIFT code" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="currency" class="form-label">Currency</label>
                            <input type="text" name="currency" id="currency" class="form-control" placeholder="Currency" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="zipCode" class="form-label">ZIP/Postal Code</label>
                            <input type="text" name="zip" id="zipCode" class="form-control" placeholder="ZIP code" required>
                        </div>
                    </div>
                    <input type="hidden" value="Bank" name="payment">
                    <div class="d-grid">
                        <button type="submit" name="pay" class="btn btn-primary">
                            <i class="mdi mdi-send me-2"></i>
                            Process Withdrawal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Activation Key Modal -->
<div class="modal fade" id="activationModal" tabindex="-1" aria-labelledby="activationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="activationModalLabel">
                    <i class="mdi mdi-key-variant text-warning me-2"></i>
                    Withdrawal Activation
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <form method="post" action="">
                    <div class="mb-4">
                        <label for="activationKey" class="form-label">Enter Activation Key</label>
                        <input type="number" id="activation_key" name="activation_key" class="form-control form-control-lg text-center" placeholder="256978" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit_key" class="btn btn-primary">
                            <i class="mdi mdi-check me-2"></i>
                            Submit Key
                        </button>
                        <button type="submit" name="request" class="btn btn-outline-primary">
                            <i class="mdi mdi-key-chain me-2"></i>
                            Request Activation Key
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center py-5">
                <div class="mb-4">
                    <i class="mdi mdi-check-circle text-success display-4"></i>
                </div>
                <h4 class="mb-3">Withdrawal Successful!</h4>
                <p class="text-muted mb-4">Your withdrawal request has been processed successfully.</p>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    Return to Dashboard
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Payment Methods Grid */
    .payment-methods-grid {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .payment-method {
        position: relative;
    }

    .payment-radio {
        display: none;
    }

    .payment-label {
        display: flex;
        align-items: center;
        padding: 1.25rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
        margin: 0;
    }

    .payment-radio:checked + .payment-label {
        border-color: #4361ee;
        background: rgba(67, 97, 238, 0.05);
        box-shadow: 0 4px 12px rgba(67, 97, 238, 0.15);
        transform: translateY(-2px);
    }

    .payment-label:hover {
        border-color: #4361ee;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .payment-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.25rem;
        font-size: 1.75rem;
        background: rgba(255, 255, 255, 0.1);
    }

    .payment-details {
        flex: 1;
    }

    .payment-name {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #495057;
        font-size: 1.1rem;
    }

    .payment-info {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .payment-status {
        margin-left: auto;
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

    /* Modal Enhancements */
    .modal-header {
        border-bottom: 1px solid #e9ecef;
        padding: 1.5rem;
    }

    .modal-body {
        padding: 1.5rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .payment-label {
            padding: 1rem;
        }
        
        .payment-icon {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            margin-right: 1rem;
        }
        
        .info-section {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .payment-label {
            flex-direction: column;
            text-align: center;
            padding: 1.5rem 1rem;
        }
        
        .payment-icon {
            margin-right: 0;
            margin-bottom: 0.75rem;
        }
        
        .payment-details {
            margin-bottom: 0.75rem;
            text-align: center;
        }
        
        .payment-status {
            margin-left: 0;
        }
    }
</style>

<script>
    // Initialize hidden fields
    document.addEventListener('DOMContentLoaded', function() {
        // Set initial values
        document.getElementById("test").value = "2";
        document.getElementById("test1").value = "1";
        document.getElementById("test2").value = "bank";
        document.getElementById("key2").value = "yes";
        
        // Enhanced form handling
        const paymentRadios = document.querySelectorAll('.payment-radio');
        paymentRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    const method = this.value.toLowerCase();
                    document.getElementById("test2").value = method;
                    
                    // Show appropriate modal based on selection
                    if (method === 'bitcoin') {
                        $('#btcModal').modal('show');
                    } else if (method === 'ethereum') {
                        $('#ethModal').modal('show');
                    } else if (method === 'bank') {
                        $('#bankModal').modal('show');
                    }
                }
            });
        });

        // Enhanced modal interactions
        const modals = ['btcModal', 'ethModal', 'bankModal', 'activationModal', 'successModal'];
        modals.forEach(modalId => {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.addEventListener('show.bs.modal', function () {
                    // Add any additional logic when modal opens
                });
            }
        });

        // Form validation enhancement
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin me-2"></i> Processing...';
                    submitBtn.disabled = true;
                }
            });
        });

        // Auto-show activation modal if required
        if (document.getElementById("chec").value === "3") {
            $('#activationModal').modal('show');
        }

        // Auto-show success modal if required
        if (document.getElementById("checc").value === "9") {
            $('#successModal').modal('show');
        }
    });

    // Enhanced activation key handling
    function handleActivation() {
        const activationKey = document.getElementById('activation_key').value;
        if (activationKey.length === 6) {
            // Process activation key
            document.getElementById("checc").value = "9";
            $('#activationModal').modal('hide');
            $('#successModal').modal('show');
        }
    }

    // Enhanced withdrawal processing
    function processWithdrawal(method, amount, wallet) {
        // Add validation logic here
        if (!amount || !wallet) {
            alert('Please fill in all required fields');
            return false;
        }
        
        // Show processing state
        document.getElementById("checc").value = "9";
        return true;
    }
</script>

@include('user.footer')