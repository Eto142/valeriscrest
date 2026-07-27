<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/swift meta/layouts/{{route('user.home')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Nov 2025 21:17:32 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | swift meta - user dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="user dashboard" name="description" />
        <meta content="" name="" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <!-- plugin css -->
        <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{route('user.home')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="logo.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="logo.png" alt="" height="24"> <span class="logo-txt">swift meta</span>
                                </span>
                            </a>

                            <a href="{{route('user.home')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="logo.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="logo.png" alt="" height="24"> <span class="logo-txt">swift meta</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            {{-- <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button> --}}
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>

                        {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ Auth::user()->photo ? asset('user/uploads/id/'.Auth::user()->photo) : asset('default-avatar.png') }}" alt="{{ Auth::user()->name }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                {{-- <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('user.logout.perform') }}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                         {{-- <li class="menu-title" data-key="t-menu">Available Balance</li>
                           <li>
                                <a href="#">
                                    <i data-feather="home"></i>
                                    <span class="badge rounded-pill bg-success-subtle text-success float-end"></span>
                                    <span data-key="t-dashboard">{{$btc_balance}}</span>
                                </a>
                            </li> --}}
                        

                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="{{route('user.home')}}">
                                    <i data-feather="home"></i>
                                    <span class="badge rounded-pill bg-success-subtle text-success float-end"></span>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-apps">Trading Menu</li>
                
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bi bi-bar-chart"></i>

                                    <span data-key="t-ecommerce">Trading Options</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('user.forex')}}" key="t-products">Forex Trade</a></li>
                                    <li><a href="{{route('user.binary')}}" data-key="t-product-detail">Binary Trade</a></li>
                                    <li><a href="{{route('user.stocks')}}" data-key="t-orders">Stocks Trade</a></li>
                                    <li><a href="{{route('user.crypto')}}" data-key="t-customers">Crypto Trade</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('user.buy.plan')}}">
                                  <i class="bi bi-cash-stack"></i>
                                    <span data-key="t-chat">Invest</span>
                                </a>
                            </li>

                             {{-- <li>
                                <a href="{{route('user.wallet')}}">
                                   <i class="bi bi-wallet2"></i>
                                    <span data-key="t-chat">Wallet</span>
                                </a>
                            </li> --}}

            

                            {{-- <li>
                                <a href="{{route('user.copy')}}">
                                   <i class="bi bi-person-lines-fill"></i>
                                    <span data-key="t-calendar">Copy trade</span>
                                </a>
                            </li> --}}
                

                            
                            <li>
                                <a href="{{route('user.fund.wallet')}}">
                                   <i class="bi bi-box-arrow-in-down"></i>
                                    <span data-key="t-calendar">Deposit</span>
                                </a>
                            </li>
                

                            
                            <li>
                                <a href="{{route('user.withdrawal')}}">
                                   <i class="bi bi-box-arrow-up"></i>
                                    <span data-key="t-calendar">Withdrawal</span>
                                </a>
                            </li>

                            
                            <li>
                                <a href="{{ route('user.crypto.buy') }}">
                                  <i class="bi bi-shield-lock"></i>
                                    <span data-key="t-calendar">Crypto</span>
                                </a>
                            </li>


                            
                            <li>
                                <a href="{{route('user.profile')}}">
                                   <i class="bi bi-person-circle"></i>
                                    <span data-key="t-calendar">My Profile</span>
                                </a>
                            </li>

                                                    <li>
                                <a href="{{route('user.buy.plan')}}">
                                   <i class="bi bi-card-checklist"></i>
                                    <span data-key="t-calendar"> Subscribe To A Plan</span>
                                </a>
                            </li>


                            
                                                    <li>
                                <a href="{{route('user.investment')}}">
                                  <i class="bi bi-clock-history"></i>
                                    <span data-key="t-calendar"> Investment History</span>
                                </a>
                            </li>
                  



                            
                                                    <li>
                                <a href="{{route('user.accounthistory')}}">
                                    <i class="bi bi-receipt"></i>
                                    <span data-key="t-calendar"> Transaction History</span>
                                </a>
                            </li>
                  


                            
                                                    <li>
                                <a href="{{route('user.refer')}}">
                                  <i class="bi bi-people-fill"></i>
                                    <span data-key="t-calendar"> Refer Family & Friends</span>
                                </a>
                            </li>



                            
                                            
    
                
                           

                          

                        <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                            <div class="card-body">
                                <img src="assets/images/giftbox.png" alt="">
                                <div class="mt-4">
                                    <h5 class="alertcard-title font-size-16">Welcome to swift meta</h5>
                                    <p class="font-size-13 text-dark">Refer and get bonuses.</p>
          
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
{{-- 
            @if(Auth::user()->kyc_status == '1')
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1055; min-width: 300px;">
    <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-2" style="font-size: 1.3rem;"></i>
                    <div>
                        <strong>KYC Verified!</strong><br>
                        Your account is fully verified.
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
@else
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1055; min-width: 300px;">
    <div class="toast align-items-center text-bg-warning border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill me-2" style="font-size: 1.3rem;"></i>
                    <div>
                        <strong>KYC Not Verified!</strong><br>
                        Please upload and verify your KYC documents to continue.
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<!-- Optional: Auto hide after 5 seconds -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { delay: 5000, autohide: true }).show()
        })
    });
</script> --}}




            