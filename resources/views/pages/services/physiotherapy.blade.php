@extends('layout.layoutone')
@section('title')
Physiotherapy
@endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">Physiotherapy</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item"><a href="/services">services <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item active" aria-current="page">Physiotherapy</li>
            </ol>
          </nav>
        </div>
        <!-- Page Header Box End -->
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Page Service Single Start -->
<div class="page-service-single">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Service Single Content Start -->
        <div class="service-single-content">
          <!-- Service Featured Image Start -->
          <div class="service-featured-img">
            <figure class="reveal image-anime">
              <img src="{{ asset('images/services/physiotherapy/1.png') }}" alt="Physiotherapy Image 1">
            </figure>
          </div>
          <!-- Service Featured Image End -->

          <!-- Service Entry Content Start -->
          <div class="service-entry">
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Physiotherapy</h3>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Physiotherapy supports children in developing strength, mobility, and coordination to move safely and effectively within
            their environment. Through structured, goal-oriented interventions, therapy enhances functional movement and physical
            independence. Our approach focuses on improving posture, balance, and motor control. This enables children to engage in
            daily activities with greater confidence and ease.</p>


            <h3 class="wow fadeInUp" data-wow-delay="0.6s">Pediatric Physical and Developmental Conditions</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Our pediatric care focuses on helping children interact with their environment smoothly and confidently by addressing a
            wide range of physical and developmental challenges. These include developmental delays affecting head control, sitting
            balance, crawling, and walking, as well as acute soft tissue injuries and congenital conditions such as club foot and
            torticollis. We also provide rehabilitation for post operative conditions and manage developmental conditions that
            impact overall motor function. Children with movement coordination difficulties and gait problems, including flat feet,
            toe walking, and frequent falls, benefit from targeted therapy aimed at improving strength, balance, mobility, and
            functional independence.</p>

            <h3 class="wow fadeInUp" data-wow-delay="1s">Key Features</h3>
            <ul class="wow fadeInUp" data-wow-delay="1.2s">
              <li>Acute Soft Tissue Injuries</li>
              <li>Developmental Conditions</li>
              <li>Gait Problems (Flat Feet, Toe Walking, and Falling)</li>
              <li>Post-Operative Conditions</li>
              <li>Congenital Conditions (Clubfoot, Torticollis)</li>
              <li>Difficulties Coordinating Movement</li>
              <li>Developmental Delay (Head Control, Sitting Balance, Crawling, and Walking)</li>
            </ul>

            <div class="service-entry-image">
              <div class="row">
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/physiotherapy/2.png')}}" alt="Physiotherapy Image 2">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/physiotherapy/3.png')}}" alt="Physiotherapy Image 3">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/physiotherapy/4.png')}}" alt="Physiotherapy Image 4">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/physiotherapy/5.png')}}" alt="Physiotherapy Image 5">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Entry Content End -->
        </div>
        <!-- Service Single Content End -->
      </div>
      <div class="col-lg-4">
        <!-- Service Sidebar Start -->
        <div class="service-sidebar">
          <!-- Service Categories List Start -->
          <div class="service-catagery-list wow fadeInUp">
            <h3>Our Services</h3>
            <ul>
              <li><a href="/remedial-therapy">Remedial Therapy</a></li>
              <li><a href="/speech-therapy">Speech Therapy</a></li>
              <li><a href="/occupational-therapy">Occupational Therapy</a></li>
              <li class="active">Physiotherapy</li>
              <li><a href="/behavioral-therapy">Behavioral Therapy</a></li>
              <li><a href="/school-readiness-program">School Readiness Program</a></li>
              <li><a href="/quran-teaching">Quran Teaching</a></li>
              <li><a href="/parental-counselling">Parental Counselling</a></li>
              <li><a href="/group-therapy">Group Therapy</a></li>
            </ul>
          </div>
          <!-- Service Categories List End -->

          <!-- Opening Hour Section Start -->
          <div class="opening-hour-section wow fadeInUp" data-wow-delay="0.25s">
            <h3>Opening Hours</h3>
            <ul>
              <li>Mon to Sat : 09:00 AM to 06:00 PM</li>
              <li>Sun : Closed</li>
            </ul>
          </div>
          <!-- Opening Hour Section End -->

          <!-- Sidebar Cta Box Start -->
          <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.5s">
            <!-- Cta Content Start -->
            <div class="icon-box">
              <img src="images/icons/cta.svg" alt="CTA Icon" width="70%">
            </div>

            <div class="cta-content">
              <h3>Get In Touch With Us</h3>
              <p>We build strong connections with the ones who seek our assistance!</p>
            </div>
            <!-- Cta Content End -->

            <!-- Cta Appointment Button Start -->
            <div class="cta-appointment-btn">
              <a href="/appointment" class="btn-default">Book Appointment</a>
            </div>
            <!-- Cta Appointment Button End -->
          </div>
          <!-- Sidebar Cta Box End -->
        </div>
        <!-- Service Sidebar End -->
      </div>

      {{-- <div class="col-lg-12">
        <div class="video-section text-center mt-5">
          <div class="ratio ratio-16x9">
            <video autoplay loop muted playsinline class="w-100 rounded">
              <source src="{{ asset('images/services/remedial therapy/video.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
</div>
<!-- Page Service Single End -->

@endsection