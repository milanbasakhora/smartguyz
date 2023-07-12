<!DOCTYPE html>
<html lang="en">
<head>
  {{-- css --}}
  @include('frontend.layouts.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!-- Navbar -->
  @include('frontend.layouts.navbar')

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../frontend/assets/img/8.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editorial Team</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Editorial Team</h1>
      </div>
    </div>
  </div>

 <!-- page section -->
 <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../frontend/assets/img/boardmembers/2.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dipesh Ishara Rai</p>
                  <span class="text-sm text-grey">Secretary</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../frontend/assets/img/boardmembers/3.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Milan Basakhora</p>
                  <span class="text-sm text-grey">Treasurer</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                <div class="card-doctor">
                  <div class="header">
                    <img src="../frontend/assets/img/boardmembers/8.jpg" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-logo-whatsapp"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Ajay Rai</p>
                    <span class="text-sm text-grey">Member</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->


  {{-- Footer --}}
  @include('frontend.layouts.footer')

  {{-- js --}}
  @include('frontend.layouts.js')

</body>
</html>
