@extends('layout.layoutone')
 @section('title')
    Contact Us
 @endsection
@section('content')

  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a><span class="mx-2">/</span></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Page Contact Start -->
  <div class="page-contact">
    <div class="container">
      <!-- Tab Navigation Start -->
      <div class="contact-tabs-nav">
        <div class="row">
          <div class="col-lg-12">
            <div class="tab-buttons">
              <button class="btn-default-not-arrow tab-btn active" data-tab="head-office">Head Office</button>
              <button class="btn-default-not-arrow tab-btn" data-tab="malir-karachi">Malir Karachi</button>
              <button class="btn-default-not-arrow tab-btn" data-tab="federal-b-area">Federal-B-Area</button>
              <button class="btn-default-not-arrow tab-btn" data-tab="lahore">Lahore</button>
              <button class="btn-default-not-arrow tab-btn" data-tab="faisalabad">Faisalabad</button>
              <button class="btn-default-not-arrow tab-btn" data-tab="sialkot">Sialkot</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Tab Navigation End -->

      <!-- Tab Content Start -->
      <!-- Head Office Tab -->
      <div class="tab-content active" id="head-office">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/address.svg') }}" alt="Address Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Medical Address</h3>
                <p>Ground Floor Caesar's Tower Main Shahrah-e-Faisal Karachi</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Phone Number</h3>
                <p>0330-8252626</p>
                <p>0310-4440728</p>
                <p>021-32783209</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/email.svg') }}" alt="Email Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Email Address</h3>
                <p>info@faizanrehab.org</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
        </div>

        <!-- Google Map Start -->
        <div class="google-map">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7240.36106322061!2d67.045615!3d24.857683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e7e08a0e3df%3A0x53d9cf2d8956c01d!2sCaesar&#39;s%20Tower!5e0!3m2!1sen!2sus!4v1766597276976!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Google Map End -->
      </div>

      <!-- Malir Karachi Tab -->
      <div class="tab-content" id="malir-karachi">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/address.svg') }}" alt="Address Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Medical Address</h3>
                <p>25/14 Area C Bus Token Stop Begum Khursheed Road Malir Town Near Lal Masjid Karachi.</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Phone Number</h3>
                <p>0310-4440729</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/email.svg') }}" alt="Email Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Email Address</h3>
                <p>frc.khi@faizanrehab.org</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
        </div>

        <!-- Google Map Start -->
        <div class="google-map">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7238.200081890379!2d67.191211!3d24.894569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3375f1193b115%3A0x3c774d5893099af9!2sJamia%20Masjid%20Chishtiya%20(Lal%20Masjid)!5e0!3m2!1sen!2sus!4v1766597218690!5m2!1sen!2sus" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Google Map End -->
      </div>

      <!-- Federal-B-Area Tab -->
      <div class="tab-content" id="federal-b-area">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/address.svg') }}" alt="Address Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Medical Address</h3>
                <p>D-38, Federal B Area, Block 6, Gulberg Town, Nearby Orchid Bana Palace Residency, Karachi</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Phone Number</h3>
                <p>0310-4440730</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/email.svg') }}" alt="Email Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Email Address</h3>
                <p>frc.khi@faizanrehab.org</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
        </div>

        <!-- Google Map Start -->
        <div class="google-map">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7236.492131863099!2d67.056969!3d24.923686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f5774455eb1%3A0x83c52190298e090a!2sFGRF%20-%20Madani%20Healthcare%20Centre!5e0!3m2!1sen!2sus!4v1766597379080!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Google Map End -->
      </div>

      <!-- Lahore Tab -->
      <div class="tab-content" id="lahore">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/address.svg') }}" alt="Address Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Medical Address</h3>
                <p>R-60 Johar Town Lahore</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Phone Number</h3>
                <p>0310-7772625</p>
                <p>0328-5372626</p>
                <p>042-35300525</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/email.svg') }}" alt="Email Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Email Address</h3>
                <p>frc.Lahore@faizanrehab.org</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
        </div>

        <!-- Google Map Start -->
        <div class="google-map">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                 <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6806.5739537428435!2d74.27544!3d31.461291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919011a7f1c6123%3A0x74c12002556377e8!2sMeer%20Daad%20Chowk!5e0!3m2!1sen!2sus!4v1766597445408!5m2!1sen!2sus"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Google Map End -->
      </div>

      <!-- Faisalabad Tab -->
      <div class="tab-content" id="faisalabad">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/address.svg') }}" alt="Address Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Medical Address</h3>
                <p>Building # 27 St # 103 Y-Block Green Belt Road Madina Town Faislabad.</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Phone Number</h3>
                <p>0327-5372626</p>
                <p>041-8712625</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>

          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/email.svg') }}" alt="Email Icon">
              </div>
              <!-- Icon Box End -->

              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Email Address</h3>
                <p>frc.Faisalabad@faizanrehab.org</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
        </div>

        <!-- Google Map Start -->
        <div class="google-map">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6808.9924636192245!2d73.120835!3d31.428003000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922693caa125a87%3A0x6b87d6c63f98b763!2sW%20Block%20Park!5e0!3m2!1sen!2sus!4v1766597498879!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Google Map End -->
      </div>

      <!-- Sialkot Tab -->
<div class="tab-content" id="sialkot">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/address.svg') }}" alt="Address Icon">
              </div>
              <!-- Icon Box End -->
      
              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Medical Address</h3>
                <p>Sialkot City, Pakistan</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
      
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
              </div>
              <!-- Icon Box End -->
      
              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Phone Number</h3>
                <p>0325-5372626</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
      
          <div class="col-lg-4 col-md-6">
            <!-- Contact Info Item Start -->
            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
              <!-- Icon Box Start -->
              <div class="icon-box">
                <img src="{{ asset('images/icons/email.svg') }}" alt="Email Icon">
              </div>
              <!-- Icon Box End -->
      
              <!-- Contact Info Content Start -->
              <div class="contact-info-content">
                <h3>Email Address</h3>
                <p>info@faizanrehab.org</p>
              </div>
              <!-- Contact Info Content End -->
            </div>
            <!-- Contact Info Item End -->
          </div>
        </div>
      
        <!-- Google Map Start -->
        <div class="google-map">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6808.9924636192245!2d73.120835!3d31.428003000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922693caa125a87%3A0x6b87d6c63f98b763!2sW%20Block%20Park!5e0!3m2!1sen!2sus!4v1766597498879!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Google Map End -->
      </div>
      <!-- Tab Content End -->

    </div>
  </div>
  <!-- Page Contact End -->


  <!-- Contact Form Start -->
  <div class="contact-us-form">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <!-- Contact Us Image Start -->
          <div class="contact-us-img">
            <figure class="reveal image-anime">
              <img src="{{ asset('images/contact-us-img.jpeg') }}" alt="Contact Us Image">
            </figure>
          </div>
          <!-- Contact Us Image End -->
        </div>
        <div class="col-lg-6">
          <div class="contact-form">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">contact us</h3>
              <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get</span> In Touch With Us</h2>
            </div>
            <!-- Section Title End -->

            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
              data-wow-delay="0.25s">
              <div class="row">
                <div class="form-group col-md-6 mb-4">
                  <input type="text" name="name" class="form-control" id="fullname" placeholder="Full Name"
                    required="">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group col-md-6 mb-4">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email Address"
                    required="">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number"
                    required="">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group col-md-12 mb-5">
                  <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Your Message"
                    required=""></textarea>
                  <div class="help-block with-errors"></div>
                </div>

                <div class="col-md-12">
                  <button type="submit" class="btn-default disabled">send message</button>
                  <div id="msgSubmit" class="h3 hidden"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Form End -->

  <!-- Tab Functionality Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tabButtons = document.querySelectorAll('.tab-btn');
      const tabContents = document.querySelectorAll('.tab-content');

      tabButtons.forEach(button => {
        button.addEventListener('click', function() {
          const targetTab = this.getAttribute('data-tab');

          // Remove active class from all buttons and contents
          tabButtons.forEach(btn => btn.classList.remove('active'));
          tabContents.forEach(content => content.classList.remove('active'));

          // Add active class to clicked button and corresponding content
          this.classList.add('active');
          document.getElementById(targetTab).classList.add('active');
        });
      });
    });
  </script>

@endsection