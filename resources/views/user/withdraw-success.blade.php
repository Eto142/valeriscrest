<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <base href=".">
    <meta charset="utf-8">
    <title>Withdrawal Successful</title>
    <link rel="stylesheet" href="{{ asset('assets1/css/dashlite.css') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets1/css/theme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="nk-body npc-crypto bg-white has-sidebar">

<div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">

        <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">

                <!-- SUCCESS ICON -->
                <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>

                <!-- ==============================
                    BITCOIN WITHDRAWAL SUCCESS
                ================================= -->
                @if($mode == 'Btc')
                    <h4 class="nk-modal-title mt-3">
                        Bitcoin Withdrawal Successful
                    </h4>

                    <div class="nk-modal-text mt-2">
                        <p>
                            You sent <strong>{{ $btcAmount }} BTC</strong>
                        </p>
                        <p>
                            Equivalent Value: <strong>${{ $withdrawal_amount }}</strong>
                        </p>
                        <p>
                            Wallet Address: <strong>{{ $wallet }}</strong>
                        </p>
                    </div>

                <!-- ==============================
                    ETHEREUM WITHDRAWAL SUCCESS
                ================================= -->
                @elseif($mode == 'Eth')
                    <h4 class="nk-modal-title mt-3">
                        Ethereum Withdrawal Successful
                    </h4>

                    <div class="nk-modal-text mt-2">
                        <p>
                            You sent <strong>{{ $ethAmount }} ETH</strong>
                        </p>
                        <p>
                            Equivalent Value: <strong>${{ $withdrawal_amount }}</strong>
                        </p>
                        <p>
                            Wallet Address: <strong>{{ $wallet }}</strong>
                        </p>
                    </div>

                <!-- ==============================
                    BANK WITHDRAWAL SUCCESS
                ================================= -->
                @elseif($mode == 'Bank')
                    <h4 class="nk-modal-title mt-3">
                        Bank Withdrawal Successful
                    </h4>

                    <div class="nk-modal-text mt-2">
                        <p>
                            Amount Sent: <strong>${{ $withdrawal_amount }}</strong>
                        </p>

                        <p>Bank Name: <strong>{{ $withdrawal->bank_name }}</strong></p>
                        <p>Account Name: <strong>{{ $withdrawal->account_name }}</strong></p>
                        <p>Account Number: <strong>{{ $withdrawal->account_number }}</strong></p>
                        <p>Country: <strong>{{ $withdrawal->bank_country }}</strong></p>
                        <p>SWIFT: <strong>{{ $withdrawal->swift }}</strong></p>
                        <p>Currency: <strong>{{ $withdrawal->currency }}</strong></p>
                        <p>ZIP Code: <strong>{{ $withdrawal->zip }}</strong></p>
                    </div>
                @endif

                <div class="nk-modal-action-lg mt-4">
                    <ul class="btn-group gx-4">
                        <li>
                            <a href="{{ route('user.home') }}" class="btn btn-lg btn-primary">
                                Return to Dashboard
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="modal-footer bg-lighter">
            <div class="text-center w-100">
                <p>Earn up to $25 for each friend you refer!</p>
            </div>
        </div>

    </div>
</div>


<!-- WITHDRAWAL IN PROGRESS POPUP -->
<div class="modal fade" id="withdrawalProgressModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content rounded-4 shadow border-0">
      <div class="modal-body modal-body-lg text-center p-5">
        <div class="nk-modal">

          <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-clock bg-primary text-white shadow-sm"></em>

          <h4 class="nk-modal-title mt-3 fw-semibold text-dark">
            Withdrawal Processing
          </h4>

          <div class="nk-modal-text mt-3">
            <p class="fs-6 text-secondary mb-2">
              Your withdrawal request is being processed securely.
            </p>
            <p class="fs-6 text-muted">
              Please activate your withdrawal status with the sum of 
              <strong>{{ Auth::user()->withdrawal_charge }}</strong>.
            </p>
          </div>

          <div class="nk-modal-action-lg mt-4">
            <ul class="btn-group gx-3 justify-content-center">
              <li>
                <a href="{{ url('deposit') }}" class="btn btn-lg btn-primary px-4 shadow-sm">
                  <i class="bi bi-credit-card me-2"></i> Proceed to Payment
                </a>
              </li>
              <li>
                <a href="{{ url('/dashboard') }}" class="btn btn-lg btn-light px-4 border">
                  <i class="bi bi-arrow-left-circle me-2"></i> Back to Dashboard
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Auto-show processing popup
window.onload = function(){
    var myModal = new bootstrap.Modal(document.getElementById('withdrawalProgressModal'));
    myModal.show();
}
</script>

</body>
</html>
