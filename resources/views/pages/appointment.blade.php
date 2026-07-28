 @extends('layout.layoutone')
 @section('title')
    Book Appointment
 @endsection

 @section('content')

 <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">Book Appointment</h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a><span class="mx-2">/</span></li>
                <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Page Appointment Start -->
  <div class="page-book-appointment">
    <div class="container">
      <div class="book-appointment-form">
        <div class="row section-row">
          <div class="col-lg-12">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">Booking</h3>
              <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
            </div>
            <!-- Section Title End -->
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="appointment-form wow fadeInUp">
              <!-- Form Start -->
              <form id="appointmentForm" action="#" method="POST" data-toggle="validator">
                <div class="row">
                  <div class="form-group col-md-6 mb-4">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Patient Name" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-4">
                    <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father Name" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-4">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-4">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Contact Number" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-4">
                    <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-4">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Date" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-12 mb-4">
                    <select name="services" class="form-control form-select" id="services" required>
                      <option value="" disabled selected>Select Service</option>
                      <option value="remedial_therapy">Remedial Therapy</option>
                      <option value="speech_therapy">Speech Therapy</option>
                      <option value="occupational_therapy">Occupational Therapy</option>
                      <option value="physiotherapy">Physiotherapy</option>
                      <option value="behavioral_therapy">Behavioral Therapy</option>
                      <option value="school_readiness_program">School Readiness Program</option>
                      <option value="quran_teaching">Quran Teaching</option>
                      <option value="parental_counselling">Parental Counselling</option>
                      <option value="group_therapy">Group Therapy</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-12 mb-5">
                    <textarea name="reason" class="form-control" id="reason" placeholder="Reason for Appointment" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>


                  <div class="col-md-12 form-group">
                    <button type="submit" class="btn-default">Book Appointment</button>
                    <div id="msgSubmit" class="h3 hidden"></div>
                  </div>
                </div>
              </form>
              <!-- Form End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Appointment End -->

 @endsection