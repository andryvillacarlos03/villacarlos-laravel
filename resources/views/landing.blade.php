
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>FruityPop - Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 
        <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="../../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../../../assets/css/style.css" rel="stylesheet">
        <style>
            .fruite-item {
                height: 100%;
            }

            .fruite-img {
              height: 200px; /* Adjust as needed */
              overflow: hidden;
              border-top-left-radius: 0.5rem;
              border-top-right-radius: 0.5rem;
             }

          .fruite-img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
          }

          .vesitable-item .p-4 {
            min-height: 200px; /* adjust as needed */
          }

          .vesitable-item p {
            display: -webkit-box;
            -webkit-line-clamp: 4; /* max 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
          }



</style>

    </head>
    
      <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->
       <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Naalad,City of Naga,Cebu</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">FruityPop@gmail.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="{{route('page.landing')}}" class="navbar-brand"><h1 class="text-primary display-6">FruityPop</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="{{route('page.landing')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('page.shop')}}" class="nav-item nav-link">Shop</a>
                            <a href="{{route('page.shopDetail')}}" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{route('page.cart')}}" class="dropdown-item">Cart</a>
                                    <a href="{{route('page.checkout')}}" class="dropdown-item">Checkout</a>
                                    <a href="{{route('page.testimonial')}}" class="dropdown-item">Testimonial</a>
                                    
                                </div>
                            </div>
                            <a href="{{route('page.contact')}}" class="nav-item nav-link">Contact</a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-item nav-link">Logout</a>
                            <form action="{{route('logout')}}" method="POST" id="logout-form">
                              @csrf
                            </form>
                        </div>
                        <div class="d-flex m-3 me-0">
                         
                            <a href="{{route('page.cart')}}" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                            </a>
                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->




        <!-- Hero Start -->
 <div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">100% Organic Foods</h4>
                <h1 class="mb-5 display-3 text-primary">Organic Veggies & Fruits Foods</h1>
                <div class="position-relative mx-auto">
                    <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                    <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
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
    </div>
</div>

        <!-- Hero End -->


        <!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-car-side fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Free Shipping</h5>
                        <p class="mb-0">Free on order over $300</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-user-shield fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Security Payment</h5>
                        <p class="mb-0">100% security payment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-exchange-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>30 Day Return</h5>
                        <p class="mb-0">30 day money guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fa fa-phone-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>24/7 Support</h5>
                        <p class="mb-0">Support every time fast</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Featurs Section End -->


        <!-- Fruits Shop Start-->
 <div class="container-fluid fruite py-5">
    <div class="container py-5">
      <div class="tab-class text-center">
        <div class="row g-4">
          <div class="col-lg-4 text-start">
            <h1>Our Fruit Products</h1>
          </div>
          <div class="col-lg-8 text-end">
            <ul class="nav nav-pills d-inline-flex text-center mb-5">
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                  <span class="text-dark" style="width: 130px;">Citrus</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                  <span class="text-dark" style="width: 130px;">Tropical</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                  <span class="text-dark" style="width: 130px;">Melons</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                  <span class="text-dark" style="width: 130px;">Berries</span>
                </a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="tab-content">


        <div id="tab-1" class="tab-pane fade show active p-0">
       <div class="row g-4">
  <!-- Orange -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Orange</h4>
        <p>Bright, juicy, and full of vitamin C — a zesty burst of freshness in every peel.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$3.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Lime -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-8.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Lime</h4>
        <p>Small but bold — a tangy twist that livens up any flavor.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$2.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Lemon -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-9.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Lemon</h4>
        <p>Zingy and refreshing — perfect for drinks, dressings, and detoxing your day.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$5.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Tangerine -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-10.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Tangerine</h4>
        <p>Easy to peel and naturally sweet — the perfect snack-sized citrus.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$6.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Calamansi -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-11.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Calamansi</h4>
        <p>Tiny, tart, and packed with punch — a Filipino favorite for zest and zing.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Pomelo -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-12.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Pomelo</h4>
        <p>Sweet, mild, and juicy — a giant citrus with gentle flavor.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$8.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Grapefruit -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-13.png" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Grapefruit</h4>
        <p>Bittersweet and juicy — a bold citrus that's refreshing and energizing.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$9.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Mandarin -->
  <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
      <div class="fruite-img">
        <img src="../../../assets/img/fruite-item-15.jpg" class="img-fluid w-100 rounded-top" alt="">
      </div>
      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Citrus</div>
      <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
        <h4>Mandarin</h4>
        <p>Soft, sweet, and kid-friendly — citrus made simple and delicious.</p>
        <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
          <p class="text-dark fs-5 fw-bold mb-0">$10.99 / kg</p>
          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


          <!-- Tab 2 to Tab 5 structure is the same -->
      <div id="tab-2" class="tab-pane fade show p-0">
  <div class="row g-4">
    <!-- P1 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-16.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Mango</h4>
          <p>Golden, juicy, and irresistibly sweet — the true taste of the tropics.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$5.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P2 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-7.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Pineapple</h4>
          <p>Tropical, tangy, and refreshingly sweet — a juicy bite of sunshine in every slice.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$10.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P3 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-17.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Banana</h4>
          <p>Soft, creamy, and naturally energizing — the perfect go-anywhere snack.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$15.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P4 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-18.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Papaya</h4>
          <p>Smooth and mellow with a tropical twist — perfect for digestion and delight.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$12.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P5 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-19.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Coconut</h4>
          <p>Hydrating and versatile — from refreshing water to creamy meat.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$7.88 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P6 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-20.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Dragon Fruit</h4>
          <p>Vibrant, mildly sweet, and rich in nutrients — exotic beauty in every bite.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$10.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P7 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-21.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Guava</h4>
          <p>Fragrant, fruity, and full of fiber — sweet tropical goodness from the inside out.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$10.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- P8 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-22.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Tropical</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Jackfruit</h4>
          <p>Sweet, fibrous, and filling — nature’s meat substitute with a fruity twist.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$18.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


         <div id="tab-3" class="tab-pane fade show p-0">
  <div class="row g-4">

    <!-- P1 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-23.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Water Melon</h4>
          <p>Cool, crisp, and hydrating — summer’s favorite fruit in every bite.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$18.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P1 -->

    <!-- P2 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-24.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Cantaloupe</h4>
          <p>Fragrant and orange-fleshed — juicy sweetness with every spoonful.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$12.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P2 -->

    <!-- P3 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-25.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Honeydew</h4>
          <p>Light green and ultra-refreshing — a mellow melon for any moment.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$18.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P3 -->

    <!-- P4 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-26.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Winter Melon</h4>
          <p>Mild and cooling — often used in soups and teas for a refreshing twist.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$18.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P4 -->

    <!-- P5 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-27.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Korean Melon</h4>
          <p>Crunchy, sweet, and small — a unique melon with a floral hint.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$18.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P5 -->

    <!-- P6 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-28.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Galia Melon</h4>
          <p>Honey-sweet and musky — a flavorful blend of cantaloupe and honeydew.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P6 -->

    <!-- P7 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-29.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Canary Melon</h4>
          <p>Bright yellow outside, smooth and sweet inside — tropical sunshine in a slice.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$15.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P7 -->

    <!-- P8 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-30.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Melons</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Santa Claus Melon</h4>
          <p>Mild, sweet, and long-lasting — the holiday melon for year-round joy.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End P8 -->

  </div>
</div>



         <div id="tab-4" class="tab-pane fade show p-0">
  <div class="row g-4">

    <!-- p1 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-31.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Strawberries</h4>
          <p>Lusciously red and naturally sweet — perfect for desserts, smoothies, or fresh indulgence.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p1 -->

    <!-- p2 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-32.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Blueberries</h4>
          <p>Tiny, mighty, and packed with sweetness — a superfruit for any time of day.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p2 -->

    <!-- p3 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Raspberries</h4>
          <p>Delicately sweet with a hint of tart — nature’s perfect pop of flavor and color.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p3 -->

    <!-- p4 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-33.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Blackberries</h4>
          <p>Bold, juicy, and rich in antioxidants — perfect for snacking or baking.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p4 -->

    <!-- p5 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-34.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Cranberries</h4>
          <p>Mild, sweet, and long-lasting — the holiday melon for year-round joy.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$13.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p5 -->

    <!-- p6 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-35.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Gooseberries</h4>
          <p>Tangy and unique — a punchy little berry packed with flavor.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.59 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p6 -->

    <!-- p7 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-36.png" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Mulberries</h4>
          <p>Sweet and soft — a juicy treat often found in jams and pies.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$11.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p7 -->

    <!-- p8 -->
    <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
      <div class="rounded position-relative fruite-item border border-secondary w-100 d-flex flex-column">
        <div class="fruite-img">
          <img src="../../../assets/img/fruite-item-37.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Berries</div>
        <div class="p-4 border-top-0 rounded-bottom d-flex flex-column h-100">
          <h4>Acai Berries</h4>
          <p>Earthy, nutrient-rich, and smoothie-ready — a trendy superfood with ancient roots.</p>
          <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End p8 -->

  </div>
</div>

       </div>
      </div>
    </div>
          </div>
        <!-- Fruits Shop End-->


        <!-- Featurs Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border border-secondary">
                                <img src="../../../assets/img/featur-1.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="text-white">Fresh Apples</h5>
                                        <h3 class="mb-0">20% OFF</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-dark rounded border border-dark">
                                <img src="../../../assets/img/featur-2.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-light text-center p-4 rounded">
                                        <h5 class="text-primary">Tasty Fruits</h5>
                                        <h3 class="mb-0">Free delivery</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-primary rounded border border-primary">
                                <img src="../../../assets/img/featur-3.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-secondary text-center p-4 rounded">
                                        <h5 class="text-white">Exotic Vegitable</h5>
                                        <h3 class="mb-0">Discount 30$</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->


              <div class="container-fluid vesitable py-5">
              <div class="container py-5">
                <h1 class="mb-0">Fresh Organic Vegetables</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">

                  <!-- P1 -->
                  <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                    <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                      <img src="../../../assets/img/vegetable-item-6.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                    </div>
                    <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                      <h4>Parsley</h4>
                      <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                       Fresh, fragrant parsley — the perfect garnish for a burst of garden-fresh flavor and color.
                      </p>
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">$1.99 / kg</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                          <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                        </a>
                      </div>
                    </div>
                  </div>
                  <!--End P1-->

                  <!--P2-->
                  
                  <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                    <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                      <img src="../../../assets/img/vegetable-item-1.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                    </div>
                    <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                      <h4>Tomato</h4>
                      <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                      Juicy, sun-ripened tomatoes — bursting with fresh, tangy flavor for salads, sauces, and more.
                      </p>
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                          <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                        </a>
                      </div>
                    </div>
                  </div>
                  <!--End P2-->
                  <!--P3-->
                     <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                        <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                          <img src="../../../assets/img/vegetable-item-4.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                        <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                          <h4>Bell Pepper</h4>
                          <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                           Crisp, colorful bell peppers — sweet, juicy, and perfect for adding vibrant crunch to any dish.
                          </p>
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">$2.99 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                            </a>
                          </div>
                        </div>
                        </div>
                  <!--End P3-->

                  <!--P4-->
                          <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                          <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                            <img src="../../../assets/img/vegetable-item-5.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                          </div>
                          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                          <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                            <h4>Potato</h4>
                            <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                             Earthy, hearty potatoes — your versatile kitchen staple for comforting, delicious meals.
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <p class="text-dark fs-5 fw-bold mb-0">$2.99 / kg</p>
                              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                              </a>
                            </div>
                          </div>
                          </div>

                    <!--End P4-->

                    <!--P5-->
                          <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                          <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                            <img src="../../../assets/img/vegetable-item-7.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                          </div>
                          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                          <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                            <h4>Carrots</h4>
                            <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            Sweet, crunchy carrots — packed with natural goodness for snacks, salads, and hearty meals.
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <p class="text-dark fs-5 fw-bold mb-0">$1.99 / kg</p>
                              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                              </a>
                            </div>
                          </div>
                          </div>

                    <!--End P5-->

                    <!--P6-->
                        <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                          <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                            <img src="../../../assets/img/vegetable-item-8.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                          </div>
                          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                          <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                            <h4>Sweet Potato</h4>
                            <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                             Naturally sweet and nourishing — sweet potatoes bring wholesome flavor to every bite.
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <p class="text-dark fs-5 fw-bold mb-0">$3.14 / kg</p>
                              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                              </a>
                            </div>
                          </div>
                        </div>

                    <!--P6-->
                    <!--P7-->
                    <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                      <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                        <img src="../../../assets/img/vegetable-item-9.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                      </div>
                      <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                      <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4>Onion</h4>
                        <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                          Bold, flavorful onions — the essential base that brings depth and richness to every dish.
                        </p>
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">$5.00 / kg</p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                          </a>
                        </div>
                      </div>
                      </div>

                    <!--End P7-->
                    <!--P8-->
                      <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                        <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                          <img src="../../../assets/img/vegetable-item-10.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                        <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                          <h4>Garlic</h4>
                          <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                           Aromatic, robust garlic — nature’s flavorful boost for savory, unforgettable meals.
                          </p>
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">$1.21 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                              <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                            </a>
                          </div>
                        </div>
                      </div>

                    <!--End P8-->
                    <!--P9-->
                        <div class="border border-primary rounded position-relative vesitable-item d-flex flex-column" style="height: 100%;">
                          <div class="vesitable-img" style="height: 200px; overflow: hidden;">
                            <img src="../../../assets/img/vegetable-item-11.jpg" class="img-fluid w-100 h-100 rounded-top" style="object-fit: cover;" alt="">
                          </div>
                          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                          <div class="p-4 rounded-bottom d-flex flex-column flex-grow-1">
                            <h4>Radish</h4>
                            <p class="flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                             Crisp, peppery radishes — a fresh, crunchy bite to brighten up salads and snacks.
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                              </a>
                            </div>
                          </div>
                        </div>

                    <!--End p9-->
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->


        <!-- Banner Section Start-->
        <div class="container-fluid banner bg-secondary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 text-white">Fresh Exotic Fruits</h1>
                            <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                            <p class="mb-4 text-dark">Discover a colorful selection of fresh, exotic fruits — handpicked for natural sweetness, vibrant flavor, and healthy indulgence every day.</p>
                            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="../../../assets/img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                                <h1 style="font-size: 100px;">1</h1>
                                <div class="d-flex flex-column">
                                    <span class="h2 mb-0">50$</span>
                                    <span class="h4 text-muted mb-0">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Products</h1>
                    <p>Explore our bestselling products — trusted favorites loved for their fresh quality, delicious taste, and everyday value.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../../../assets/img/best-product-1.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Orange</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.99 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../../../assets/img/best-product-2.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Raspberries</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">11.99 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../../../assets/img/best-product-3.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Banana</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">15.99 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                               <div class="col-6 d-flex justify-content-center">
                                <div class="rounded-circle overflow-hidden" style="width: 170px; height: 170px;">
                                  <img src="../../../assets/img/vegetable-item-7.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                              </div>

                                <div class="col-6">
                                    <a href="#" class="h5">Carrots</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">1.99 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6 d-flex justify-content-center">
                                <div class="rounded-circle overflow-hidden" style="width: 170px; height: 170px;">
                                  <img src="../../../assets/img/vegetable-item-8.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                              </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Potato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">2.99 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                 <div class="col-6 d-flex justify-content-center">
                                <div class="rounded-circle overflow-hidden" style="width: 170px; height: 170px;">
                                  <img src="../../../assets/img/vegetable-item-9.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                              </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Onion</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">5.00 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="img/fruite-item-1.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Orange</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.99 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../../../assets/img/fruite-item-2.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Raspberries</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">11.99 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../../../assets/img/fruite-item-3.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Banana</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">15.99 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../../../assets/img/fruite-item-6.jpg" class="img-fluid rounded" alt="">
                            <div class="py-2">
                                <a href="#" class="h5">Apple</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">2.99 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">I love how fresh and flavorful their fruits and vegetables are! Every order arrives crisp, vibrant, and full of natural goodness. It’s my go-to store for healthy, organic produce I can trust.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../../../assets/img/rits.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Ritz Fernando</h4>
                                    <p class="m-0 pb-3">Graphic Designer</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">The quality of their produce is amazing! Every order is fresh, flavorful, and always carefully packed, delivered right to my front door — I couldn’t ask for more.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../../../assets/img/luna.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Maria Luna Redoble</h4>
                                    <p class="m-0 pb-3">Data Analyst</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">I’m so happy with their fresh produce! Every box is always packed with vibrant, tasty fruits and vegetables that stay crisp, delicious, and healthy for many days.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../../../assets/img/marc.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Marc Ray Genilla</h4>
                                    <p class="m-0 pb-3">Project Coordinator</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">I absolutely love how fresh their produce is every time! Each box arrives full of colorful, delicious fruits and vegetables that stay crisp, tasty, and healthy for the whole week.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../../../assets/img/chrysler.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Chrysler Duaso</h4>
                                    <p class="m-0 pb-3">Web Developer</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                      <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Shopping here has truly changed how my family eats! Their fruits and vegetables are always fresh, flavorful, and delivered with care — we enjoy every single bite together.
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../../../assets/img/wal.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Mark Niel Resaba</h4>
                                    <p class="m-0 pb-3">Software Engineer</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Fruitables</h1>
                                <p class="text-secondary mb-0">Fresh products</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">People love us for our fresh, high-quality produce, friendly service, and reliable delivery — making healthy living easy and enjoyable every day.</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                            <a class="btn-link" href="">Return Policy</a>
                            <a class="btn-link" href="">FAQs & Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                            <a class="btn-link" href="">Wishlist</a>
                            <a class="btn-link" href="">Order History</a>
                            <a class="btn-link" href="">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>City of Naga, Cebu</p>
                            <p>Email: FruityPop@gmail.com</p>
                            <p>Phone: 0910 9442 513</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>FruityPop</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
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