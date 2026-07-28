@extends('layout.layoutone')
@section('title')
    Home
@endsection
@section('content')

    <!-- Hero Section Start -->
	<div class="hero bg-image parallaxie">
		<div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to Faizan Rehabilitation Centre</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Transforming Lives, Advancing Care</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Empowering Children with Special Needs to Achieve Sustainable, Individualized Positive Outcomes</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="/services" class="btn-default">explore services</a>
                            <a href="/appointment" class="btn-default btn-highlighted">book appointment</a>
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
	</div>
	<!-- Hero Section End -->

    <!-- Home Contact Us Start -->
    <div class="home-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/therapists.svg') }}" alt="Experienced Therapists">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>Experienced Therapists</h3>
                            <p>At FRC, experienced professionals deliver evidence-based, compassionate care, guiding each child toward measurable and confident progress.</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/comprehensive-therapies.svg') }}" alt="Comprehensive Therapies">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>Comprehensive Therapies</h3>
                            <p>Our integrated pediatric therapies support children in developing functional skills, independence, and self-confidence.</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/child-centric-care.svg') }}" alt="Child-Centric Care">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>Child-Centric Care</h3>
                            <p>We advance every child’s holistic development through personalized individualized care plans and active family
                            collaboration.</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>
            </div>
        </div>
        </div>
    <!-- Home Contact Us End -->


    <!-- About Us Start -->
        <div class="about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- About Image Start -->
                        <div class="about-us-image">
                            <div class="about-img">
                                <figure class="reveal image-anime">
                                    <img src="{{ asset('images/about-us-home.jpg') }}" alt=" About Us Image">
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
                                <h3 class="wow fadeInUp">about us</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">About
                                    <span>Faizan Rehabilitation Centre</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">At Faizan Rehabilitation Center, we are committed to improving the lives of children with physical, developmental, and
                                neurological conditions. Our child-focused model integrates expert clinical care with empathy and professionalism, enabling each child to achieve optimal outcomes. We recognize that every child’s path is distinct, and we partner with families through guidance, collaboration, and evidence-based pediatric rehabilitation.</p>
                            </div>
                            <!-- Section Title End -->
        
        
                            <!-- About Us Footer Start -->
                            <div class="about-us-footer">        
                                <!-- Appointment Button Start -->
                                <div class="appointment-btn wow fadeInUp" data-wow-delay="1s">
                                    <a href="/about-us" class="btn-default">Read More</a>
                                </div>
                                <!-- Appointment Button End -->
                            </div>
                            <!-- About Us Footer End -->
                        </div>
                        <!-- About Us Content End -->
                    </div>
                </div>
            </div>
        </div>
    <!--  About Us End -->

    <!-- Gallery Carousel Section Start -->
    <div class="gallery-carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Scrolling Content Start -->
                    <div class="gallery-carousel-box">
                        <div class="gallery-scrolling-content">
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/behavioral-therapy/2.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/behavioral-therapy/3.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/behavioral-therapy/4.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/behavioral-therapy/5.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/group-therapy/2.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/group-therapy/3.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/group-therapy/4.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/group-therapy/5.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/occupational-therapy/2.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/occupational-therapy/3.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/occupational-therapy/4.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/occupational-therapy/5.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/physiotherapy/2.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/physiotherapy/3.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/physiotherapy/4.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/physiotherapy/5.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/remedial-therapy/2.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/remedial-therapy/3.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/remedial-therapy/4.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/remedial-therapy/5.jpg') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/school-readiness-program/2.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/school-readiness-program/3.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/school-readiness-program/4.png') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/school-readiness-program/5.jpg') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/speech-therapy/2.jpg') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/speech-therapy/3.jpg') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/speech-therapy/4.jpg') }}" alt="gallery-image">
                                </figure>
                            </div>
                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/services/speech-therapy/5.jpg') }}" alt="gallery-image">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- Scrolling Content End -->
                </div>
            </div>
        </div>

    </div>
    <!-- Gallery Carousel Section End -->

    <!-- Our Service Start -->
     <div class="our-service">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Healthcare Services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our </span> Services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="/services" class="btn-default">view all services</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

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
                            <a href="/remedial-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Remedial Therapy"></a>
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
                            <a href="/speech-therapy" class="service-btn"><img src="{{ asset('images/arrow-white.svg') }}" alt="Speech Therapy"></a>
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
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
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
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
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
            </div>
        </div>
     </div>
    <!-- Our Service End -->

    <!-- Solution Your Plan Start -->
    <div class="solution-your-plan">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Solution Plan Image Start -->
                    <div class="solution-plan-image">
                        <div class="solution-plan-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/solution-plan-img-1.jpg') }}" alt="Image 1">
                            </figure>
                        </div>

                        <div class="solution-plan-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/solution-plan-img-2.jpg') }}" alt="Image 2">
                            </figure>
                        </div>
                    </div>
                    <!-- Solution Plan Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- Solution Plan Content Start -->
                    <div class="solution-plan-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">  <span>Why Choose</span> Faizan Rehabilitation Centre</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in the treatment of children with diverse conditions, ranging from developmental delays to neurological
                            and physical impairments. Our multidisciplinary team delivers coordinated therapy plans that promote development across
                            physical, cognitive, emotional, and social domains.</p>
                         </div>
                        <!-- Section Title End -->

                         <!-- Solution Plan Body Start -->
                        <div class="solution-plan-body wow fadeInUp"  data-wow-delay="0.5s">
                            <ul>
                                <li>Child-Centric Care</li>
                                <li>Holistic Development</li>
                                <li>Family-Centered Support</li>
                                <li>Multidisciplinary Expertise</li>
                                
                            </ul>
                        </div>
                        <!-- Solution Plan Body End -->

                    </div>
                </div>
                <!-- Solution Plan Content End -->
            </div>
        </div>
    </div>
    <!-- Solution Your Plan End -->


    <!-- Need Attention Start -->
     <div class="need-attention parallaxie">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">need attention</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Where Does Your Child Need Support?</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We deliver specialized pediatric rehabilitation services that enable children to overcome challenges, enhance functional
                    abilities, and achieve developmental milestones through professional and supportive care.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                     <div class="need-attention-list wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/motor-skills.svg') }}" alt="Motor Skills" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Motor Skills</p>
                        </div>
                        <!-- Need Attention Content End -->
                     </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/balance-coordination.svg') }}" alt="Balance & Coordination" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Balance & Coordination</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/posture-movement.svg') }}" alt="Posture & Movement" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Posture & Movement</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/cognitive-development.svg') }}" alt="Cognitive Development" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Cognitive Development</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/adaptive-behavior.svg') }}" alt="Adaptive Behavior" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Adaptive Behavior</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/fine-motor-skills.svg') }}" alt="Fine Motor Skills" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Fine Motor Skills</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/daily-living-skills.svg') }}" alt="Daily Living Skills" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Daily Living Skills</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/sensory-integration.svg') }}" alt="Sensory Integration" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Sensory Integration</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- Need Attention List Start -->
                    <div class="need-attention-list wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('images/icons/play-interaction.svg') }}" alt="Play & Interaction" width="100%">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Need Attention Content Start -->
                        <div class="need-attention-content">
                            <p>Play & Interaction</p>
                        </div>
                        <!-- Need Attention Content End -->
                    </div>
                    <!-- Need Attention List End -->
                </div>
            </div>
        </div>
     </div>
    <!-- Need Attention End -->

    <!-- Client Testimonial Start -->
    <div class="our-testimonial parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Highlights</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Activity</span> Highlights</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider video-testimonials">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach(range(1, 5) as $videoNum)
                                <div class="swiper-slide">
                                    <div class="testimonial-item video-item">
                                        <div class="video-wrapper swiper-no-swiping">
                                            <video controls muted loop preload="none" playsinline oncontextmenu="return false;" controlsList="nodownload">
                                                <source data-src="{{ asset('testimonials/' . $videoNum . '.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <span class="play-badge">
                                                <i class="fa-solid fa-play"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonial End -->
    
    <!-- Our Blog Section End -->
    {{-- <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">news & blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Latest</span> Insights And Updates</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="#" class="btn-default">view all blog</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="images/post-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">This is placeholder content.</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="images/post-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">This is placeholder content.</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="#" class="image-anime">
                                    <img src="images/post-3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">This is placeholder content.</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Our Blog End -->



@endsection