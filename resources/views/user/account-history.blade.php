@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown animate__faster">🤖 AI Transaction Analytics</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet</a></li>
                                <li class="breadcrumb-item active">Transaction History</li>
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

            <!-- AI Analytics Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-primary text-white ai-pulse-border animate__animated animate__fadeIn">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="text-white mb-2">
                                        <i class="mdi mdi-swap-horizontal me-2"></i>AI Transaction History
                                    </h3>
                                    <p class="text-white-50 mb-0">Real-time monitoring of your financial activities</p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <button class="btn btn-outline-light me-2 animate__animated animate__pulse animate__infinite">
                                        <i class="mdi mdi-filter me-1"></i> Filter
                                    </button>
                                    <button class="btn btn-light ai-button">
                                        <i class="mdi mdi-download me-1"></i> Export
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInLeft">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    @php
                                        $totalTransactions = count($transaction);
                                    @endphp
                                    <h4 class="mb-0 animate-count" data-target="{{ $totalTransactions }}">0</h4>
                                    <p class="text-muted mb-0">Total Transactions</p>
                                </div>
                                <div class="icon-container bg-info ms-3 ai-pulse">
                                    <i class="mdi mdi-swap-horizontal icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInLeft" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    @php
                                        $totalDeposits = $transaction->where('transaction', 'credit')->sum('credit');
                                    @endphp
                                    <h4 class="mb-0 animate-count" data-target="{{ $totalDeposits }}">0</h4>
                                    <p class="text-muted mb-0">Total Deposits</p>
                                </div>
                                <div class="icon-container bg-success ms-3 ai-pulse">
                                    <i class="mdi mdi-arrow-down-circle icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInRight" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    @php
                                        $totalWithdrawals = $transaction->where('transaction', 'debit')->sum('debit');
                                    @endphp
                                    <h4 class="mb-0 animate-count" data-target="{{ $totalWithdrawals }}">0</h4>
                                    <p class="text-muted mb-0">Total Withdrawals</p>
                                </div>
                                <div class="icon-container bg-warning ms-3 ai-pulse">
                                    <i class="mdi mdi-arrow-up-circle icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-hover ai-stats-card animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    @php
                                        $successfulTransactions = $transaction->where('status', '1')->count();
                                    @endphp
                                    <h4 class="mb-0 animate-count" data-target="{{ $successfulTransactions }}">0</h4>
                                    <p class="text-muted mb-0">Successful</p>
                                </div>
                                <div class="icon-container bg-primary ms-3 ai-pulse">
                                    <i class="mdi mdi-check-circle icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transaction History Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">
                                    <i class="mdi mdi-history me-2"></i>AI Transaction Log
                                </h4>
                                <span class="badge bg-primary ai-pulse">
                                    <i class="mdi mdi-brain me-1"></i> Live Monitoring
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            @if(count($transaction) > 0)
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 ai-transaction-table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="animate__animated animate__fadeIn"></th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.1s">Transaction Details</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.2s">Amount</th>
                                            <th class="animate__animated animate__fadeIn" style="animation-delay: 0.3s">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transaction as $trans)
                                        <tr class="ai-transaction-row animate__animated animate__fadeIn" style="animation-delay: {{ $loop->index * 0.05 }}s">
                                            <td>
                                                @if($trans->transaction == 'credit')
                                                    <div class="icon-container bg-success ai-icon-pulse">
                                                        <i class="mdi mdi-arrow-down-circle icon"></i>
                                                    </div>
                                                @elseif($trans->transaction == 'debit')
                                                    <div class="icon-container bg-warning ai-icon-pulse">
                                                        <i class="mdi mdi-arrow-up-circle icon"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-medium">
                                                        @if($trans->transaction == 'credit')
                                                            Deposit
                                                        @elseif($trans->transaction == 'debit')
                                                            Withdrawal
                                                        @endif
                                                    </span>
                                                    <small class="text-muted ai-date">
                                                        {{ \Carbon\Carbon::parse($trans->created_at)->format('M d, Y h:i A') }}
                                                    </small>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="fw-bold {{ $trans->transaction == 'credit' ? 'text-success' : 'text-danger' }} amount-cell">
                                                    @if($trans->transaction == 'credit')
                                                        + {{ Auth::user()->currency }} {{ number_format($trans->credit, 2, '.', ',') }}
                                                    @elseif($trans->transaction == 'debit')
                                                        - {{ Auth::user()->currency }} {{ number_format($trans->debit, 2, '.', ',') }}
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                @if($trans->status == '1')
                                                    <span class="badge bg-success ai-status-pulse">Successful</span>
                                                @elseif($trans->status == '0')
                                                    <span class="badge bg-warning ai-pending-pulse">Pending</span>
                                                @else
                                                    <span class="badge bg-danger">Failed</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="text-center py-5 animate__animated animate__fadeIn">
                                <div class="mb-4">
                                    <i class="mdi mdi-cash-multiple display-4 text-muted ai-float"></i>
                                </div>
                                <h5 class="text-muted">No Transactions Found</h5>
                                <p class="text-muted mb-4">Your transaction history will appear here</p>
                                <button class="btn btn-primary ai-button">
                                    <i class="mdi mdi-plus me-1"></i> Make First Transaction
                                </button>
                            </div>
                            @endif
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
    /* AI Animations */
    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .ai-pulse-border {
        position: relative;
        overflow: hidden;
    }

    .ai-pulse-border::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-pulse-border:hover::before {
        left: 100%;
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

    .ai-stats-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-stats-card:hover::before {
        left: 100%;
    }

    .ai-stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(67, 97, 238, 0.15);
        border-color: #4361ee;
    }

    .ai-transaction-row {
        transition: all 0.3s ease;
        position: relative;
    }

    .ai-transaction-row:hover {
        transform: translateX(5px);
        background: rgba(67, 97, 238, 0.05) !important;
    }

    .ai-transaction-row::before {
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

    .ai-transaction-row:hover::before {
        opacity: 1;
    }

    .ai-icon-pulse {
        animation: iconPulse 3s infinite;
    }

    @keyframes iconPulse {
        0%, 100% { 
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(67, 97, 238, 0.4);
        }
        50% { 
            transform: scale(1.1);
            box-shadow: 0 0 0 10px rgba(67, 97, 238, 0);
        }
    }

    .ai-status-pulse {
        animation: statusPulse 2s infinite;
    }

    .ai-pending-pulse {
        animation: pendingPulse 1.5s infinite;
    }

    @keyframes statusPulse {
        0%, 100% { 
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.4);
        }
        50% { 
            transform: scale(1.05);
            box-shadow: 0 0 0 5px rgba(40, 167, 69, 0);
        }
    }

    @keyframes pendingPulse {
        0%, 100% { 
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.4);
        }
        50% { 
            transform: scale(1.05);
            box-shadow: 0 0 0 5px rgba(255, 193, 7, 0);
        }
    }

    .ai-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .amount-cell {
        font-variant-numeric: tabular-nums;
        position: relative;
    }

    .ai-date {
        font-size: 0.875rem;
    }

    /* Icon Container Styles */
    .icon-container {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 12px;
        color: white;
        transition: all 0.3s ease;
    }

    .icon {
        font-size: 24px;
    }

    /* Table Styles: Remove All Borders */
    .ai-transaction-table {
        border-collapse: collapse;
        border: none !important;
    }

    .ai-transaction-table th,
    .ai-transaction-table td {
        border: none !important;
        outline: none;
        vertical-align: middle;
    }

    .ai-transaction-table *,
    .ai-transaction-table *:before,
    .ai-transaction-table *:after {
        border: none !important;
    }

    /* Counting Animation */
    .animate-count {
        font-variant-numeric: tabular-nums;
    }
</style>

<style>
/* ============================================= */
/* RESPONSIVE FIXES FOR ALL DEVICES */
/* ============================================= */

/* Make the analytics header responsive */
@media (max-width: 767px) {
    .ai-pulse-border .row {
        text-align: center;
    }

    .ai-pulse-border h3 {
        font-size: 1.3rem;
    }

    .ai-pulse-border p {
        font-size: 0.9rem;
    }

    .ai-pulse-border .col-md-4 {
        margin-top: 15px;
        text-align: center !important;
    }

    .ai-pulse-border button {
        width: 100%;
        margin-bottom: 10px;
    }
}

/* Stats cards */
@media (max-width: 767px) {
    .ai-stats-card {
        margin-bottom: 15px;
    }
}

/* Transaction table responsive */
@media (max-width: 575px) {
    .ai-transaction-table thead {
        display: none; /* hide table header on phones */
    }

    .ai-transaction-table tr {
        display: block;
        margin-bottom: 15px;
        border-bottom: 1px solid #eee !important;
        padding: 12px;
    }

    .ai-transaction-table td {
        display: flex;
        justify-content: space-between;
        font-size: 0.9rem;
        padding: 6px 0 !important;
    }

    .ai-transaction-table td:first-child {
        justify-content: center;
        margin-bottom: 10px;
    }

    .ai-transaction-table .amount-cell {
        font-size: 1rem;
        font-weight: bold;
    }
}

/* Make title/breadcrumb responsive */
@media (max-width: 767px) {
    .page-title-box {
        display: block !important;
        text-align: center;
        margin-bottom: 15px;
    }

    .page-title-right {
        margin-top: 10px;
    }
}

/* Icon containers scale properly */
@media (max-width: 575px) {
    .icon-container {
        width: 42px !important;
        height: 42px !important;
        border-radius: 10px;
    }

    .icon {
        font-size: 20px;
    }
}

/* No transaction message */
@media (max-width: 575px) {
    .text-center.py-5 {
        padding: 3rem 1rem !important;
    }

    .display-4 {
        font-size: 2.5rem !important;
    }
}
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Number counting animation
        const counters = document.querySelectorAll('.animate-count');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current).toLocaleString();
                    setTimeout(updateCount, 30);
                } else {
                    counter.textContent = target.toLocaleString();
                }
            };
            
            // Start counting when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(counter);
        });

        // Add hover effects to cards
        const cards = document.querySelectorAll('.ai-stats-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Table row animation on scroll
        const tableRows = document.querySelectorAll('.ai-transaction-row');
        const rowObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    rowObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        tableRows.forEach(row => {
            row.style.animationPlayState = 'paused';
            rowObserver.observe(row);
        });

        // Random AI-like activity
        setInterval(() => {
            const badges = document.querySelectorAll('.ai-pulse');
            badges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'aiPulse 2s infinite';
                }, 10);
            });

            // Random transaction icon pulse
            const icons = document.querySelectorAll('.ai-icon-pulse');
            if (icons.length > 0) {
                const randomIcon = icons[Math.floor(Math.random() * icons.length)];
                randomIcon.style.animation = 'none';
                setTimeout(() => {
                    randomIcon.style.animation = 'iconPulse 3s infinite';
                }, 10);
            }
        }, 3000);

        // Amount animation effect
        const amountCells = document.querySelectorAll('.amount-cell');
        amountCells.forEach(cell => {
            cell.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            cell.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    });
</script>

@include('user.footer')