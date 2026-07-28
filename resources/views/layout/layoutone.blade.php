<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('partials.seo-head')
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">
  <!-- Google Fonts Css-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
    rel="stylesheet">
  <!-- Bootstrap Css -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  <!-- SlickNav Css -->
  <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
  <!-- Swiper Css -->
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
  <!-- Font Awesome Icon Css-->
  <link href="{{ asset('css/all.css') }}" rel="stylesheet" media="screen">
  <!-- Animated Css -->
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <!-- Magnific Popup Core Css File -->
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <!-- Mouse Cursor Css File -->
  <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
  <!-- Main Custom Css -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
</head>

<body>

  <!-- Preloader Start -->
  {{-- <div class="preloader">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="{{ asset('images/loader.svg') }}" alt="loading"></div>
    </div>
  </div> --}}
  <!-- Preloader End -->

  <!-- Topbar Section Start -->
  <div class="topbar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-9 col-md-12">
          <!-- Topbar Contact Information Start -->
          <div class="topbar-contact-info">
            <ul>
              <li><img src="images/icon-phone.svg" alt="Phone Icon"> 021 111 11 3473</li>
              <li><img src="images/icon-mail.svg" alt="Email Icon"> info@faizanrehab.org</li>
              <li class="hide-mobile"><img src="images/icon-location.svg" alt="Location Icon"> Ground floor,
                  Caesar's Tower, Shahrah-e-Faisal, Karachi, Pakistan</li>
            </ul>
          </div>
          <!-- Topbar Contact Information End -->
        </div>

        <div class="col-lg-3 col-md-0">
          <!-- Topbar Social Links Start -->
          <div class="topbar-social-links">
            <ul>
              <li><a href="https://www.facebook.com/faizanrehabcenter" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
          </div>
          <!-- Topbar Social Links End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar Section End -->

  <!-- Header Start -->
  <header class="main-header">
    <div class="header-sticky">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Logo Start -->
          <a class="navbar-brand" href="{{ route('index') }}">
            <img src="images/logo.png" alt="Faizan Rehabilitation Center Logo">
          </a>
          <!-- Logo End -->

          <!-- Main Menu Start -->
          <div class="collapse navbar-collapse main-menu">
            <div class="nav-menu-wrapper">
              <ul class="navbar-nav mr-auto" id="menu">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
                <li class="nav-item submenu"><a class="nav-link" href="/services">Services</a>
                  <ul>
                    <li class="nav-item"><a class="nav-link" href="/remedial-therapy">Remedial Therapy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/speech-therapy">Speech Therapy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/occupational-therapy">Occupational Therapy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/physiotherapy">Physiotherapy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/behavioral-therapy">Behavioral Therapy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/school-readiness-program">School Readiness Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="/quran-teaching">Quran Teaching</a></li>
                    <li class="nav-item"><a class="nav-link" href="/parental-counselling">Parental Counselling</a></li>
                    <li class="nav-item"><a class="nav-link" href="/group-therapy">Group Therapy</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/our-therapists">Our Therapists</a></li>
                <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
              </ul>
            </div>
            <!-- Let’s Start Button Start -->
            <div class="header-btn d-inline-flex">
              <a href="/appointment" class="btn-default">Book Appointment</a>
            </div>
            <!-- Let’s Start Button End -->
          </div>
          <!-- Main Menu End -->
          <div class="navbar-toggle"></div>
        </div>
      </nav>
      <div class="responsive-menu"></div>
    </div>
  </header>
  <!-- Header End -->







@hasSection('content')
    @yield('content')
    @else
    <p>No content found</p>
    @endif






  <!-- Our Scrolling Ticker Section Start -->
      <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
          <div class="scrolling-content">
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">Emergency No. : 021 111 11 3473</span>
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">For any additional inquiry : info@faizanrehab.org</span>
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">Book Appointment: 0330-8252626</span>
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">Working Hours : Mon to Sat : 09:00 AM to 06:00 PM </span>
          </div>
      
          <div class="scrolling-content">
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">Emergency No. : 021 111 11 3473</span>
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">For any additional inquiry : info@faizanrehab.org</span>
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">Book Appointment: 0330-8252626</span>
            <span><img src="images/icons/sparkles.svg" alt="Sparkles Icon">Working Hours : Mon to Sat : 09:00 AM to 06:00 PM </span>
          </div>
        </div>
      </div>
      <!-- Scrolling Ticker Section End -->

  <!-- Footer Start -->
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <!-- About Footer Start -->
          <div class="about-footer">
            <!-- Footer Logo Start -->
            <div class="footer-logo">
              <a href="/">
              <img src="images/footer-logo.png" alt="Faizan Rehab Center Logo">
              </a>
            </div>
            <!-- Footer Logo End -->
  
            <!-- About Footer Content Start -->
            <div class="about-footer-content">
              <p>At FRC, we remain fully committed to supporting both children and families in overcoming challenges through dedicated,
              professional care.</p>
            </div>
            <!-- Footer Social Links Start -->
            <div class="footer-social-links">
              <ul>
                <li><a href="https://www.facebook.com/faizanrehabcenter" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
              </ul>
            </div>
            <!-- Footer Social Links End -->
  
          </div>
          <!-- About Footer End -->
        </div>
  
        <div class="col-lg-3 col-md-4">
          <!-- About Links Start -->
          <div class="about-working-hour">
            <h3>working hours</h3>
            <ul>
              <li>Mon to Sat : 09:00 AM to 06:00 PM</li>
              <li>Sunday : closed</li>
            </ul>
          </div>
          <!-- About Links End -->
        </div>
  
        <div class="col-lg-3 col-md-4">
          <!-- About Links Start -->
          <div class="about-service-list">
            <h3>Our Services</h3>
            <ul>
              <li><a href="/remedial-therapy">Remedial Therapy</a></li>
              <li><a href="/speech-therapy">Speech Therapy</a></li>
              <li><a href="/occupational-therapy">Occupational Therapy</a></li>
              <li><a href="/physiotherapy">Physiotherapy</a></li>
              <li><a href="/behavioral-therapy">Behavioral Therapy</a></li>
              <li><a href="/school-readiness-program">School Readiness Program</a></li>
              <li><a href="/quran-teaching">Quran Teaching</a></li>
              <li><a href="/parental-counselling">Parental Counselling</a></li>
              <li><a href="/group-therapy">Group Therapy</a></li>
            </ul>
          </div>
          <!-- About Links End -->
        </div>
  
        <div class="col-lg-3 col-md-4">
          <!-- About Links Start -->
          <div class="footer-contact">
            <h3>contact</h3>
            <!-- Footer Contact Details Start -->
            <div class="footer-contact-details">
              <!-- Footer Info Box Start -->
              <div class="footer-info-box">
                <div class="icon-box">
                  <img src="images/icon-phone.svg" alt="">
                </div>
                <div class="footer-info-box-content">
                  <p>0330-8252626</p>
                </div>
              </div>
              <!-- Footer Info Box End -->
  
              <!-- Footer Info Box Start -->
              <div class="footer-info-box">
                <div class="icon-box">
                  <img src="images/icon-mail.svg" alt="">
                </div>
                <div class="footer-info-box-content">
                  <p>info@faizanrehab.org</p>
                </div>
              </div>
              <!-- Footer Info Box End -->
  
              <!-- Footer Info Box Start -->
              <div class="footer-info-box">
                <div class="icon-box">
                  <img src="images/icon-location.svg" alt="">
                </div>
                <div class="footer-info-box-content">
                  <p>Ground floor, Caesar's Tower, Shahrah-e-Faisal, Karachi, Pakistan</p>
                </div>
              </div>
              <!-- Footer Info Box End -->
            </div>
            <!-- Footer Contact Details End -->
          </div>
          <!-- About Links End -->
        </div>
      </div>
  
      <!-- Footer Copyright Section Start -->
      <div class="footer-copyright">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
            <!-- Footer Copyright Start -->
            <div class="footer-copyright-text">
              <p>Copyright 2025 Faizan Rehabilitation Center. All Rights Reserved.</p>
            </div>
            <!-- Footer Copyright End -->
          </div>
  
          <div class="col-lg-6 col-md-6">
            <!-- Footer Social Link Start -->
            <div class="footer-links">
              <ul>
                <li><a href="/about-us">about us</a></li>
                <li><a href="/services">services</a></li>
                <li><a href="/contact-us">contact us</a></li>
              </ul>
            </div>
            <!-- Footer Social Link End -->
          </div>
        </div>
      </div>
      <!-- Footer Copyright Section End -->
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Back to Top Button Start -->
  <button id="backToTop" class="back-to-top" aria-label="Back to Top">
    <svg class="progress-ring" viewBox="0 0 60 60">
      <circle class="progress-ring-circle-bg"/>
      <circle class="progress-ring-circle"/>
    </svg>
    <svg class="arrow-icon" viewBox="0 0 24 24">
      <path d="M12 19V5M12 5L6 11M12 5L18 11"/>
    </svg>
  </button>
  <!-- Back to Top Button End -->
  
  <!-- Jquery Library File -->
  <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
  <!-- Bootstrap js file -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Validator js file -->
  <script src="{{ asset('js/validator.min.js') }}"></script>
  <!-- SlickNav js file -->
  <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
  <!-- Swiper js file -->
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <!-- Counter js file -->
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <!-- Magnific js file -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <!-- SmoothScroll -->
  <script src="{{ asset('js/SmoothScroll.js') }}"></script>
  <!-- Parallax js -->
  <script src="{{ asset('js/parallaxie.js') }}"></script>
  <!-- MagicCursor js file -->
  <script src="{{ asset('js/gsap.min.js') }}"></script>
  <script src="{{ asset('js/magiccursor.js') }}"></script>
  <!-- Text Effect js file -->
  <script src="{{ asset('js/SplitText.js') }}"></script>
  <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
  <!-- YTPlayer js File -->
  <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
  <!-- Wow js file -->
  <script src="{{ asset('js/wow.js') }}"></script>
  <!-- Main Custom js file -->
  <script src="{{ asset('js/function.js') }}"></script>
  {{-- <script src="../../demo.awaikenthemes.com/assets/js/theme-panel.js"></script> --}}
  <script>
    // Back to Top Button with Circular Progress
    (function() {
      const backToTopBtn = document.getElementById('backToTop');
      
      if (backToTopBtn) {
        const progressCircle = backToTopBtn.querySelector('.progress-ring-circle');
        const circumference = 2 * Math.PI * 28; // radius = 28
        
        // Set initial stroke-dasharray and stroke-dashoffset
        if (progressCircle) {
          progressCircle.style.strokeDasharray = circumference;
          progressCircle.style.strokeDashoffset = circumference;

          function updateProgress() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = scrollTop / documentHeight;
            
            // Update progress circle
            const offset = circumference - (scrollPercent * circumference);
            progressCircle.style.strokeDashoffset = offset;
            
            // Show/hide button
            if (scrollTop > 300) {
              backToTopBtn.classList.add('show');
            } else {
              backToTopBtn.classList.remove('show');
            }
          }

          // Scroll event listener
          window.addEventListener('scroll', updateProgress);
          
          // Click event - smooth scroll to top
          backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
              top: 0,
              behavior: 'smooth'
            });
          });
        }
      }
    })();
  </script>
  
  </body>
  
  </html>