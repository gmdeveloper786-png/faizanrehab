@extends('layout.layoutone')
@section('title')
    Services
@endsection
@section('content')

  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">Services</h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">home  <span class="mx-2">/</span></a></li>
                <li class="breadcrumb-item active" aria-current="page">services</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Page Services Start -->
  <div class="page-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/remedial-therapy.svg') }}" alt="Remedial Therapy">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Remedial Therapy</h3>
              <p>{{ \Illuminate\Support\Str::limit('Remedial therapy provides structured support for children with special needs to address learning and developmental
              challenges. Through targeted interventions, it strengthens core academic, cognitive, and functional skills. This therapy
              is designed to enhance learning readiness, promote confidence, and support consistent progress. By aligning
              interventions with individual needs, remedial therapy helps children achieve meaningful educational outcomes.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/remedial-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Remedial Therapy">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/speech-therapy.svg') }}" alt="Speech Therapy">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Speech Therapy</h3>
              <p>{{ \Illuminate\Support\Str::limit('We provide comprehensive assessment and evidence-based intervention for a full spectrum of communication disorders. Our
              approach focuses on identifying underlying challenges through skilled clinical evaluation. Targeted therapy plans are
              designed to enhance speech, language, and communication abilities. Each intervention is delivered with precision,
              consistency, and measurable outcomes in mind.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/speech-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Speech Therapy">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/occupational-therapy.svg') }}" alt="Occupational Therapy">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Occupational Therapy</h3>
              <p>{{ \Illuminate\Support\Str::limit('We support children in developing strong self-esteem, confidence, and functional independence across all aspects of
              daily life. Through structured therapeutic interventions, we encourage self-awareness, resilience, and personal growth.
              Our approach emphasizes skill-building that fosters autonomy and positive self-perception. This enables children to
              engage more confidently and independently in their environments.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/occupational-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Occupational Therapy">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/physiotherapy.svg') }}" alt="Physiotherapy">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Physiotherapy</h3>
              <p>{{ \Illuminate\Support\Str::limit('Physiotherapy supports children in developing strength, mobility, and coordination to move safely and effectively within
              their environment. Through structured, goal-oriented interventions, therapy enhances functional movement and physical
              independence. Our approach focuses on improving posture, balance, and motor control. This enables children to engage in
              daily activities with greater confidence and ease.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/physiotherapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Physiotherapy">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/behavioral-therapy.svg') }}" alt="Behavioral Therapy">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Behavioral Therapy</h3>
              <p>{{ \Illuminate\Support\Str::limit('Behavioral therapy is an evidence-based approach used to address a broad range of psychological conditions and
              behavioral challenges. It focuses on identifying patterns that impact emotional regulation, behavior, and daily
              functioning. Through structured interventions, therapy promotes positive behavior change and adaptive coping strategies.
              This approach supports long-term psychological well-being and functional improvement.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/behavioral-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Behavioral Therapy">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="1s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/school-readiness-program.svg') }}" alt="School Readiness Program">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>School Readiness Program</h3>
              <p>{{ \Illuminate\Support\Str::limit('The school readiness program is designed to prepare children with learning difficulties and special needs for successful
              inclusion in mainstream education. It focuses on developing foundational academic, behavioral, and social skills
              essential for classroom participation. Structured interventions support adaptability and learning confidence. This
              program facilitates a smooth and effective transition into the formal schooling system.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/school-readiness-program" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="School Readiness Program">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/quran-teaching.svg') }}" alt="Quran Teaching">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Quran Teaching</h3>
              <p>{{ \Illuminate\Support\Str::limit('Teaching the Quran to children with special needs provides meaningful spiritual, cognitive, and developmental benefits.
              It strengthens their connection with faith while supporting language development and communication skills. Structured
              learning enhances focus, memory, and emotional regulation. This approach also promotes inclusive, respectful learning
              environments that support holistic growth.', 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/quran-teaching" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Quran Teaching">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="1.4s">
            <!-- Icon Box Start -->
            <div class="icon-box">
              <img src="{{ asset('images/icons/parental-counselling.svg') }}" alt="Parental Counselling">
            </div>
            <!-- Icon Box End -->

            <!-- Service Body Start -->
            <div class="service-body">
              <h3>Parental Counselling</h3>
              <p>{{ \Illuminate\Support\Str::limit("Parental counseling provides a structured and supportive environment for families navigating the emotional and practical
              aspects of raising a child with a disability. It assists parents in managing stress, grief, guilt, and anxiety through
              professional guidance. Counseling also offers education, coping strategies, and emotional support tailored to family
              needs. This service empowers parents to make informed decisions and actively participate in their child’s care journey.", 80) }}</p>
            </div>
            <!-- Service Body End -->

            <!-- Service Footer Start -->
            <div class="service-footer">
              <a href="/parental-counselling" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Parental Counselling">
              </a>
            </div>
            <!-- Service Footer End -->
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-3 col-md-6">
                  <!-- Service Item Start -->
                  <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                      <img src="{{ asset('images/icons/group-therapy.svg') }}" alt="Group Therapy">
                    </div>
                    <!-- Icon Box End -->
                
                    <!-- Service Body Start -->
                    <div class="service-body">
                      <h3>Group Therapy</h3>
                      <p>{{ \Illuminate\Support\Str::limit('Group therapy offers a structured setting that supports skill development while fostering meaningful peer interaction.
                      It enables children to practice communication, cooperation, and social engagement in a supportive environment. Through
                      guided activities, social challenges and deficits are addressed in a practical context. This collaborative approach
                      promotes confidence, social awareness, and positive interpersonal relationships.', 80) }}</p>
                    </div>
                    <!-- Service Body End -->
                
                    <!-- Service Footer Start -->
                    <div class="service-footer">
                      <a href="/group-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Group Therapy">
                      </a>
                    </div>
                    <!-- Service Footer End -->
                  </div>
                  <!-- Service Item End -->
                </div>
      </div>

    </div>
  </div>
  <!-- Page Services End -->





 @endsection