@extends('layout.layoutone')
@section('title')
    About Us
@endsection
@section('content')

  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">About Us</h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a> <span class="mx-2">/</span></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Our Mission Start -->
  <div class="about-us page-about-us">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <!-- About Image Start -->
          <div class="about-us-image">
            <div class="about-img">
              <figure class="reveal image-anime">
                <img src="{{ asset('images/about-img.jpg') }}" alt="About Us Image">
              </figure>
            </div>
          </div>
          <!-- About Image End -->
        </div>
        <div class="col-lg-6">
          <!-- About Us Content Start -->
          <div class="about-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">Our Mission</h3>
              <h2 class="text-anime-style-2" data-cursor="-opaque">Our Mission<span> To Help Your Child</span></h2>
              <p class="wow fadeInUp" data-wow-delay="0.25s">To enhance the quality of life for children with special needs and their families by equipping them for maximum
              independence in learning and daily living. To foster the abilities and potential of children with special needs within a
              safe, structured, and supportive environment through individualized education and therapeutic intervention.</p>
            </div>
            <!-- Section Title End -->

      
          </div>
          <!-- About Us Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Our Mission End -->


<!-- Our Vision Start -->
  <div class="about-us page-about-us our-vision">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <!-- About Us Content Start -->
          <div class="about-content our-vision-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">Our Vision</h3>
              <h2 class="text-anime-style-2" data-cursor="-opaque">Our Vision<span> To Help Your Child</span></h2>
              <p class="wow fadeInUp" data-wow-delay="0.25s">Creating a future in which children with special needs have equitable access to high-quality, inclusive rehabilitation
              services that promote dignity, independence, and long-term well-being. Through structured care, family collaboration,
              and evidence-based interventions, we strive to empower children and their families while advancing sustainable outcomes
              that enable every child to thrive and achieve their full potential.</p>
            </div>
            <!-- Section Title End -->        
          </div>
          <!-- About Us Content End -->
        </div>
        <div class="col-lg-6">
          <!-- About Image Start -->
          <div class="about-us-image">
            <div class="about-img">
              <figure class="reveal image-anime">
                <img src="{{ asset('images/our-vision.jpg') }}" alt="About Us Image">
              </figure>
            </div>
          </div>
          <!-- About Image End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Our Vision End -->

<!-- Our Core Values Start -->
  <div class="quality-treatment">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <!-- Video Treatment Video Start -->
          <div class="quality-treatment-video">
            <!-- Video Image Start -->
            <div class="video-image">
              
                <figure class="image-anime">
                  <img src="{{ asset('images/our-core-values.jpg') }}" alt="Our Core Values Image">
                </figure>
              
            </div>
            <!-- Video Image End -->
          </div>
          <!-- Video Treatment Video End -->
        </div>
  
        <div class="col-lg-6">
          <!-- Quality Treatment Content Start -->
          <div class="quality-treatment-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">Our Core Values</h3>
              <h2 class="text-anime-style-2" data-cursor="-opaque">Our Core Values<span> To Help Your Child</span></h2>
              <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to delivering the highest standards of care for children with special needs through ethical,
              evidence-based practices. Our philosophy emphasizes individualized treatment, collaborative family engagement, and
              continuous clinical excellence to ensure meaningful, long-term outcomes.</p>
            </div>
            <!-- Section Title End -->
  
            <!-- Quality Treatment Body Start -->
            <div class="quality-treatment-body wow fadeInUp" data-wow-delay="0.5s">
              <ul>
                <li>Collaboration</li>
                <li>Result-Oriented</li>
                <li>Acceptance of Differences</li>
                <li>Dedication and Commitment</li>
                <li>Learn Through Play and Hands-on</li>
              </ul>
            </div>
            <!-- Quality Treatment Body End -->
          </div>
          <!-- Quality Treatment Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Our Core Values End -->


  <!-- Company Counter Start -->
  <div class="company-counter">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <!-- Company Counter Item Start -->
          <div class="company-counter-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/registrations.svg') }}" alt="Registrations Icon" width="70%">
            </div>
            <!-- Icon Box End -->

            <!-- Company Counter Content Start -->
            <div class="company-counter-content">
              <h3><span class="counter">22,000</span></h3>
              <p>Total Registrations</p>
            </div>
            <!-- Company Counter Content End -->
          </div>
          <!-- Company Counter Item End -->
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <!-- Company Counter Item Start -->
          <div class="company-counter-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/assessments.svg') }}" alt="Assessments Icon" width="70%">
            </div>
            <!-- Icon Box End -->

            <!-- Company Counter Content Start -->
            <div class="company-counter-content">
              <h3><span class="counter">6,204</span></h3>
              <p>Total Assessments</p>
            </div>
            <!-- Company Counter Content End -->
          </div>
          <!-- Company Counter Item End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Company Counter Item Start -->
          <div class="company-counter-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/enrollments.svg') }}" alt="Enrollments Icon" width="70%">
            </div>
            <!-- Icon Box End -->

            <!-- Company Counter Content Start -->
            <div class="company-counter-content">
              <h3><span class="counter">1592</span></h3>
              <p>Total Enrolments</p>
            </div>
            <!-- Company Counter Content End -->
          </div>
          <!-- Company Counter Item End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Company Counter Item Start -->
          <div class="company-counter-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/sessions.svg') }}" alt="Sessions Icon" width="70%">
            </div>
            <!-- Icon Box End -->

            <!-- Company Counter Content Start -->
            <div class="company-counter-content">
              <h3><span class="counter">164,878</span></h3>
              <p>Total Sessions</p>
            </div>
            <!-- Company Counter Content End -->
          </div>
          <!-- Company Counter Item End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Company Counter Item Start -->
          <div class="company-counter-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/waiting.svg') }}" alt="Waiting Icon" width="70%">
            </div>
            <!-- Icon Box End -->
        
            <!-- Company Counter Content Start -->
            <div class="company-counter-content">
              <h3><span class="counter">2,000</span></h3>
              <p>Currently Waiting</p>
            </div>
            <!-- Company Counter Content End -->
          </div>
          <!-- Company Counter Item End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Company Counter Item Start -->
          <div class="company-counter-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/therapists.svg') }}" alt="Therapist Icon" width="90%">
            </div>
            <!-- Icon Box End -->
        
            <!-- Company Counter Content Start -->
            <div class="company-counter-content">
              <h3><span class="counter">78</span></h3>
              <p>Skilled Therapists</p>
            </div>
            <!-- Company Counter Content End -->
          </div>
          <!-- Company Counter Item End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Company Counter End -->



<!-- Our Visitor Start -->
<div class="quality-treatment">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <!-- Quality Treatment Content Start -->
        <div class="quality-treatment-content">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">Our Visitor</h3>
            <h2 class="text-anime-style-2" data-cursor="-opaque">Faizan Rehabilitation Centre
              Faisalabad Visit</h2>
            <p class="wow fadeInUp" data-wow-delay="0.25s">Syed Fuzail Raza Attari, head of FGRF UK, visited the
              <strong>Faizan Rehabilitation Centre in Faisalabad</strong>, where he toured various therapy rooms and witnessed
              the impactful services being provided to individuals with special needs. A glimpse of compassion and care in
              action.</p>
          </div>
          <!-- Section Title End -->
        </div>
        <!-- Quality Treatment Content End -->
      </div>
      <div class="col-lg-6">
        <!-- Video Treatment Video Start -->
        <div class="quality-treatment-video">
          <!-- Video Image Start -->
          <div class="video-image">
              <figure class="image-anime">
                <img src="{{ asset('images/our-visitor.jpg') }}" alt="Our Visitor Image">
              </figure>
          </div>
          <!-- Video Image End -->
        </div>
        <!-- Video Treatment Video End -->
      </div>
    </div>
  </div>
</div>
<!-- Our Visitor End -->


  <!-- Our Vision to Victory Start -->
  <div class="mission-vision">
    <div class="container">
      <div class="row section-row">
        <!-- Section Title Start -->
        <div class="section-title">
          <h3 class="wow fadeInUp">Our Vision to Victory</h3>
          <h2 class="text-anime-style-2" data-cursor="-opaque">Our Vision<span> to Victory</span></h2>
        </div>
        <!-- Section Title End -->
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <!-- Mva Item Start -->
          <div class="our-mva-item wow fadeInUp">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icon-our-mission.svg') }}" alt="Comprehensive Evaluation">
            </div>
            <!-- Icon Box End -->

            <!-- Mva Content Start -->
            <div class="mva-item-content">
              <h3>Comprehensive Evaluation</h3>
              <p>Clear, accurate assessment of needs and goals.</p>
            </div>
            <!-- Mva Content End -->
          </div>
          <!-- Mva Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Mva Item Start -->
          <div class="our-mva-item wow fadeInUp" data-wow-delay="0.25s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icon-our-vision.svg') }}" alt="Customized Care Planning">
            </div>
            <!-- Icon Box End -->

            <!-- Mva Content Start -->
            <div class="mva-item-content">
              <h3>Customized Care Planning</h3>
              <p>Personalized therapy plans tailored to each child.</p>
            </div>
            <!-- Mva Content End -->
          </div>
          <!-- Mva Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Mva Item Start -->
          <div class="our-mva-item wow fadeInUp" data-wow-delay="0.5s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icon-our-approch.svg') }}" alt="Expert Therapy Delivery">
            </div>
            <!-- Icon Box End -->

            <!-- Mva Content Start -->
            <div class="mva-item-content">
              <h3>Expert Therapy Delivery</h3>
              <p>Skilled, child-focused treatment by our professional team.</p>
            </div>
            <!-- Mva Content End -->
          </div>
          <!-- Mva Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Mva Item Start -->
          <div class="our-mva-item wow fadeInUp" data-wow-delay="0.5s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icon-our-approch.svg') }}" alt="Functional Skill Integration">
            </div>
            <!-- Icon Box End -->
        
            <!-- Mva Content Start -->
            <div class="mva-item-content">
              <h3>Functional Skill Integration</h3>
              <p>Translating therapy gains into everyday life.</p>
            </div>
            <!-- Mva Content End -->
          </div>
          <!-- Mva Item End -->
        </div>
      </div>

      <!-- Call To Action Start -->
      <div class="cta-infobar wow fadeInUp" data-wow-delay="0.75s">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <!-- Cta Content Start -->
            <div class="cta-info-content">
              <div class="cta-content">
                <h3>Holistic Approach</h3>
                <p>Children with unique learning and behavioural challenges often need multidisciplinary support from a number of
                professionals. At the <strong>Faizan Rehabilitation Centre</strong> we ensure that there are positive working relationships with professionals from within <strong>FRC</strong> as well as our external affiliates. We endeavour to provide the best support for your child from a holistic
                approach.</p>
              </div>
            </div>
            <!-- Cta Content End -->
          </div>

          <div class="col-lg-6">
            <!-- Cta Content Start -->
            <div class="cta-info-content">
              <div class="cta-content">
                <h3>Parent Involvement in Therapy</h3>
                <p>Engaging parents as partners in the therapeutic process offers clinical and developmental benefits. Their involvement
                strengthens continuity of care by reinforcing strategies beyond clinics. Parental participation enhances skill
                generalization, promotes progress, and supports outcomes. This collaborative approach ensures therapy remains effective
                and aligned with the child’s daily environment.</p>
              </div>
            </div>
            <!-- Cta Content End -->
          </div>

        </div>
      </div>
      <!-- Call To Action End -->
    </div>
  </div>
  <!-- Our Vision to Victory End -->



  <!-- Therapy Process Start -->
  <div class="therapy-process">
    <div class="container">
      <div class="row section-row">
        <div class="col-lg-12">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">Our Therapy Process</h3>
            <h2 class="text-anime-style-2" data-cursor="-opaque">Our Therapy<span> Process</span></h2>
          </div>
          <!-- Section Title End -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <!-- Therapy Process Item Start -->
          <div class="therapy-process-item wow fadeInUp">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <figure class="image-anime">
                <img src="{{ asset('images/process-1.png') }}" alt="Therapy Process Image">
              </figure>
            </div>
            <!-- Icon Box End -->

            <!-- Therapy Process Content Start -->
            <div class="therapy-process-content">
              <h3>Comprehensive Assessment</h3>
              <p>We begin with a detailed evaluation of your child’s strengths, challenges, and developmental needs, ensuring the right
              starting point for care.</p>
            </div>
            <!-- Therapy Process Content End -->
          </div>
          <!-- Therapy Process Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Therapy Process Item Start -->
          <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <figure class="image-anime">
                <img src="{{ asset('images/process-2.png') }}" alt="Therapy Process Image">
              </figure>
            </div>
            <!-- Icon Box End -->

            <!-- Therapy Process Content Start -->
            <div class="therapy-process-content">
              <h3>Personalized Treatment Plan</h3>
              <p>Based on the assessment, we design a customized therapy plan tailored to your child’s goals and comfort.</p>
            </div>
            <!-- Therapy Process Content End -->
          </div>
          <!-- Therapy Process Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Therapy Process Item Start -->
          <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <figure class="image-anime">
                <img src="{{ asset('images/process-3.png') }}" alt="Therapy Process Image">
              </figure>
            </div>
            <!-- Icon Box End -->

            <!-- Therapy Process Content Start -->
            <div class="therapy-process-content">
              <h3>Supportive Therapeutic Progression</h3>
              <p>Our therapists work closely with your child to build skills, confidence, and functional ability, adapting the program as
              they grow.</p>
            </div>
            <!-- Therapy Process Content End -->
          </div>
          <!-- Therapy Process Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Therapy Process Item Start -->
          <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <figure class="image-anime">
                <img src="{{ asset('images/process-4.png') }}" alt="Therapy Process Image">
              </figure>
            </div>
            <!-- Icon Box End -->

            <!-- Therapy Process Content Start -->
            <div class="therapy-process-content">
              <h3>Family-Centered Guidance</h3>
              <p>We involve parents and caregivers throughout the journey, offering education and tools to reinforce progress at home.</p>
            </div>
            <!-- Therapy Process Content End -->
          </div>
          <!-- Therapy Process Item End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Therapy Process End -->



 

  @endsection