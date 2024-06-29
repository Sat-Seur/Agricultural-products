<html lang="en">
<head>
  <style>
    .bg-purple {
    background-color: purple;
}

  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color:#F8FCFE">
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark">
                                                             <!-- nav-dark -->
            <img src="{{asset('images/logo-agricultural.png')}}" height="60" weidth="60" alt="logo">
            
            <button class="navbar-toggler bg-blue" data-target="#my_navigation" data-toggle="collapse">
                click
            </button>

            
            <div class="collapse navbar-collapse" id="my_navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link text-white"> Home </a>
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
        <div class="row">
        <h1 class="col-lg-12 text-center p-3 bg-purple text-light">Contact Us</h1>

        </div>
        <div class="container4">
            <div class="row">
                <div class="col-lg-7 text-center ">
                    <h2 >You can contact Us by</h2>
                    <h6 class="p-4">I see you're interested in learning more about our agricultural products.
                       That's great! We have a wide range of products available,
                        and I'd be happy to provide you with all the information you need.
                    </h6>
                    <div class="col-lg-5 py-2 ">
                    <i class="fa-brands fa-telegram "></i>
                    <span>Contact us by telegram
                      <br>
                      <a href="https://t.me/Sat_Seur">Agricultural products</a>
                    </span>
                    </div>
                    <div class="col-lg-5 p-2">
                    <i class="fa-solid fa-phone"></i>
                    <span>Contact us by Phone
                      <br>
                      <a href="tel:+85515769355">0967495543</a>
                    </span>
                    </div>
                    <div class="col-lg-5 p-2">
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <span>Contact us by LinkIn
                      <br>
                      <a href="www.linkedin.com/in/sat-seur-61713a302">Sat Seur</a>
                    </span>
                    </div>
              
                </div>
                <div class="col-lg-5 ">
                    <h2>Any questions drop here</h2>
                    <!-- Wrapper container -->
<div class="container ">

<!-- Bootstrap 5 starter form -->
<form id="contactForm">

  <!-- Name input -->
  <div class="mb-3">
    <label class=" form-label" for="name">Name</label>
    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
  </div>

  <!-- Email address input -->
  <div class="mb-3">
    <label class="form-label" for="emailAddress">Email Address</label>
    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
  </div>

  <!-- Message input -->
  <div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
  </div>

  <!-- Form submit button -->
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Send Your Message</button>
  </div>

</form>

</div>   
</div>
    </div>
    
    <footer
          class="text-center text-lg-start text-white"
          style="background-color: #702963"
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