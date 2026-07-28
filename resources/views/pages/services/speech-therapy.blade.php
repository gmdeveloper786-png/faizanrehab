@extends('layout.layoutone')
@section('title')
Speech Therapy
@endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">Speech Therapy</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item"><a href="/services">services <span class="mx-2">/</span></a></li>
              <li class="breadcrumb-item active" aria-current="page">Speech Therapy</li>
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
              <img src="{{ asset('images/services/speech-therapy/1.jpg') }}" alt="Speech Therapy Image 1">
            </figure>
          </div>
          <!-- Service Featured Image End -->

          <!-- Service Entry Content Start -->
          <div class="service-entry">
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Speech Therapy</h3>
            <p class="wow fadeInUp" data-wow-delay="0.4s">We provide comprehensive assessment and evidence-based intervention for a full spectrum of communication disorders. Our
            approach focuses on identifying underlying challenges through skilled clinical evaluation. Targeted therapy plans are
            designed to enhance speech, language, and communication abilities. Each intervention is delivered with precision,
            consistency, and measurable outcomes in mind.</p>


            <h3 class="wow fadeInUp" data-wow-delay="0.6s">Comprehensive Speech and Communication Disorders</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Speech and communication disorders include a broad range of conditions that affect speech clarity, language
            comprehension, voice quality, fluency, and safe swallowing. These disorders may involve articulation and phonological
            difficulties, fluency and voice disorders, and neurologically based conditions such as aphasia, dysarthria, and apraxia
            of speech. Neurogenic speech and swallowing disorders, including dysphagia and mastication problems, can impact daily
            functioning and overall health. Psychological, emotional, and behavioral based communication disorders further influence
            effective expression and interaction. Accurate assessment and targeted therapy are essential to restore communication
            skills, promote safety, and improve quality of life.</p>


            <h3 class="wow fadeInUp" data-wow-delay="1s">Key Features</h3>
            <ul class="wow fadeInUp" data-wow-delay="1.2s">
              <li>Aphasia</li>
              <li>Dysphagia</li>
              <li>Voice Disorder</li>
              <li>Mastication Problems</li>
              <li>Fluency Disorder</li>
              <li>Dysarthria and Apraxia of Speech</li>
              <li>Speech and Language Disorders</li>
              <li>Neurogenic Speech and Swallowing Disorder</li>
              <li>Articulation and Phonological Disorders</li>
              <li>Psychological, Emotional, and Behavioural-Based Communication Disorders</li>
            </ul>

            <div class="service-entry-image">
              <div class="row">
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/speech-therapy/2.jpg')}}" alt="Speech Therapy Image 2">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/speech-therapy/3.jpg')}}" alt="Speech Therapy Image 3">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-1">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/speech-therapy/4.jpg')}}" alt="Speech Therapy Image 4">
                    </figure>
                  </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class="service-entry-img-2">
                    <figure class="image-anime reveal">
                      <img src="{{ asset('images/services/speech-therapy/5.jpg')}}" alt="Speech Therapy Image 5">
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
              <li class="active">Speech Therapy</li>
              <li><a href="/occupational-therapy">Occupational Therapy</a></li>
              <li><a href="/physiotherapy">Physiotherapy</a></li>
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