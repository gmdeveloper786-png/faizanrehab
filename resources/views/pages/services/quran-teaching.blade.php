@extends('layout.layoutone')
@section('title')
Quran Teaching
@endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">Quran Teaching</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item"><a href="/services">services <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item active" aria-current="page">Quran Teaching</li>
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
              <img src="{{ asset('images/services/quran-teaching/1.jpg') }}" alt="Quran Teaching Image 1">
            </figure>
          </div>
          <!-- Service Featured Image End -->

          <!-- Service Entry Content Start -->
          <div class="service-entry">
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Quran Teaching</h3>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Teaching the Quran to children with special needs provides meaningful spiritual, cognitive, and developmental benefits.
            It strengthens their connection with faith while supporting language development and communication skills. Structured
            learning enhances focus, memory, and emotional regulation. This approach also promotes inclusive, respectful learning
            environments that support holistic growth.</p>

            <h3 class="wow fadeInUp" data-wow-delay="0.6s">Inclusive Quran Education for Children with Special Needs</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Quran teaching for children with special needs is delivered with patience, compassion, and individualized support to
            ensure effective learning and spiritual growth. Children may experience challenges such as limited attention, learning
            delays, speech difficulties, sensory sensitivities, or behavioral concerns. Teaching methods are adapted using simple
            language, repetition, visual aids, and multi sensory techniques in a calm and supportive environment. With flexible
            pacing and positive reinforcement, we help children overcome learning barriers, build confidence, and develop a
            meaningful connection with the Quran.</p>

            <h3 class="wow fadeInUp" data-wow-delay="1s">Key Features</h3>
            <ul class="wow fadeInUp" data-wow-delay="1.2s">
              <li>Good Manners: Teach appropriate behaviors, such as saying 'Salam' and expressing gratitude with 'JazakAllah.'</li>
              <li>Focus on Tajweed: Emphasize the correct pronunciation and recitation of the Quran.</li>
              <li>Memorization of Short Surahs: Encourage memorization of various short Surahs, incorporating important concepts like
              Ta'awwuz, Tasmiyah, the dua before eating, the dua before drinking milk, the dua before sleeping, and many other things
              as well.</li>
              <li>Recognizing Arabic Rules: Help children recognize and differentiate Arabic Qawaid (rules).</li>
            </ul>

            <div class="service-entry-image">
              <div class="row">
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/quran-teaching/2.jpg')}}" alt="Quran Teaching Image 2">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/quran-teaching/3.jpg')}}" alt="Quran Teaching Image 3">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/quran-teaching/4.jpg')}}" alt="Quran Teaching Image 4">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/quran-teaching/1.jpg')}}" alt="Quran Teaching Image 5">
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
              <li class="active">Quran Teaching</li>
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