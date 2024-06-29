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
  background-color: #F635E4 ;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

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
        background-color: #A52205 ;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    
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
                        <a href="{{ route('home') }}" class="nav-link text-white"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link text-light">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products') }}" class="nav-link text-light">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">News</a>
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
  <h1>New Promotion</h1>
  <p>Welcome to our website! our shop has a big promotion for you.</p>
    <p>You're my customers who buy our product , you will get discount.</p>
    <p>During this event some products will discount for you. Please enjoy it. </p>
</div>

<div class="container py-4">
    <h3><strong>Big Promotion For You</strong></h3>
    <div class="row">
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
                <img class="card-img-top" src="{{asset('images/newImg1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Durian Kompot</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/newImg2.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">ម្រេចក្រហម ខ្មៅ</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/newImg3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">អង្ករផ្ការំដួល</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/newImg5.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Coconut</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/newImg6.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">អង្ករផ្កាម្លិះ</h5>
                    <a href="{{ route('products') }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>


</body>
</html>