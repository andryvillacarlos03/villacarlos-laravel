<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FrutyPop - Welcome</title>
  <!-- Add this in your <head> to load Font Awesome -->


  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../../../starter-assets/css/custom.css"/>
       <link href="../../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="../../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../../../assets/css/style.css" rel="stylesheet">
</head>
<body>

 <div class="main-content">
  <div class="bg-div">

  </div>
    <div class="left-content">
       <h1 class="brand-name">FruityPop</h1>
       <p class="sample-descript">
       FruityPop is more than just fresh produce — it’s your daily burst of color, flavor, and goodness. From the crunch of farm-picked fruits to the juicy pop of every bite, we bring nature’s best straight to your table. Taste the freshness, feel the joy — only with FruityPop
       </p>
       <div class="btn-register-login-section">
        <a href="{{ route('login') }}" class="btn-1">Login</a>
        <a href="{{ route('register') }}" class="btn-1">Register</a>

       </div>
     <div class="social-media flex space-x-4 mt-4">
  <!-- Facebook -->
  <a href="#" class="bg-green-500 p-3 rounded-full text-white hover:bg-green-600">
    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
      <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88v-7h-2.54v-2.88h2.54V9.79c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.25c-1.23 0-1.61.77-1.61 1.56v1.88h2.74l-.44 2.88h-2.3v7C18.34 21.13 22 17 22 12z"/>
    </svg>
  </a>
  <!-- Twitter -->
  <a href="#" class="bg-green-500 p-3 rounded-full text-white hover:bg-green-600">
    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
      <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.27 4.27 0 0 0 1.88-2.36 8.59 8.59 0 0 1-2.72 1.04 4.25 4.25 0 0 0-7.24 3.87 12.06 12.06 0 0 1-8.77-4.45 4.26 4.26 0 0 0 1.32 5.67 4.2 4.2 0 0 1-1.93-.53v.05a4.26 4.26 0 0 0 3.41 4.17 4.3 4.3 0 0 1-1.92.07 4.26 4.26 0 0 0 3.98 2.96A8.54 8.54 0 0 1 2 19.54a12.07 12.07 0 0 0 6.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19 0-.39-.01-.58A8.74 8.74 0 0 0 22.46 6z"/>
    </svg>
  </a>
  <!-- Instagram -->
  <a href="#" class="bg-green-500 p-3 rounded-full text-white hover:bg-green-600">
    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
      <path d="M12 2.2c3.2 0 3.584.012 4.85.07 1.17.054 1.97.24 2.43.4a4.92 4.92 0 0 1 1.77 1.03 4.92 4.92 0 0 1 1.03 1.77c.16.46.346 1.26.4 2.43.058 1.266.07 1.65.07 4.85s-.012 3.584-.07 4.85c-.054 1.17-.24 1.97-.4 2.43a4.92 4.92 0 0 1-1.03 1.77 4.92 4.92 0 0 1-1.77 1.03c-.46.16-1.26.346-2.43.4-1.266.058-1.65.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.054-1.97-.24-2.43-.4a4.92 4.92 0 0 1-1.77-1.03 4.92 4.92 0 0 1-1.03-1.77c-.16-.46-.346-1.26-.4-2.43-.058-1.266-.07-1.65-.07-4.85s.012-3.584.07-4.85c.054-1.17.24-1.97.4-2.43a4.92 4.92 0 0 1 1.03-1.77A4.92 4.92 0 0 1 4.72 2.67c.46-.16 1.26-.346 2.43-.4 1.266-.058 1.65-.07 4.85-.07zm0-2.2C8.74 0 8.332.012 7.05.07 5.75.128 4.64.33 3.67.64a7.2 7.2 0 0 0-2.63 1.7A7.2 7.2 0 0 0 .64 5.04c-.31.97-.51 2.08-.57 3.38C0 8.74 0 9.148 0 12s.012 3.26.07 4.55c.058 1.3.26 2.41.57 3.38a7.2 7.2 0 0 0 1.7 2.63 7.2 7.2 0 0 0 2.63 1.7c.97.31 2.08.51 3.38.57 1.28.058 1.688.07 4.55.07s3.26-.012 4.55-.07c1.3-.058 2.41-.26 3.38-.57a7.2 7.2 0 0 0 2.63-1.7 7.2 7.2 0 0 0 1.7-2.63c.31-.97.51-2.08.57-3.38.058-1.28.07-1.688.07-4.55s-.012-3.26-.07-4.55c-.058-1.3-.26-2.41-.57-3.38a7.2 7.2 0 0 0-1.7-2.63 7.2 7.2 0 0 0-2.63-1.7c-.97-.31-2.08-.51-3.38-.57C15.26.012 14.852 0 12 0zM12 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zm0 10.2a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.6a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/>
    </svg>
  </a>
</div>

    </div>
  
 <div class="col-md-12 col-lg-5 right">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded">
                            <img src="../../../assets/img/hero-img-1.png" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="../../../assets/img/hero-img-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Vesitables</a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

 </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/lib/easing/easing.min.js"></script>
    <script src="../../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../../assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../assets/js/main.js"></script>

</body>
</html>