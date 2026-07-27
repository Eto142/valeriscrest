@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Profile Management</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Alerts Section -->
            <div class="row">
                <div class="col-12">
                    @if(Auth::user()->kyc_status==='0')
                    <div class="alert alert-warning alert-dismissible fade show">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-alert-circle-outline me-3 fs-4"></i>
                            <div class="flex-grow-1">
                                <strong>Verification Required</strong>
                                <p class="mb-0">Complete KYC verification to access all platform features.</p>
                            </div>
                            <a href="{{route('user.verify.account')}}" class="btn btn-sm btn-warning">Verify Now</a>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @elseif(Auth::user()->kyc_status==='1')
                    <div class="alert alert-success alert-dismissible fade show">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-check-circle-outline me-3 fs-4"></i>
                            <div class="flex-grow-1">
                                <strong>Account Verified</strong>
                                <p class="mb-0">Your account has been successfully verified.</p>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @elseif(Auth::user()->kyc_status==='2')
                    <div class="alert alert-danger alert-dismissible fade show">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-close-circle-outline me-3 fs-4"></i>
                            <div class="flex-grow-1">
                                <strong>Verification Failed</strong>
                                <p class="mb-0">Please update your information and try again.</p>
                            </div>
                            <a href="{{route('user.verify.account')}}" class="btn btn-sm btn-danger">Retry</a>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-circle-outline me-2"></i>
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <i class="mdi mdi-check-circle-outline me-2"></i>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <!-- Left Sidebar -->
                <div class="col-lg-4">
                    <!-- Profile Summary Card -->
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <div class="position-relative d-inline-block mb-3">
                                <img src="{{ Auth::user()->photo ? asset('user/uploads/id/'.Auth::user()->photo) : asset('default-avatar.png') }}" 
                                     alt="{{ Auth::user()->name }}" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
                                <span class="position-absolute bottom-0 end-0 bg-primary rounded-circle p-2 border border-3 border-white">
                                    <i class="mdi mdi-camera text-white"></i>
                                </span>
                            </div>
                            <h4 class="mb-1">{{ Auth::user()->name }} {{ Auth::user()->lname }}</h4>
                            <p class="text-muted mb-3">{{ Auth::user()->email }}</p>
                            
                            <!-- Status Badge -->
                            @if(Auth::user()->kyc_status==='0')
                            <span class="badge bg-warning mb-3">
                                <i class="mdi mdi-alert-circle-outline me-1"></i>Unverified
                            </span>
                            @elseif(Auth::user()->kyc_status==='1')
                            <span class="badge bg-success mb-3">
                                <i class="mdi mdi-check-circle-outline me-1"></i>Verified
                            </span>
                            @elseif(Auth::user()->kyc_status==='2')
                            <span class="badge bg-danger mb-3">
                                <i class="mdi mdi-close-circle-outline me-1"></i>Verification Failed
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Navigation Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Quick Navigation</h5>
                            <div class="nav flex-column gap-2">
                                <a class="nav-link active p-3 rounded" href="{{route('user.profile')}}">
                                    <i class="mdi mdi-account-circle-outline me-2"></i>
                                    Personal Information
                                </a>
                                <a class="nav-link p-3 rounded" href="{{route('user.photo')}}">
                                    <i class="mdi mdi-camera-outline me-2"></i>
                                    Profile Photo
                                </a>
                                <a class="nav-link p-3 rounded" href="{{route('user.verify.account')}}">
                                    <i class="mdi mdi-shield-check-outline me-2"></i>
                                    KYC Verification
                                </a>
                                <a class="nav-link p-3 rounded" data-bs-toggle="modal" data-bs-target="#passwordModal">
                                    <i class="mdi mdi-lock-reset me-2"></i>
                                    Change Password
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Completion Card -->
                    <div class="card bg-primary text-white mt-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-robot-outline display-6"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0">AI Profile Assistant</h5>
                                    <small>Complete your profile for better experience</small>
                                </div>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Profile Completion</span>
                                    <span class="fw-bold" id="profileCompletion">75%</span>
                                </div>
                                <div class="progress bg-white bg-opacity-30" style="height: 6px;">
                                    <div class="progress-bar bg-white" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Personal Information Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="mdi mdi-account-edit-outline me-2 text-primary"></i>
                                Personal Information
                            </h4>
                            <p class="card-title-desc mb-0">Update your personal details and contact information</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.profile.update')}}" method="POST" id="profileForm">
                                @csrf
                                
                                <!-- Name Section -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">First Name</label>
                                            <input type="text" id="name" name="name" value="{{Auth::user()->name}}" 
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="lname" class="form-label">Last Name</label>
                                            <input type="text" id="lname" name="lname" value="{{Auth::user()->lname}}" 
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Information -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <div class="input-group">
                                                <input type="email" id="email" name="email" value="{{Auth::user()->email}}" 
                                                       class="form-control" readonly>
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-lock-outline"></i>
                                                </span>
                                            </div>
                                            <div class="form-text">Email address cannot be changed</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" id="phone" name="phone" value="{{Auth::user()->phone}}" 
                                                   class="form-control" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Information -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <div class="input-group">
                                                <input type="date" id="dob" name="dob" value="{{Auth::user()->dob}}" 
                                                       class="form-control">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-calendar-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" id="address" name="address" value="{{Auth::user()->address}}" 
                                                   class="form-control" placeholder="Enter your address">
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="border-top pt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Save Your Changes</h6>
                                            <p class="text-muted small mb-0">Review your information before saving</p>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-outline-secondary" id="resetBtn">
                                                <i class="mdi mdi-refresh me-1"></i> Reset
                                            </button>
                                            <button type="submit" name="upload" class="btn btn-primary">
                                                <i class="mdi mdi-content-save-outline me-1"></i> Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Security & Verification Cards -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="mdi mdi-shield-account-outline text-primary display-4"></i>
                                    </div>
                                    <h5>Security Settings</h5>
                                    <p class="text-muted mb-4">Protect your account with strong authentication methods</p>
                                    <button data-bs-toggle="modal" data-bs-target="#passwordModal" class="btn btn-outline-primary w-100">
                                        <i class="mdi mdi-lock-reset me-1"></i> Change Password
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="mdi mdi-verified text-success display-4"></i>
                                    </div>
                                    <h5>Account Verification</h5>
                                    <p class="text-muted mb-4">Complete KYC verification for full platform access</p>
                                    <a href="{{route('user.verify.account')}}" class="btn btn-outline-success w-100">
                                        <i class="mdi mdi-shield-check-outline me-1"></i> Verify Account
                                    </a>
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

<!-- Password Change Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordModalLabel">
                    <i class="mdi mdi-lock-reset me-2 text-primary"></i>
                    Change Password
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="passwordForm">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                        <div class="form-text">
                            <small>Use 8+ characters with uppercase, lowercase, number and symbol.</small>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="mdi mdi-check-circle-outline me-1"></i> Update Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .nav-link {
        transition: all 0.3s ease;
        border: none;
        color: #6c757d;
    }

    .nav-link.active {
        background: rgba(67, 97, 238, 0.1);
        color: #4361ee;
        border-left: 3px solid #4361ee;
    }

    .nav-link:hover {
        background: rgba(67, 97, 238, 0.05);
        color: #4361ee;
    }

    .card {
        border: 1px solid #e9ecef;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .card-header {
        background: white;
        border-bottom: 1px solid #e9ecef;
        padding: 1.5rem;
    }

    .card-body {
        padding: 1.5rem;
    }

    .form-control:focus {
        border-color: #4361ee;
        box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
    }

    .btn-primary {
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border: none;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #3a56d4, #2d0685);
        transform: translateY(-1px);
    }

    .progress {
        border-radius: 10px;
    }

    .progress-bar {
        border-radius: 10px;
    }

    .alert {
        border: none;
        border-radius: 10px;
        border-left: 4px solid;
    }

    .alert-warning {
        border-left-color: #ffc107;
        background: rgba(255, 193, 7, 0.1);
    }

    .alert-success {
        border-left-color: #28a745;
        background: rgba(40, 167, 69, 0.1);
    }

    .alert-danger {
        border-left-color: #dc3545;
        background: rgba(220, 53, 69, 0.1);
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 1rem;
        }
        
        .modal-dialog {
            margin: 1rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form reset functionality
        document.getElementById('resetBtn').addEventListener('click', function() {
            if(confirm('Are you sure you want to reset all changes?')) {
                document.getElementById('profileForm').reset();
                updateProfileCompletion();
            }
        });

        // Profile completion calculation
        function updateProfileCompletion() {
            const fields = ['name', 'lname', 'phone', 'dob', 'address'];
            let filled = 0;
            
            fields.forEach(field => {
                const element = document.getElementById(field);
                if (element && element.value.trim() !== '') {
                    filled++;
                }
            });
            
            const percentage = Math.round((filled / fields.length) * 100);
            const completionElement = document.getElementById('profileCompletion');
            
            if (completionElement) {
                completionElement.textContent = percentage + '%';
                
                // Update progress bar
                const progressBar = document.querySelector('.progress-bar');
                if (progressBar) {
                    progressBar.style.width = percentage + '%';
                    
                    // Change color based on percentage
                    if (percentage < 50) {
                        progressBar.classList.remove('bg-success', 'bg-warning');
                        progressBar.classList.add('bg-danger');
                    } else if (percentage < 80) {
                        progressBar.classList.remove('bg-success', 'bg-danger');
                        progressBar.classList.add('bg-warning');
                    } else {
                        progressBar.classList.remove('bg-warning', 'bg-danger');
                        progressBar.classList.add('bg-success');
                    }
                }
            }
        }

        // Initial calculation
        updateProfileCompletion();

        // Update on input changes
        document.querySelectorAll('#profileForm input').forEach(input => {
            input.addEventListener('input', updateProfileCompletion);
        });

        // Form submission handling
        const profileForm = document.getElementById('profileForm');
        if (profileForm) {
            profileForm.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin me-1"></i> Saving...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            });
        }

        // Password form handling
        const passwordForm = document.getElementById('passwordForm');
        if (passwordForm) {
            passwordForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin me-1"></i> Updating...';
                submitBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Show success message
                    const modal = bootstrap.Modal.getInstance(document.getElementById('passwordModal'));
                    modal.hide();
                    
                    // Show success alert
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success alert-dismissible fade show';
                    alert.innerHTML = `
                        <i class="mdi mdi-check-circle-outline me-2"></i>
                        Password updated successfully!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    document.querySelector('.container-fluid').insertBefore(alert, document.querySelector('.row:first-child'));
                    
                    // Reset form
                    passwordForm.reset();
                }, 2000);
            });
        }

        // Enhanced input validation
        const inputs = document.querySelectorAll('input[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (!this.value.trim()) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });
        });
    });
</script>

@include('user.footer')