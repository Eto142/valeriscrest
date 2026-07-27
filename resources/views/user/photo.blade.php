@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Profile Picture Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                <div>
                                    <h5 class="card-title mb-1">
                                        <i class="mdi mdi-robot-excited-outline me-2 text-primary"></i>
                                        AI Profile Picture
                                    </h5>
                                    <p class="card-title-desc mb-0">Smart facial recognition with AI optimization</p>
                                    <span class="badge bg-primary mt-1 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-face-recognition me-1"></i> AI Face Detection
                                    </span>
                                </div>
                                <div class="action-buttons mt-3 mt-md-0">
                                    <a href="#" class="btn btn-primary ai-button">
                                        <i class="mdi mdi-camera me-1"></i> Take Photo
                                    </a>
                                    <a href="#" class="btn btn-outline-primary ms-2 ai-button">
                                        <i class="mdi mdi-image me-1"></i> AI Enhance
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Picture Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="mdi mdi-account-circle me-2 text-info"></i>
                                AI Profile Management
                            </h4>
                            <p class="card-title-desc">Smart profile picture with AI facial recognition</p>
                        </div>
                        <div class="card-body">
                            <!-- Alerts -->
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeIn" role="alert">
                                <i class="mdi mdi-check-circle me-2"></i>
                                {{ session('status') }}
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                            @endif
                            
                            @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeIn">
                                <i class="mdi mdi-check-circle me-2"></i>
                                <p class="mb-0">{{$message}}</p>
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                            @endif

                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <form action="{{route('user.upload.picture')}}" method="POST" enctype="multipart/form-data" class="form-validate">
                                        {{ csrf_field() }}
                                        
                                        <div class="row align-items-center">
                                            <!-- Current Profile Picture -->
                                            <div class="col-md-5 text-center mb-4 mb-md-0">
                                                <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <div class="wallet-icon me-3">
                                                                <i class="mdi mdi-account text-primary"></i>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">Current Picture</h5>
                                                                <small class="text-muted">AI Facial Recognition</small>
                                                            </div>
                                                        </div>
                                                        <div class="profile-picture-preview mb-4">
                                                            <div class="user-avatar-container mx-auto">
                                                                @if(Auth::user()->photo)
                                                                    <img src="{{ asset('user/uploads/id/'.Auth::user()->photo) }}" 
                                                                         alt="{{ Auth::user()->name }}" 
                                                                         class="rounded-circle current-profile-img ai-profile-img"
                                                                         style="width: 150px; height: 150px; object-fit: cover;">
                                                                    <div class="ai-status-badge">
                                                                        <i class="mdi mdi-check-circle text-success"></i>
                                                                    </div>
                                                                @else
                                                                    <div class="avatar-placeholder rounded-circle d-flex align-items-center justify-content-center bg-light border"
                                                                         style="width: 150px; height: 150px;">
                                                                        <i class="mdi mdi-camera text-muted" style="font-size: 3rem;"></i>
                                                                    </div>
                                                                    <div class="ai-status-badge">
                                                                        <i class="mdi mdi-alert-circle text-warning"></i>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="ai-trend">
                                                            <i class="mdi mdi-face-recognition text-info me-1"></i>
                                                            <small class="text-info">
                                                                @if(Auth::user()->photo)
                                                                AI Face Detection: Active
                                                                @else
                                                                AI Ready for Setup
                                                                @endif
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Upload Section -->
                                            <div class="col-md-7">
                                                <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <div class="wallet-icon me-3 ai-pulse">
                                                                <i class="mdi mdi-cloud-upload text-primary"></i>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">Upload New Picture</h5>
                                                                <small class="text-muted">AI Image Optimization</small>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="nk-kycfm-upload">
                                                            <div class="upload-area border-dashed rounded-lg p-4 text-center mb-4">
                                                                <div class="upload-icon mb-3">
                                                                    <i class="mdi mdi-cloud-upload text-primary" style="font-size: 3rem;"></i>
                                                                </div>
                                                                <h6 class="title mb-2">AI Photo Upload</h6>
                                                                <p class="text-muted small mb-3">
                                                                    Supported formats: JPG, PNG, GIF<br>
                                                                    Max file size: 5MB
                                                                </p>
                                                                
                                                                <div class="nk-kycfm-upload-box">
                                                                    <div class="form-group">
                                                                        <div class="custom-file-upload">
                                                                            <input type="file" name="image" id="profileImage" 
                                                                                   class="form-control" 
                                                                                   accept=".jpg,.jpeg,.png,.gif" 
                                                                                   required
                                                                                   onchange="previewImage(this)">
                                                                            <label for="profileImage" class="btn btn-outline-primary ai-action-btn">
                                                                                <i class="mdi mdi-folder me-1"></i> Choose File
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-note text-muted mt-2" id="fileName">
                                                                            No file chosen
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- Image Preview -->
                                                                <div class="image-preview mt-3 d-none" id="imagePreview">
                                                                    <div class="preview-container text-center">
                                                                        <img id="previewImg" class="rounded preview-image mb-2" 
                                                                             style="max-width: 120px; max-height: 120px; display: none;">
                                                                        <div class="preview-actions">
                                                                            <button type="button" class="btn btn-sm btn-outline-danger ai-action-btn" onclick="clearPreview()">
                                                                                <i class="mdi mdi-close me-1"></i> Remove
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- Upload Button -->
                                                            <div class="text-center">
                                                                <button type="submit" name="upload" class="btn btn-primary btn-lg ai-button">
                                                                    <i class="mdi mdi-upload me-1"></i> Upload Picture
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- AI Tips Section -->
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInLeft">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-lightbulb-on text-warning"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">AI Photo Tips</h5>
                                                    <small class="text-muted">Optimal Recognition</small>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Use a clear, recent photo</li>
                                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Face the camera directly</li>
                                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Good lighting is important</li>
                                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Avoid filters and heavy editing</li>
                                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Neutral background preferred</li>
                                                <li class="mb-2"><i class="mdi mdi-check-circle text-success me-2"></i> Show your full face clearly</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card wallet-card h-100 ai-wallet-card animate__animated animate__fadeInRight">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="wallet-icon me-3">
                                                    <i class="mdi mdi-robot text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">AI Analysis</h5>
                                                    <small class="text-muted">Smart Processing</small>
                                                </div>
                                            </div>
                                            <div class="ai-processing-status">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Face Detection</span>
                                                    <span class="text-success">
                                                        <i class="mdi mdi-check-circle me-1"></i> Ready
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Image Quality</span>
                                                    <span class="text-success">
                                                        <i class="mdi mdi-check-circle me-1"></i> AI Optimized
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span class="text-muted">Recognition</span>
                                                    <span class="text-success">
                                                        <i class="mdi mdi-check-circle me-1"></i> Active
                                                    </span>
                                                </div>
                                                <div class="progress mt-3">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                                         role="progressbar" style="width: 85%" 
                                                         aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        AI Processing: 85%
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
        <h6 class="mb-0">AI Photo Assistant</h6>
    </div>
    <div class="ai-message">
        <p>Hello! I can help you choose the perfect profile picture. Make sure your face is clearly visible for optimal AI recognition.</p>
    </div>
    <div class="progress-bar">
        <div class="progress-fill"></div>
    </div>
    <p class="small text-muted mb-0">AI analyzing photo requirements...</p>
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

    /* Profile Picture Specific Styles */
    .user-avatar-container {
        position: relative;
        display: inline-block;
    }

    .ai-profile-img {
        border: 3px solid #4361ee;
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
    }

    .ai-status-badge {
        position: absolute;
        bottom: 10px;
        right: 10px;
        width: 30px;
        height: 30px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .avatar-placeholder {
        border: 3px dashed #dee2e6;
        transition: all 0.3s ease;
    }

    .avatar-placeholder:hover {
        border-color: #4361ee;
        background: rgba(67, 97, 238, 0.05);
    }

    /* Upload Zone */
    .upload-area {
        border: 2px dashed #dee2e6;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .upload-area:hover {
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
        border: 2px solid #4361ee;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(67, 97, 238, 0.2);
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

    .ai-processing-status {
        font-size: 0.9rem;
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
        
        .upload-area {
            padding: 20px;
        }
        
        .user-avatar-container {
            margin-bottom: 20px;
        }
    }
</style>

<script>
    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    function previewImage(input) {
        const preview = document.getElementById('previewImg');
        const previewContainer = document.getElementById('imagePreview');
        const fileName = document.getElementById('fileName');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                previewContainer.classList.remove('d-none');
                fileName.textContent = input.files[0].name;
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function clearPreview() {
        const input = document.getElementById('profileImage');
        const preview = document.getElementById('previewImg');
        const previewContainer = document.getElementById('imagePreview');
        const fileName = document.getElementById('fileName');
        
        input.value = '';
        preview.style.display = 'none';
        previewContainer.classList.add('d-none');
        fileName.textContent = 'No file chosen';
    }
    
    // File upload validation
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('profileImage');
        
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                // Check file size (5MB limit)
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB');
                    this.value = '';
                    clearPreview();
                    return;
                }
                
                // Check file type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('Please select a valid image file (JPG, PNG, GIF)');
                    this.value = '';
                    clearPreview();
                    return;
                }
            }
        });
        
        // Form submission handling
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const fileInput = document.getElementById('profileImage');
            if (!fileInput.files[0]) {
                e.preventDefault();
                alert('Please select a file to upload');
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
        console.log("AI Profile Analytics Updated");
    }, 30000);
</script>

@include('user.footer')