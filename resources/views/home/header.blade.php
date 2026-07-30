<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeris Crest | Premium Trading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
     <link rel="stylesheet" href="{{ asset('assets/home/style.css') }}">
  
</head>
{{-- @include('home.notification') --}}
<body>
    <!-- Lightning Fast Preloader - Only 300ms! -->
    <div class="pre-loader">
        <div class="loader-content">
            <div class="loader-box">
                <div class="loader-square"></div>
            </div>
            <div class="loader-logo">
                <!-- You can replace this with your own logo -->
                <img src="{{ asset('logo.png') }}" alt="GCOWW Logo" style="height:40px; width:auto;">
            </div>
        </div>
    </div>





    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                   <!-- You can replace this with your own logo -->
                    <img src="{{ asset('logo.png') }}" alt="G Logo" style="width:150px; height:40px; object-fit:contain;">
                </a>

                <!-- Mobile Language Selector (Outside Collapse) -->
                <div class="d-flex align-items-center ms-auto me-2 d-lg-none">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center gap-1 px-2.5 py-1" type="button" id="languageSelectorMobile" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 20px; font-size: 0.78rem; font-weight: 500; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); transition: all 0.3s ease;">
                            <span class="current-lang-flag">🇺🇸</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 py-2 lang-dropdown-menu" aria-labelledby="languageSelectorMobile" style="background: rgba(11, 26, 41, 0.95); backdrop-filter: blur(10px); border-radius: 12px; min-width: 160px; max-height: 350px; overflow-y: auto; box-shadow: 0 10px 30px rgba(0,0,0,0.5) !important;">
                            <!-- Dynamically populated -->
                        </ul>
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketsDropdown" role="button" data-bs-toggle="dropdown">
                                MARKETS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('market.cryptos') }}">CRYPTOS</a></li>
                                <li><a class="dropdown-item" href="{{ route('market.indices') }}">INDICES</a></li>
                                <li><a class="dropdown-item" href="{{ route('market.forex') }}">FOREX</a></li>
                                <li><a class="dropdown-item" href="{{ route('market.energies') }}">ENERGIES</a></li>
                                <li><a class="dropdown-item" href="{{ route('market.shares') }}">SHARES</a></li>
                                <li><a class="dropdown-item" href="{{ route('market.options') }}">OPTIONS</a></li>
                                <li><a class="dropdown-item" href="{{ route('market.etfs') }}">ETFS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('faqs') }}">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">CONTACTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('trade') }}">TRADE</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <!-- Desktop Language Dropdown (Inside Collapse) -->
                        <div class="dropdown me-3 d-none d-lg-block">
                            <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center gap-2 px-3 py-1.5" type="button" id="languageSelectorDesktop" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 20px; font-size: 0.85rem; font-weight: 500; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); transition: all 0.3s ease;">
                                <span class="current-lang-flag">🇺🇸</span>
                                <span class="current-lang-name">English</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 py-2 lang-dropdown-menu" aria-labelledby="languageSelectorDesktop" style="background: rgba(11, 26, 41, 0.95); backdrop-filter: blur(10px); border-radius: 12px; min-width: 160px; max-height: 350px; overflow-y: auto; box-shadow: 0 10px 30px rgba(0,0,0,0.5) !important;">
                                <!-- Dynamically populated by translator engine -->
                            </ul>
                        </div>
                        <a href="{{ route('login') }}" class="top-login">Login</a>
                        <a href="{{ route('register') }}" class="top-signup">Signup</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @include('partials.translator')

