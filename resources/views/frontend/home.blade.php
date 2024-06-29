<!DOCTYPE html>
<html>
    <head>
        <title>My website</title>
        <style>
      

    .card {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s;
        border: 1px solid #ddd;
        padding: 16px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin: 5px;
        text-align: center;
    }

    .card-img-top {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.2);
    }

    .card .card-body h5 {
        margin: 8px 0;
    }

    .card .card-body p {
        color: #555;
    }

    .card .card-body .btn {
        background-color: #008000;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
    }

    .card .card-body .btn:hover {
        background-color: #9370DB;
    }
    .bodybg{
        background-color: #D2C5DA;
    }
    
</style>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="background-color:#E8D1D0 ">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark">
                                                             <!-- nav-dark -->
            <img src="{{asset('images/logo-agricultural.png')}}" height="60" weidth="60" alt="logo">
            
            <button class="navbar-toggler bg-blue" data-target="#my_navigation" data-toggle="collapse">
                click
            </button>

            
            <div class="collapse navbar-collapse" id="my_navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link text-light">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products') }}" class="nav-link text-light">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news1') }}" class="nav-link text-light">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contactus') }}" class="nav-link text-light">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
            </div>
        </nav>

        <div class="container-fluid py-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            @foreach ($slides as $slide)
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            @endforeach
            <div class="carousel-inner">
            @foreach ($slides as $slide)
              <div class="carousel-item @if($loop->first)active @endif">
                <img class="d-block w-100" src="{{($slide->image)}}" alt="First slide">
              </div>
              @endforeach
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <div class="container py-4">
            <div class="row py-2">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>

        <div class="container">
    <h3>Most Popular</h3>
    
    <div class="row">
        @foreach($newss as $news)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card">
                    <img class="card-img-top" src="{{ asset($news->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <!-- <p class="card-text">{{ $news->news_content }}</p> -->
                        <!-- <p class="card-text">{{ $news->date }}</p> -->
                        <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>

    <div class="container py-4">
    <h3>All Products</h3>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/khmerRice.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Phka Rumduol</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/Phka mlis.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Phka Mlis</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/Phka Khnhey.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Phka Khnhey</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/new7.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Phka Romdoul</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/fruitProduct.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fruit</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/newImg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Coffee</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/vegetable2.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">vegetable</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/durian.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Durain</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Video section -->
    <div class="container mt-4">
        <h3>Latest Videos</h3>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center mb-3">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/uDRc3CIi6G4?si=HFpp0Cs1TJQ-4vjp"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center mb-3">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/kxt_t0E-8Sk?si=QcyHObHnso1wASAq"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center mb-3">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/Kj28tybJtxA?si=0-zaoS74gL960ZZ6"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <footer
          class="text-center text-lg-start text-white"
          style="background-color: #35433B"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
              Here you can contact us to ask for information.
              We are please to help you anyway.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">khmer Rice</a>
            </p>
            <p>
              <a class="text-white">khmer vegetable</a>
            </p>
            <p>
              <a class="text-white">khmer fruits</a>
            </p>
            <p>
              <a class="text-white">Khmer products</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">Your Account</a>
            </p>
            <p>
              <a class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a class="text-white">Help</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i>Phnom Penh</p>
            <p><i class="fas fa-envelope mr-3"></i>satseur543@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 855 967495543</p>
            <p><i class="fas fa-print mr-3"></i> + 855 967495543</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
             
              <a class="text-white" href=""
                 >myweb.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa-brands fa-telegram"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
    </body>
</html>