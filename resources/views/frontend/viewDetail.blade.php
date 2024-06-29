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
  background-color: #474e5d;
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
/* Basic reset */
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

.card {
    background-color: #f9f9f9;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    width: 300px; /* Adjust based on your preference */
    margin: 0 auto; /* Center the card */
}

.card-img-top {
    width: 100%;
    height: auto;
}

.card-body {
    padding: 20px;
}

.card-title {
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    line-height: 1.6;
    margin-bottom: 10px;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
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
<body class="bodybg">
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
<div class="card">
    <img src="{{asset('images/Phka Khnhey.jpg')}}" alt="Product Image Description" class="card-img-top">
    <div class="card-body">
        <h1 class="card-title">អង្ករផ្កាខ្ញី</h1>
        <p class="card-text"><strong>Description:</strong><br>
          មានក្លិនក្រអូបប្រហើរ ទន់ឆ្ងុយឆ្ងាញ់<br>
          មានការបញ្ចុះតម្លៃពិសេស<br>
          សម្រាប់អតិថិជន VIP <br>
      </p>
        <p class="card-text"><strong>Price:</strong>$50/50kg</p>
        <p class="card-text"><strong>Availability:</strong> In Stock</p>
        <a href="#" class="btn btn-primary">Buy Now</a>
    </div>
</div>
<script src="script.js"></script> <!-- Assuming JavaScript is in an external file named script.js -->


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