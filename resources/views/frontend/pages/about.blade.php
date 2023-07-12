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

  <!-- page-banner -->
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../frontend/assets/img/7.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div>

  <!-- Welcome Message -->
  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Welcome to Smart Guyz Team</h1>
          <div class="text-lg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi
              nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi
              nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.
            </p>
            <p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo, incidunt
              iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum
              nulla voluptatibus vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Footer --}}
  @include('frontend.layouts.footer')

  {{-- JavaScript --}}
  @include('frontend.layouts.js')

</body>

</html>
