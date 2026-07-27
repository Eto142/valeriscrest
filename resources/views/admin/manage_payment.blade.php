@include('admin.header')

<div class="main-content" id="mainContent">

    <!-- Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
        <div>
            <h1 class="h3 mb-1">Wallet & Bank Management</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Financial Settings</a></li>
                    <li class="breadcrumb-item active">Update Payment Details</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs mb-4" id="paymentTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="wallet-tab" data-bs-toggle="tab" data-bs-target="#walletTab" role="tab">
                <i class="fas fa-wallet me-1"></i> Crypto Wallets
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bankTab" role="tab">
                <i class="fas fa-university me-1"></i> Bank Details
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="paymentTabsContent">

        <!-- WALLET TAB -->
        <div class="tab-pane fade show active" id="walletTab" role="tabpanel">

            <div class="row mb-4">
                @foreach(['usdt','btc','eth','xrp'] as $method)
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm p-3">
                            <h5 class="text-capitalize mb-2">{{ $method }} Wallet</h5>
                            <p><strong>Address:</strong> {{ $wallets[$method]->address ?? 'Not set' }}</p>
                            @if($method === 'xrp')
                                <p><strong>Destination Tag:</strong> {{ $wallets[$method]->destination_tag ?? 'N/A' }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0"><i class="fas fa-coins me-2"></i>Update Crypto Wallet</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.choose.wallet') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Select Wallet Type</label>
                            <select class="form-select" id="walletSelect" name="method">
                                <option value="">-- Select Wallet Method --</option>
                                <option value="usdt">USDT (TRC20)</option>
                                <option value="btc">Bitcoin (BTC)</option>
                                <option value="eth">Ethereum (ETH)</option>
                                <option value="xrp">Ripple (XRP)</option>
                            </select>
                        </div>

                        <div id="walletInputs">
                            <div class="wallet-input d-none" data-wallet="usdt">
                                <label class="form-label">USDT Wallet Address</label>
                                <input type="text" name="usdt_address" class="form-control" placeholder="TRC20 address" value="{{ $wallets['usdt']->address ?? '' }}">
                            </div>

                            <div class="wallet-input d-none" data-wallet="btc">
                                <label class="form-label">Bitcoin Wallet Address</label>
                                <input type="text" name="btc_address" class="form-control" placeholder="BTC address" value="{{ $wallets['btc']->address ?? '' }}">
                            </div>

                            <div class="wallet-input d-none" data-wallet="eth">
                                <label class="form-label">Ethereum Wallet Address</label>
                                <input type="text" name="eth_address" class="form-control" placeholder="ETH address" value="{{ $wallets['eth']->address ?? '' }}">
                            </div>

                            <div class="wallet-input d-none" data-wallet="xrp">
                                <label class="form-label">XRP Wallet Address</label>
                                <input type="text" name="xrp_address" class="form-control" placeholder="XRP address" value="{{ $wallets['xrp']->address ?? '' }}">

                                <label class="form-label mt-2">Destination Tag (Optional)</label>
                                <input type="text" name="xrp_destination_tag" class="form-control" placeholder="Tag" value="{{ $wallets['xrp']->destination_tag ?? '' }}">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-primary"><i class="fas fa-save me-1"></i> Save Wallet</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- BANK TAB -->
        <div class="tab-pane fade" id="bankTab" role="tabpanel">

            <div class="card shadow-sm mb-4 p-3">
                <h5 class="mb-2"><i class="fas fa-university me-2"></i>Saved Bank Info</h5>
                @if($bank)
                    <p><strong>Bank Name:</strong> {{ $bank->bankName ?? 'Not set' }}</p>
                    <p><strong>Account Name:</strong> {{ $bank->accountName ?? 'Not set' }}</p>
                    <p><strong>Account Number:</strong> {{ $bank->accountNumber ?? 'Not set' }}</p>
                    <p><strong>SWIFT Code:</strong> {{ $bank->swiftCode ?? 'N/A' }}</p>
                    <p><strong>Bank Address:</strong> {{ $bank->bankAddress ?? 'N/A' }}</p>
                @else
                    <p>No bank information saved yet.</p>
                @endif
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0"><i class="fas fa-university me-2"></i>Update Bank Details</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.choose.wallet') }}" method="POST">
                        @csrf
                        <input type="hidden" name="method" value="bank">

                        <div class="mb-3">
                            <label class="form-label">Bank Name</label>
                            <input type="text" name="bankName" class="form-control" placeholder="e.g. JP Morgan Chase" value="{{ $bank->bankName ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Account Name</label>
                            <input type="text" name="accountName" class="form-control" placeholder="Your Full Name" value="{{ $bank->accountName ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Account Number / IBAN</label>
                            <input type="text" name="accountNumber" class="form-control" placeholder="IBAN or Account Number" value="{{ $bank->accountNumber ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Swift Code (Optional)</label>
                            <input type="text" name="swiftCode" class="form-control" placeholder="SWIFT/BIC code" value="{{ $bank->swiftCode ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bank Address (Optional)</label>
                            <input type="text" name="bankAddress" class="form-control" placeholder="Bank Address" value="{{ $bank->bankAddress ?? '' }}">
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-primary"><i class="fas fa-save me-1"></i> Save Bank Info</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

<style>
    .nav-tabs .nav-link, .nav-tabs .nav-link i {
        color: black !important;
    }
    .nav-tabs .nav-link.active, .nav-tabs .nav-link.active i {
        color: black !important;
        font-weight: 600;
        border-color: #dee2e6 #dee2e6 #fff;
    }
</style>

<script>
document.getElementById('walletSelect').addEventListener('change', function () {
    const chosen = this.value;
    document.querySelectorAll('.wallet-input').forEach(div => {
        div.classList.add('d-none');
        if (div.dataset.wallet === chosen) div.classList.remove('d-none');
    });
});
</script>

@include('admin.footer')
