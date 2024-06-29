<html lang="en">
<head>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #35433B;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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
        <div class="about-section">
  <h1>About Us </h1>
  <p>Welcome to Khmer agricultural products shop, a leading provider of high-quality agricultural products.</p>
    <p> Our mission is to cultivate a sustainable future by offering innovative solutions that enhance productivity and environmental stewardship.</p>
    <p>We pride ourselves on our dedication to excellence, sourcing the finest ingredients direct from farmers and delivering them to consumers around the world.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{asset('backend/assets/images/faces/ceo.jpg')}}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Mr.Carabao</h2>
        <p class="title">CEO & Founder</p>
        <p>Setting Strategy and Vision.</p>
        <p>Leadership and Decision Making.</p>
        <p>Financial Oversight.</p>
        <p>Stakeholder Management.</p>
        <p>carabao007@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('backend/assets/images/faces/manager.jpg')}}" alt="Mike" style="width:100%">
      <div class="container">
      <h2>Mr.Corato</h2>
        <p class="title">Manager</p>
        <p>Planning, Organizing.</p>
        <p>Leading, staffing.</p>
        <p>Problem Solving.</p>
        <p>Decision Making, controlling.</p>
        <p>corato@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('backend/assets/images/faces/marketing.png')}}" alt="John" style="width:100%">
      <div class="container">
        <h2>Roza</h2>
        <p class="title">Marketing & Accounting</p>
        <p>Market research, Strategic Planning.</p>
        <p>Brand Development and Management.</p>
        <p>Tax Compliance and Planning.</p>
        <p>Recording Transactions, Financial Reporting.</p>
        <p>razacute9@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<footer
          class="text-center text-lg-start text-white"
          style="background-color: #45526e"
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