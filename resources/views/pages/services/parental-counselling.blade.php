@extends('layout.layoutone')
@section('title')
Parental Counselling
@endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header "> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">Parental Counselling</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item"><a href="/services">services <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item active" aria-current="page">Parental Counselling</li>
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
              <img src="{{ asset('images/services/parental-counselling/1.jpg') }}" alt="Parental Counselling Image 1">
            </figure>
          </div>
          <!-- Service Featured Image End -->

          <!-- Service Entry Content Start -->
          <div class="service-entry">
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Parental Counselling</h3>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Parental counseling provides a structured and supportive environment for families navigating the emotional and practical
            aspects of raising a child with a disability. It assists parents in managing stress, grief, guilt, and anxiety through
            professional guidance. Counseling also offers education, coping strategies, and emotional support tailored to family
            needs. This service empowers parents to make informed decisions and actively participate in their child’s care journey.</p>

            <h3 class="wow fadeInUp" data-wow-delay="0.6s">Parent Counseling and Guidance Support</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Parent counseling focuses on empowering parents with the knowledge, skills, and strategies needed to support their
            child’s development effectively. Through professional guidance, parents gain a better understanding of their child’s
            behavioral, emotional, and developmental needs. Counseling sessions help address concerns related to communication,
            learning difficulties, emotional regulation, and daily routines, while promoting positive parenting practices. By
            strengthening parent–child relationships and enhancing coping and problem-solving skills, parent counseling plays a
            vital role in creating a supportive home environment that encourages growth, confidence, and overall well-being.</p>

            <h3 class="wow fadeInUp" data-wow-delay="1s">Key Features</h3>
            <ul class="wow fadeInUp" data-wow-delay="1.2s">
              <li>Parents learn coping skills</li>
              <li>Open family communication</li>
              <li>Community engagement</li>
              <li>It helps the siblings</li>
              <li>Learn about the medical condition</li>
              <li>Strengthen your marriage while raising children with special needs</li>
              <li>Parents can regain joy and balance in their lives while actively participating in their child's development</li>
              <li>Offers a path toward resilience and effective coping during challenging times</li>
            </ul>

            <div class="service-entry-image">
              <div class="row">
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/parental-counselling/2.jpg')}}" alt="Parental Counselling Image 2">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/parental-counselling/3.jpg')}}" alt="Parental Counselling Image 3">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/parental-counselling/4.webp')}}" alt="Parental Counselling Image 4">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/parental-counselling/1.jpg')}}" alt="Parental Counselling Image 5">
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
              <li><a href="/physiotherapy">Physiotherapy</a></li>
              <li><a href="/behavioral-therapy">Behavioral Therapy</a></li>
              <li><a href="/school-readiness-program">School Readiness Program</a></li>
              <li><a href="/quran-teaching">Quran Teaching</a></li>
              <li class="active">Parental Counselling</li>
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