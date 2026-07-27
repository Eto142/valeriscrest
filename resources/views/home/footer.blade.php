
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo">
                        <img src="{{ asset('logo.png') }}" alt="valeriscrest Trade Logo" style="width:150px;height:40px;object-fit:contain;">
                    </div>
                    <p class="footer-desc">
                        Are you looking for a stable, reliable, guaranteed weekly income? valeriscrest Trade offers a range of options to make the most of your investment. Get involved to discover the potential of our trading platform.
                    </p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <h6 class="footer-heading">Quick Links</h6>
                    <div class="footer-links">
                        <a href="/">Home</a>
                        <a href="{{ url('about') }}">About Us</a>
                        <a href="{{ url('faqs') }}">FAQs</a>
                        <a href="{{ url('trade') }}">Trade</a>
                        <a href="{{ url('contact') }}">Contact</a>
                        <a href="{{ route('register') }}">Sign Up</a>
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <h6 class="footer-heading">Markets</h6>
                    <div class="footer-links">
                        <a href="{{ route('market.cryptos') }}">Cryptos</a>
                        <a href="{{ route('market.indices') }}">Indices</a>
                        <a href="{{ route('market.forex') }}">Forex</a>
                        <a href="{{ route('market.energies') }}">Energies</a>
                        <a href="{{ route('market.shares') }}">Shares</a>
                        <a href="{{ route('market.options') }}">Options</a>
                        <a href="{{ route('market.etfs') }}">ETFs</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-heading">Contact Information</h6>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>165 Bragaw St, Anchorage, Alaska 99508, United States</span>
                    </div>
                    {{-- <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </div> --}}
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>support@valeriscrest.com</span>
                    </div>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <span class="trust-item" style="font-size:0.75rem;"><i class="fas fa-shield-alt"></i> SSL Secured</span>
                        <span class="trust-item" style="font-size:0.75rem;"><i class="fas fa-lock"></i> Encrypted</span>
                    </div>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} valeriscrest Trade. All rights reserved.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Risk Disclosure</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
    // Initialize Slick Slider for Hero Section
    $(document).ready(function() {
        // Wrap slider items if not already done
        if (!$('.hero-slider').hasClass('slick-initialized')) {
            $('.hero-slider > .slider-item').wrap('<div class="slide-wrap"></div>');
        }
        $('.hero-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            speed: 900,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            arrows: true,
            mobileFirst: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: { arrows: false }
                }
            ]
        });
    });
    </script>
    <!-- Scroll to Top Button -->
    <a href="#" class="scroll-top-btn" id="scrollTopBtn" aria-label="Scroll to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script>
    // Global Preloader
    (function () {
        var loader = document.querySelector('.pre-loader');
        if (!loader) return;
        window.addEventListener('load', function () {
            setTimeout(function () {
                loader.classList.add('hidden');
            }, 300);
        });
        setTimeout(function () { loader.classList.add('hidden'); }, 2500);
    })();

    // Global Navbar Scroll Effect & Scroll To Top
    (function() {
        var navbar = document.querySelector('.navbar');
        var scrollTopBtn = document.getElementById('scrollTopBtn');
        
        window.addEventListener('scroll', function() {
            var scrollY = window.scrollY;
            
            // Navbar
            if (navbar) {
                if (scrollY > 60) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
            
            // Scroll To Top Button
            if (scrollTopBtn) {
                if (scrollY > 300) {
                    scrollTopBtn.classList.add('show');
                } else {
                    scrollTopBtn.classList.remove('show');
                }
            }
        }, { passive: true });
        
        if (scrollTopBtn) {
            scrollTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    })();
    </script>
</body>
</html>