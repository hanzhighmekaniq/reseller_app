<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller.in</title>
  <link href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sb-admin-2/css/custom.css') }}" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Seller.in</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary text-white" href="{{ route('login') }}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Hero Section ======= -->
  <header class="bg-primary text-white" id="home">
    <div class="container text-center">
      <h1>Welcome to Seller.in</h1>
    </div>
  </header>

  <!-- ======= About Section ======= -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" class="img-fluid" alt="About Image">
        </div>
        <div class="col-lg-6">
          <h2>About Seller.in</h2>
          <p>Seller yang diartikan dari bahasa inggris adalah penjual. Menjual barang hasil dari produksi sendiri atau mengambil barang dari supplier.</p>
        </ul>
        <p>SELLER.IN sebuah perusahaan yang menciptakan peluang pekerjaan bagi IRT Dan Pelajar. Mengkombinasikan IRT (Ibu Rumah Tangga) membuat produk seperti:</p>

          <ul>
            <li>Tahu pentol</li>
            <li>Risol</li>
            <li>Piscok</li>
            <li>Keripik</li>
            <li>Basreng</li>
            <li>Dll</li>
          </div>
      </div>
    </div>
  </section>

  {{-- <!-- ======= Services Section ======= -->
  <section id="services" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Our Services</h2>
          <p>Amazing features to grow your business.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="service-box">
            <i class="fas fa-shield-alt fa-3x mb-3"></i>
            <h4>Secure Transactions</h4>
            <p>Ensuring secure and reliable transactions for all our sellers and buyers.</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="service-box">
            <i class="fas fa-chart-line fa-3x mb-3"></i>
            <h4>Analytics</h4>
            <p>Powerful analytics to monitor and enhance your business performance.</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="service-box">
            <i class="fas fa-headset fa-3x mb-3"></i>
            <h4>Customer Support</h4>
            <p>Dedicated customer support to assist you with any issues or questions.</p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="section-title">Hubungi Kami</h2>
          <p class="section-subtitle">Untuk Informasi lebih lanjut</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 text-center mb-5">
          <div class="contact-info">
            <i class="fas fa-map-marker-alt fa-2x mb-3 text-primary"></i>
            <h4 class="mb-2">Alamat</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>
        <div class="col-lg-4 text-center mb-5">
          <div class="contact-info">
            <i class="fas fa-envelope fa-2x mb-3 text-primary"></i>
            <h4 class="mb-2">Email</h4>
            <p>info@seller.in</p>
          </div>
        </div>
        <div class="col-lg-4 text-center mb-5">
          <div class="contact-info">
            <i class="fas fa-phone fa-2x mb-3 text-primary"></i>
            <h4 class="mb-2">Telepon</h4>
            <p>+1 5589 55488 55</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer class="py-5 bg-dark text-white">
    <div class="container text-center">
      <p>&copy; 2024 Seller.in. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
