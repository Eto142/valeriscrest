@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- KYC Verification Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                <div>
                                    <h5 class="card-title mb-1">
                                        <i class="mdi mdi-robot-excited-outline me-2 text-primary"></i>
                                        AI Identity Verification
                                    </h5>
                                    <p class="card-title-desc mb-0">Smart KYC verification with AI-powered document analysis</p>
                                    <span class="badge bg-primary mt-1 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-brain me-1"></i> Neural Network Powered
                                    </span>
                                </div>
                                <div class="action-buttons mt-3 mt-md-0">
                                    <a href="#" class="btn btn-primary ai-button">
                                        <i class="mdi mdi-shield-check me-1"></i> Verification Status
                                    </a>
                                    <a href="#" class="btn btn-outline-primary ms-2 ai-button">
                                        <i class="mdi mdi-help-circle me-1"></i> Get Help
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KYC Status Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-shield-account me-2 text-success"></i>
                                AI Verification Status
                            </h4>
                            <p class="card-title-desc">Real-time KYC verification status with AI monitoring</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Verification Status Card -->
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3 ai-pulse">
                                                    <i class="mdi mdi-shield-check text-success"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Verification Status</h5>
                                                    <small class="text-muted">AI-Powered KYC Analysis</small>
                                                </div>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-primary mb-1">
                                                    @if(Auth::user()->kyc_status === '0')
                                                    <span class="badge badge-warning">Pending Review</span>
                                                    @elseif(Auth::user()->kyc_status === '1')
                                                    <span class="badge badge-success">Verified</span>
                                                    @elseif(Auth::user()->kyc_status === '2')
                                                    <span class="badge badge-danger">Rejected</span>
                                                    @else
                                                    <span class="badge badge-secondary">Not Submitted</span>
                                                    @endif
                                                </h3>
                                                <p class="text-muted mb-0">Last updated: {{ Auth::user()->updated_at->format('M d, Y') }}</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-clock-outline text-info me-1"></i>
                                                    <small class="text-info">AI Monitoring: Active</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Document Upload Card -->
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3 ai-pulse">
                                                    <i class="mdi mdi-cloud-upload text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Document Upload</h5>
                                                    <small class="text-muted">AI Document Verification</small>
                                                </div>
                                            </div>
                                            <div class="wallet-balance mb-4">
                                                <h3 class="text-primary mb-1">Ready to Upload</h3>
                                                <p class="text-muted mb-0">AI will analyze your documents</p>
                                                <div class="ai-trend mt-1">
                                                    <i class="mdi mdi-robot text-primary me-1"></i>
                                                    <small class="text-primary">AI Analysis: Standing By</small>
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

            <!-- KYC Upload Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-file-document me-2 text-info"></i>
                                AI Document Verification
                            </h4>
                            <p class="card-title-desc">Upload your identity documents for AI-powered verification</p>
                        </div>
                        <div class="card-body">
                            <!-- Alerts -->
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeIn">
                                <i class="mdi mdi-check-circle me-2"></i>
                                {{ session('status') }}
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                            @endif
                            
                            @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeIn">
                                <i class="mdi mdi-check-circle me-2"></i>
                                {{ $message }}
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                            @endif

                            <!-- Upload Forms -->
                            <form action="{{ route('user.upload.kyc')}}" method="POST" enctype="multipart/form-data" class="form-validate">
                                @csrf
                                
                                <div class="row g-4">
                                    <!-- Front Side Upload -->
                                    <div class="col-md-6">
                                        <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="wallet-icon me-3">
                                                        <i class="mdi mdi-account-card-details text-primary"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">Front Side of ID</h5>
                                                        <small class="text-muted">AI Document Analysis</small>
                                                    </div>
                                                </div>
                                                <div class="nk-kycfm-upload">
                                                    <div class="upload-zone border-dashed rounded-lg p-4 text-center">
                                                        <div class="upload-icon mb-3">
                                                            <i class="mdi mdi-cloud-upload text-primary" style="font-size: 2.5rem;"></i>
                                                        </div>
                                                        <div class="nk-kycfm-upload-box">
                                                            <div class="custom-file-upload">
                                                                <input type="file" name="card" id="frontUpload" 
                                                                       class="form-control" 
                                                                       accept=".jpg,.png,.jpeg" 
                                                                       required
                                                                       onchange="previewImage(this, 'frontPreview')">
                                                                <label for="frontUpload" class="btn btn-outline-primary ai-action-btn">
                                                                    <i class="mdi mdi-folder me-1"></i> Select Front Image
                                                                </label>
                                                            </div>
                                                            <div class="form-note text-muted mt-2" id="frontFileName">
                                                                JPG, PNG up to 15MB
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Front Preview -->
                                                        <div class="image-preview mt-3" id="frontPreviewContainer" style="display: none;">
                                                            <div class="preview-container text-center">
                                                                <img id="frontPreview" class="rounded preview-image mb-2" 
                                                                     style="max-width: 200px; max-height: 150px;">
                                                                <div class="preview-actions">
                                                                    <button type="button" class="btn btn-sm btn-outline-danger ai-action-btn" onclick="clearPreview('frontUpload', 'frontPreview', 'frontPreviewContainer', 'frontFileName')">
                                                                        <i class="mdi mdi-close me-1"></i> Remove
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Back Side Upload -->
                                    <div class="col-md-6">
                                        <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="wallet-icon me-3">
                                                        <i class="mdi mdi-account-card-details-outline text-primary"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">Back Side of ID</h5>
                                                        <small class="text-muted">AI Document Analysis</small>
                                                    </div>
                                                </div>
                                                <div class="nk-kycfm-upload">
                                                    <div class="upload-zone border-dashed rounded-lg p-4 text-center">
                                                        <div class="upload-icon mb-3">
                                                            <i class="mdi mdi-cloud-upload text-primary" style="font-size: 2.5rem;"></i>
                                                        </div>
                                                        <div class="nk-kycfm-upload-box">
                                                            <div class="custom-file-upload">
                                                                <input type="file" name="pass" id="backUpload" 
                                                                       class="form-control" 
                                                                       accept=".jpg,.png,.jpeg" 
                                                                       required
                                                                       onchange="previewImage(this, 'backPreview')">
                                                                <label for="backUpload" class="btn btn-outline-primary ai-action-btn">
                                                                    <i class="mdi mdi-folder me-1"></i> Select Back Image
                                                                </label>
                                                            </div>
                                                            <div class="form-note text-muted mt-2" id="backFileName">
                                                                JPG, PNG up to 15MB
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Back Preview -->
                                                        <div class="image-preview mt-3" id="backPreviewContainer" style="display: none;">
                                                            <div class="preview-container text-center">
                                                                <img id="backPreview" class="rounded preview-image mb-2" 
                                                                     style="max-width: 200px; max-height: 150px;">
                                                                <div class="preview-actions">
                                                                    <button type="button" class="btn btn-sm btn-outline-danger ai-action-btn" onclick="clearPreview('backUpload', 'backPreview', 'backPreviewContainer', 'backFileName')">
                                                                        <i class="mdi mdi-close me-1"></i> Remove
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center mt-5 pt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-lg ai-button">
                                        <i class="mdi mdi-upload me-1"></i> Submit KYC Documents
                                    </button>
                                    <p class="text-muted small mt-2">
                                        AI-powered verification typically completes within 2-4 hours
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Requirements & Tips Section -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="wallet-icon me-3">
                                    <i class="mdi mdi-information text-info"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Document Requirements</h5>
                                    <small class="text-muted">AI Verification Standards</small>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Clear, readable images</li>
                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> All four corners visible</li>
                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> No glare or reflections</li>
                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> File size under 15MB each</li>
                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> JPG, PNG formats only</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="wallet-icon me-3">
                                    <i class="mdi mdi-help-circle text-warning"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Need Help?</h5>
                                    <small class="text-muted">AI Support Available</small>
                                </div>
                            </div>
                            <p class="text-muted small mb-3">
                                If you're having trouble with the verification process, contact our AI-powered support team for assistance.
                            </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary ai-action-btn">
                                    <i class="mdi mdi-robot me-1"></i> AI Support Assistant
                                </a>
                                <a href="#" class="btn btn-outline-primary ai-action-btn">
                                    <i class="mdi mdi-file-document me-1"></i> Verification Guidelines
                                </a>
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

<!-- AI Assistant -->
<div class="ai-assistant" id="aiAssistant">
    <i class="mdi mdi-robot"></i>
</div>

<div class="ai-chat" id="aiChat">
    <div class="ai-chat-header">
        <i class="mdi mdi-robot text-primary me-2"></i>
        <h6 class="mb-0">AI Verification Assistant</h6>
    </div>
    <div class="ai-message">
        <p>Hello! I can help you with the KYC verification process. Make sure your documents are clear and readable for optimal AI analysis.</p>
    </div>
    <div class="progress-bar">
        <div class="progress-fill"></div>
    </div>
    <p class="small text-muted mb-0">AI analyzing your verification requirements...</p>
</div>

<style>
    /* AI Animations */
    .ai-wallet-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-wallet-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-wallet-card:hover::before {
        left: 100%;
    }

    .ai-wallet-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(67, 97, 238, 0.15);
        border-color: #4361ee;
    }

    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .ai-button {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .ai-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-button:hover::before {
        left: 100%;
    }

    .ai-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
    }

    .ai-action-btn {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .ai-action-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 3px 10px rgba(67, 97, 238, 0.2);
    }

    .ai-trend {
        font-size: 0.75rem;
        padding: 4px 8px;
        background: rgba(67, 97, 238, 0.05);
        border-radius: 4px;
        display: inline-block;
    }

    .wallet-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(67, 97, 238, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: all 0.3s ease;
    }

    .wallet-balance h3 {
        font-weight: 600;
    }

    .wallet-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .wallet-actions .btn {
        flex: 1;
        min-width: 80px;
        font-size: 12px;
        padding: 6px 12px;
    }

    /* Upload Zone */
    .upload-zone {
        border: 2px dashed #dee2e6;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .upload-zone:hover {
        border-color: #4361ee;
        background: rgba(67, 97, 238, 0.02);
    }

    .custom-file-upload {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .custom-file-upload input[type="file"] {
        position: absolute;
        left: -9999px;
    }

    .custom-file-upload label {
        display: inline-block;
        padding: 10px 20px;
        background: white;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        color: #6c757d;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .custom-file-upload label:hover {
        background: #4361ee;
        color: white;
        border-color: #4361ee;
    }

    .form-note {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .preview-image {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        max-width: 100%;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
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

    /* Counting Animation */
    .animate-count {
        font-variant-numeric: tabular-nums;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .wallet-actions {
            flex-direction: column;
        }
        
        .wallet-actions .btn {
            width: 100%;
            margin-bottom: 5px;
        }
        
        .ai-chat {
            width: 280px;
            right: 15px;
        }
        
        .upload-zone {
            padding: 20px;
        }
    }
</style>

<script>
    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        const previewContainer = document.getElementById(previewId + 'Container');
        const fileName = document.getElementById(input.id.replace('Upload', 'FileName'));
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.style.display = 'block';
                fileName.textContent = input.files[0].name;
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function clearPreview(inputId, previewId, containerId, fileNameId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);
        const container = document.getElementById(containerId);
        const fileName = document.getElementById(fileNameId);
        
        input.value = '';
        container.style.display = 'none';
        fileName.textContent = 'JPG, PNG up to 15MB';
    }
    
    // File validation
    document.addEventListener('DOMContentLoaded', function() {
        const fileInputs = document.querySelectorAll('input[type="file"]');
        
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    // Check file size (15MB limit)
                    if (file.size > 15 * 1024 * 1024) {
                        alert('File size must be less than 15MB');
                        this.value = '';
                        const containerId = this.id.replace('Upload', 'PreviewContainer');
                        document.getElementById(containerId).style.display = 'none';
                        return;
                    }
                    
                    // Check file type
                    const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                    if (!validTypes.includes(file.type)) {
                        alert('Please select a valid image file (JPG, PNG only)');
                        this.value = '';
                        const containerId = this.id.replace('Upload', 'PreviewContainer');
                        document.getElementById(containerId).style.display = 'none';
                        return;
                    }
                }
            });
        });
        
        // Form submission handling
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const frontInput = document.getElementById('frontUpload');
            const backInput = document.getElementById('backUpload');
            
            if (!frontInput.files[0] || !backInput.files[0]) {
                e.preventDefault();
                alert('Please upload both front and back images of your ID');
                return;
            }
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin me-1"></i> AI Processing...';
            submitBtn.disabled = true;
            
            // Re-enable after 5 seconds (in case of error)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 5000);
        });

        // Add hover effects to wallet cards
        const walletCards = document.querySelectorAll('.ai-wallet-card');
        walletCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Simulate AI activity
        setInterval(() => {
            const badges = document.querySelectorAll('.ai-pulse');
            badges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'aiPulse 2s infinite';
                }, 10);
            });
        }, 5000);
    });

    // Simulate real-time updates
    setInterval(function() {
        console.log("AI KYC Analytics Updated");
    }, 30000);
</script>

@include('user.footer')