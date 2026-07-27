@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown animate__faster">
                            💳 Bank Payment Instructions
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Deposit</a></li>
                                <li class="breadcrumb-item active">Bank Transfer</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Alert Section -->
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success animate__animated animate__bounceIn" role="alert">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success animate__animated animate__bounceIn">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ $message }}
                        </div>
                    @endif
                </div>
            </div>

            <!-- Payment Amount Banner -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card border-primary border-top-0 border-start-0 border-end-0 border-5 animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between text-center text-md-start">
                                <div class="mb-3 mb-md-0">
                                    <h5 class="text-muted mb-1">Payment Amount</h5>
                                    <h2 class="mb-0 text-primary">
                                        <i class="mdi mdi-currency-usd me-2"></i>${{ number_format($amount, 2) }}
                                    </h2>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="mdi mdi-clock-outline display-4 text-warning"></i>
                                    </div>
                                    {{-- <div>
                                        <small class="text-muted d-block">Payment Reference</small>
                                        <strong class="text-dark">TRX-{{ time() }}</strong>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Row -->
            <div class="row">
                <!-- Bank Details Section -->
                <div class="col-lg-8">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header bg-transparent">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">
                                    <i class="mdi mdi-bank me-2"></i>Bank Transfer Details
                                </h4>
                                <span class="badge bg-primary">Bank Transfer</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- Bank Logo and Info -->
                            <div class="text-center mb-4">
                                <div class="bank-logo mb-3">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-light-primary rounded-circle" style="width: 80px; height: 80px;">
                                        <i class="mdi mdi-bank display-4 text-primary"></i>
                                    </div>
                                </div>
                                <p class="text-muted mb-0">
                                    Please make a payment of <strong class="text-primary">${{ number_format($amount, 2) }}</strong> 
                                    to the account details below:
                                </p>
                            </div>

                            <!-- Bank Details Cards -->
                            <div class="row g-3">
                                @foreach($wallets as $wallet)
                                <div class="col-12">
                                    <div class="payment-detail-card">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-bank text-primary me-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <small class="text-muted d-block">Bank Name</small>
                                                <h6 class="mb-0">{{ $wallet->bankName }}</h6>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary copy-btn" onclick="copyToClipboard('{{ $wallet->bankName }}')">
                                                <i class="mdi mdi-content-copy me-1"></i> Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="payment-detail-card">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-account text-primary me-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <small class="text-muted d-block">Account Name</small>
                                                <h6 class="mb-0">{{ $wallet->accountName }}</h6>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary copy-btn" onclick="copyToClipboard('{{ $wallet->accountName }}')">
                                                <i class="mdi mdi-content-copy me-1"></i> Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="payment-detail-card">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-numeric text-primary me-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <small class="text-muted d-block">Account Number</small>
                                                <h6 class="mb-0">{{ $wallet->accountNumber }}</h6>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary copy-btn" onclick="copyToClipboard('{{ $wallet->accountNumber }}')">
                                                <i class="mdi mdi-content-copy me-1"></i> Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="payment-detail-card">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-swap-horizontal text-primary me-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <small class="text-muted d-block">SWIFT Code</small>
                                                <h6 class="mb-0">{{ $wallet->swiftCode }}</h6>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary copy-btn" onclick="copyToClipboard('{{ $wallet->swiftCode }}')">
                                                <i class="mdi mdi-content-copy me-1"></i> Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="payment-detail-card">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <small class="text-muted d-block">Bank Address</small>
                                                <h6 class="mb-0">{{ $wallet->bankAddress }}</h6>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary copy-btn" onclick="copyToClipboard('{{ $wallet->bankAddress }}')">
                                                <i class="mdi mdi-content-copy me-1"></i> Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer bg-light">
                            <div class="alert alert-info mb-0">
                                <div class="d-flex">
                                    <i class="mdi mdi-information-outline display-6 text-info me-3"></i>
                                    <div>
                                        <h6 class="alert-heading">Important Information</h6>
                                        <p class="mb-0">Please ensure to copy the details accurately to avoid payment errors. 
                            .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Proof Section -->
                <div class="col-lg-4">
                    <div class="card animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                        <div class="card-header bg-transparent">
                            <h4 class="card-title mb-0">
                                <i class="mdi mdi-cloud-upload me-2"></i>Upload Payment Proof
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('user.deposit.make') }}" method="POST" enctype="multipart/form-data" id="paymentForm">
                                @csrf
                                
                                <div class="mb-4">
                                    <div class="upload-area text-center p-4 border rounded" id="uploadArea">
                                        <i class="mdi mdi-file-image-outline display-4 text-muted mb-3"></i>
                                        <h5 class="text-muted mb-2">Drag & Drop or Click to Upload</h5>
                                        <p class="text-muted small mb-3">Upload your payment receipt/screenshot (Max: 5MB)</p>
                                        <div class="mb-3">
                                            <input type="file" name="image" id="paymentProof" class="form-control" accept="image/*,.pdf" required style="display: none;">
                                            <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('paymentProof').click()">
                                                <i class="mdi mdi-folder-open me-2"></i> Choose File
                                            </button>
                                        </div>
                                        <div id="fileInfo" class="small text-muted"></div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Payment Method</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-credit-card"></i></span>
                                        <input type="text" class="form-control" value="Bank Transfer" readonly>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" value="{{ number_format($amount, 2) }}" readonly>
                                    </div>
                                </div>

                                <input type="hidden" name="amount" value="{{ $amount }}">
                                <input type="hidden" name="payment_method" value="{{ $item }}">

                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                        <i class="mdi mdi-send-check me-2"></i> Confirm Payment
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="window.history.back()">
                                        <i class="mdi mdi-arrow-left me-2"></i> Back
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer bg-light">
                            <div class="small text-muted">
                                <i class="mdi mdi-shield-check text-success me-1"></i> 
                                Secure & encrypted file upload
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <button class="btn btn-outline-primary" onclick="copyAllDetails()">
                                    <i class="mdi mdi-content-copy me-2"></i> Copy All Details
                                </button>
                                <button class="btn btn-outline-info" onclick="downloadDetails()">
                                    <i class="mdi mdi-download me-2"></i> Download Details
                                </button>
                                <button class="btn btn-outline-success" onclick="shareDetails()">
                                    <i class="mdi mdi-share-variant me-2"></i> Share Details
                                </button>
                                <button class="btn btn-outline-warning" onclick="printDetails()">
                                    <i class="mdi mdi-printer me-2"></i> Print Details
                                </button>
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
    /* Animation Styles */
    .animate__animated {
        --animate-duration: 0.8s;
    }

    /* Payment Detail Cards */
    .payment-detail-card {
        padding: 16px;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        background: white;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .payment-detail-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(180deg, #4361ee, #3a0ca3);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .payment-detail-card:hover::before {
        opacity: 1;
    }

    .payment-detail-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        background: rgba(67, 97, 238, 0.02);
    }

    .copy-btn {
        transition: all 0.3s ease;
        min-width: 80px;
    }

    .copy-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 3px 10px rgba(67, 97, 238, 0.2);
    }

    .copy-btn.copied {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
    }

    /* Upload Area */
    .upload-area {
        background: rgba(67, 97, 238, 0.05);
        border: 2px dashed #4361ee;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .upload-area:hover {
        background: rgba(67, 97, 238, 0.1);
        border-color: #3a0ca3;
    }

    .upload-area.drag-over {
        background: rgba(67, 97, 238, 0.15);
        border-color: #3a0ca3;
        transform: scale(1.02);
    }

    /* Bank Logo */
    .bank-logo {
        position: relative;
    }

    .bank-logo::after {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        border-radius: 50%;
        background: linear-gradient(45deg, #4361ee, #3a0ca3, #7209b7);
        z-index: -1;
        opacity: 0.1;
        animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* File Info */
    #fileInfo {
        transition: all 0.3s ease;
    }

    /* Amount Display */
    .amount-display {
        font-size: 2.5rem;
        font-weight: 700;
        color: #4361ee;
        text-shadow: 0 2px 10px rgba(67, 97, 238, 0.2);
    }

    /* Submit Button */
    #submitBtn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    #submitBtn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    #submitBtn:hover::before {
        left: 100%;
    }

    #submitBtn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(67, 97, 238, 0.3);
    }

    /* Quick Actions */
    .quick-action-btn {
        min-width: 180px;
        transition: all 0.3s ease;
    }

    .quick-action-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Toast Notification */
    .custom-toast {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
        animation: slideInRight 0.5s ease, fadeOut 0.5s ease 2.5s forwards;
    }

    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes fadeOut {
        from { opacity: 1; }
        to { opacity: 0; }
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .payment-detail-card {
            padding: 12px;
        }
        
        .copy-btn {
            min-width: 60px;
            padding: 4px 8px;
            font-size: 0.875rem;
        }
        
        .amount-display {
            font-size: 2rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // File upload handling
        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('paymentProof');
        const fileInfo = document.getElementById('fileInfo');

        // Drag and drop functionality
        uploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('drag-over');
        });

        uploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('drag-over');
        });

        uploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('drag-over');
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                updateFileInfo();
            }
        });

        // File input change
        fileInput.addEventListener('change', updateFileInfo);

        function updateFileInfo() {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const fileSize = (file.size / (1024 * 1024)).toFixed(2); // Convert to MB
                
                if (fileSize > 5) {
                    showToast('File size must be less than 5MB', 'danger');
                    fileInput.value = '';
                    fileInfo.innerHTML = '';
                    return;
                }
                
                fileInfo.innerHTML = `
                    <div class="alert alert-success py-2">
                        <i class="mdi mdi-check-circle me-2"></i>
                        <strong>${file.name}</strong> (${fileSize} MB) uploaded successfully
                    </div>
                `;
                uploadArea.querySelector('h5').textContent = 'File Ready for Upload';
                uploadArea.querySelector('h5').classList.add('text-success');
            }
        }

        // Copy to clipboard function
        window.copyToClipboard = function(text) {
            navigator.clipboard.writeText(text).then(() => {
                const btn = event.target.closest('.copy-btn');
                if (btn) {
                    const originalText = btn.innerHTML;
                    btn.innerHTML = '<i class="mdi mdi-check me-1"></i> Copied';
                    btn.classList.add('copied');
                    
                    setTimeout(() => {
                        btn.innerHTML = originalText;
                        btn.classList.remove('copied');
                    }, 2000);
                }
                showToast('Copied to clipboard: ' + text, 'success');
            }).catch(err => {
                console.error('Failed to copy: ', err);
                showToast('Failed to copy text', 'danger');
            });
        };

        // Copy all details
        window.copyAllDetails = function() {
            let allText = '';
            const details = document.querySelectorAll('.payment-detail-card h6');
            details.forEach(detail => {
                const label = detail.previousElementSibling.textContent.trim();
                allText += `${label}: ${detail.textContent.trim()}\n`;
            });
            allText += `\nAmount: ${{ number_format($amount, 2) }}`;
            
            navigator.clipboard.writeText(allText).then(() => {
                showToast('All bank details copied to clipboard!', 'success');
            });
        };

        // Download details as text file
        window.downloadDetails = function() {
            let content = 'PAYMENT DETAILS\n';
            content += '================\n\n';
            content += `Amount: ${{ number_format($amount, 2) }}\n`;
            
            @foreach($wallets as $wallet)
            content += `Bank Name: {{ $wallet->bankName }}\n`;
            content += `Account Name: {{ $wallet->accountName }}\n`;
            content += `Account Number: {{ $wallet->accountNumber }}\n`;
            content += `SWIFT Code: {{ $wallet->swiftCode }}\n`;
            content += `Bank Address: {{ $wallet->bankAddress }}\n`;
            @endforeach
            
            content += '\nPlease keep this information secure.';
            
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `payment-details-{{ time() }}.txt`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
            
            showToast('Details downloaded successfully!', 'success');
        };

        // Share details
        window.shareDetails = function() {
            if (navigator.share) {
                navigator.share({
                    title: 'Payment Details',
                    text: `Payment of ${{ number_format($amount, 2) }} to {{ $wallet->bankName }}`,
                    url: window.location.href
                }).then(() => {
                    showToast('Details shared successfully!', 'success');
                });
            } else {
                copyAllDetails();
                showToast('Details copied to clipboard for sharing', 'info');
            }
        };

        // Print details
        window.printDetails = function() {
            const printContent = document.querySelector('.col-lg-8 .card').cloneNode(true);
            const printWindow = window.open('', '_blank');
            printWindow.document.write(`
                <html>
                    <head>
                        <title>Payment Details - ${{ number_format($amount, 2) }}</title>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
                        <style>
                            body { padding: 20px; }
                            @media print { .no-print { display: none; } }
                        </style>
                    </head>
                    <body>
                        <h1 class="mb-4">Payment Details</h1>
                        ${printContent.innerHTML}
                        <p class="text-muted mt-4">Printed on: ${new Date().toLocaleString()}</p>
                    </body>
                </html>
            `);
            printWindow.document.close();
            printWindow.focus();
            setTimeout(() => printWindow.print(), 500);
        };

        // Form submission handling
        const paymentForm = document.getElementById('paymentForm');
        const submitBtn = document.getElementById('submitBtn');
        
        paymentForm.addEventListener('submit', function(e) {
            if (!fileInput.files.length) {
                e.preventDefault();
                showToast('Please upload payment proof', 'warning');
                return;
            }
            
            submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin me-2"></i> Processing...';
            submitBtn.disabled = true;
        });

        // Toast notification function
        function showToast(message, type = 'info') {
            // Remove existing toasts
            document.querySelectorAll('.custom-toast').forEach(toast => toast.remove());
            
            const toast = document.createElement('div');
            toast.className = `alert alert-${type} custom-toast alert-dismissible fade show`;
            toast.innerHTML = `
                <i class="mdi mdi-${getIcon(type)} me-2"></i>
                ${message}
                <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
            `;
            
            document.body.appendChild(toast);
            
            // Auto remove after 3 seconds
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.remove();
                }
            }, 3000);
        }

        function getIcon(type) {
            switch(type) {
                case 'success': return 'check-circle';
                case 'danger': return 'alert-circle';
                case 'warning': return 'alert';
                default: return 'information';
            }
        }
    });
</script>

@include('user.footer')