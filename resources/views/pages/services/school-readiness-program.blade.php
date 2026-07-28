@extends('layout.layoutone')
@section('title')
School Readiness Program
@endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">School Readiness Program</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item"><a href="/services">services <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item active" aria-current="page">School Readiness Program</li>
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
              <img src="{{ asset('images/services/school-readiness-program/1.png') }}" alt="School Readiness Program Image 1">
            </figure>
          </div>
          <!-- Service Featured Image End -->

          <!-- Service Entry Content Start -->
          <div class="service-entry">
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">School Readiness Program</h3>
            <p class="wow fadeInUp" data-wow-delay="0.4s">The school readiness program is designed to prepare children with learning difficulties and special needs for successful
            inclusion in mainstream education. It focuses on developing foundational academic, behavioral, and social skills
            essential for classroom participation. Structured interventions support adaptability and learning confidence. This
            program facilitates a smooth and effective transition into the formal schooling system.</p>

            <h3 class="wow fadeInUp" data-wow-delay="0.6s">School Readiness and Early Learning Development</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Our School Readiness Program is designed to support the development of essential skills that prepare children for a
            successful transition into school. The program focuses on building strong foundations in literacy and numeracy, fine
            motor and writing skills, and speech and language development. Emphasis is also placed on confidence building, cognitive
            growth, and social interaction skills. In addition, children are supported in developing self help skills, enabling them
            to adapt more independently and confidently within a structured school environment.</p>

            <h3 class="wow fadeInUp" data-wow-delay="1s">Key Features</h3>
            <ul class="wow fadeInUp" data-wow-delay="1.2s">
              <li>Self-Regulation</li>
              <li>Structured Learning Environment</li>
              <li>Daily Living Skills</li>
              <li>Group Readiness and Book Reading Skills</li>
              <li>Individualized Education Plans (IEPs)</li>
              <li>Fine Motor and Gross Motor Skills</li>
              <li>Pre-Academic and Academic Skills</li>
              <li>Independence and Self-Care Skills</li>
              <li>Expressive and Receptive Language Skills</li>
              <li>Functional Communication and Social Skills</li>
              <li>Controlling Emotions, Maintaining Attention, and Instructional Skills</li>
            </ul>

            <div class="service-entry-image">
              <div class="row">
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/school-readiness-program/2.png')}}" alt="School Readiness Program Image 2">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/school-readiness-program/3.png')}}" alt="School Readiness Program Image 3">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/school-readiness-program/4.png')}}" alt="School Readiness Program Image 4">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/school-readiness-program/5.jpg')}}" alt="School Readiness Program Image 5">
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
              <li class="active">School Readiness Program</li>
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