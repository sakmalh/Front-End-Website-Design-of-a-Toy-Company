<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frontend Bootcamp</title>
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Megatron</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cntus.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Abtus.html">About Us</a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign In</a>
            </li>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Megatron</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="Register.html">Register</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Showcase -->
    <section class="bg-light text-dark p-3 text-center text-sm-start">
      <div class="container showcase ">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Megatron <span class="text-primary">Toys For Everyone</span> </h1>
            <p class="lead my-4">
              We have the latest and Original Genuine Toys <br>from
              around the world
              </p>
              <a href="products.php" class="btn btn-warning btn-lg">Check Products</a>

          </div>
          <img class="img-fluid w-50 d-none d-sm-block"src="images\toy5.svg" alt="">
        </div>
      </div>
    </section>

    <!-- News Letter -->
    <section class="bg-primary text-light p-3">
      <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
          <h4 class="mb-3 mb-md-0 ">Sign Up for exciting discounts and rewards</h4>
          <div class="input-group news-input">
            <input type="text" class="form-control" placeholder="Enter Email Address">
            <button class="btn btn-warning btn-lg" type="button">Sign Up</button>
          </div>
        </div>
      </div>
    </section>

    <section class="p-5">
      <h3>Trending Now</h3>
      <div class="row">
        <div class="col-sm-4 p-3">
          <div class="box text-dark p-2 h-100 d-flex flex-column">
            <div class="card text-center">
              <img src="images\E3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text d-none d-md-block">Relive the Battle of Hoth and other classic Star Wars trilogy scenes with this AT-AT (75288) LEGO building kit for kids!</p>
                <a href="pr1.php?pro_ids=3" class="btn btn-warning w-75 mt-auto">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 p-3">
          <div class="box text-dark p-2 h-100 d-flex flex-column">
            <div class="card text-center">
              <img src="images\E22.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text d-none d-md-block">Create epic conflicts between 501st Legion Clone Troopers and the Separatist Army's Battle Droids with this action-packed</p>
                <a href="pr1.php?pro_ids=2" class="btn btn-warning w-75 mt-auto">Shop Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 p-3">
          <div class="box text-dark p-2 h-150 d-flex flex-column">
            <div class="card text-center">
              <img src="images\E111.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text d-none d-md-block">Inspire memories of epic Star Wars: The Mandalorian stories with this fun building toy for creative kids.</p>
                <a href="pr1.php?pro_ids=1" class="btn btn-warning w-75 mt-auto">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <div class="container">
        <div class="col-md-auto">
      <div class="js-datalayer-promo" data-context="{&quot;id&quot;: &quot;tru_homepage&quot;, &quot;name&quot;: &quot;1uparcade_en&quot;, &quot;creative&quot;: &quot;hp_middle&quot;, &quot;position&quot;: &quot;0&quot; }">
        <a href="products.php" class="b-hero_carousel-slide b-carousel_slide">
          <div class="full-width-banner-image">

            <picture>
              <source media="(max-width: 450px)" srcset="https://www.toysrus.ca/on/demandware.static/-/Library-Sites-toys-global/default/dw1b2602da/images/pages/m-ways-to-shop-generic-2022-en.png" type="image/jpeg">
                <img border="0" src="https://www.toysrus.ca/on/demandware.static/-/Library-Sites-toys-global/default/dwbe9a1064/images/pages/d-ways-to-shop-generic-2022-en.png" alt="">
            </picture>
          </div>
        </a>
      </div>

    </div>
    </div>



    <section class="p-5">
      <h3>Picked For You</h3>
      <div class="row">
        <div class="col-sm-4 p-3">
          <div class="card text-center">
            <img src="images\Y1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text d-none d-md-block">The Hot Wheels Monster Trucks 1:24 scale die-cast trucks are THE baddest trucks ever built for competition</p>
              <a href="pr1.php?pro_ids=15" class="btn btn-warning w-75">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 p-3">
          <div class="card text-center">
            <img src="images\Y2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text d-none d-md-block">Worlds collide when the Maximals and Predacons join the fight, coming together with the Autobots and Decepticons.</p>
              <a href="pr1.php?pro_ids=26" class="btn btn-warning w-75">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 p-3">
          <div class="card text-center">
            <img src="images\Y3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text d-none d-md-block">Let kids create a detailed, buildable LEGO model of a Mandalorian Starfighter (75316) and relive memorable Star Wars</p>
              <a href="pr1.php?pro_ids=9" class="btn btn-warning w-75">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="col-md-auto">
    <div class="js-datalayer-promo" data-context="{&quot;id&quot;: &quot;tru_homepage&quot;, &quot;name&quot;: &quot;1uparcade_en&quot;, &quot;creative&quot;: &quot;hp_middle&quot;, &quot;position&quot;: &quot;0&quot; }">
      <a href="products.php" class="b-hero_carousel-slide b-carousel_slide">
        <div class="full-width-banner-image">

          <picture>
            <source media="(max-width: 450px)" srcset="https://www.toysrus.ca/on/demandware.static/-/Library-Sites-toys-global/default/dwfb638381/images/hp/promo-banners/TRU-m-fullwidth-STWD_021022-en.jpg" type="image/jpeg">
              <img border="0" src="https://www.toysrus.ca/on/demandware.static/-/Library-Sites-toys-global/default/dw365ea718/images/hp/promo-banners/TRU-d-fullwidth-STWD_021022-en.jpg" alt="">
          </picture>
        </div>
      </a>
    </div>

  </div>
  </div>


    <section class="bg-warning text-dark p-3 text-center text-sm-start">
      <div class="container-fluid">
        <div class="container-icons p-3 text-center ">
          <div class="row">
            <div class="col-2 ">
              <a href="https://www.facebook.com/"><i class="bi bi-facebook" style="font-size:2.2rem"></i></a>
            </div>
            <div class="col-2">
              <a href="https://www.instagram.com/"><i class="bi bi-instagram" style="font-size:2.2rem"></i></a>
            </div>
            <div class="col-2">
              <a href="https://www.twitter.com/"><i class="bi bi-twitter" style="font-size:2.2rem"></i></a>
            </div>
            <div class="col-2">
              <a href="https://www.whatsapp.com/"><i class="bi bi-whatsapp" style="font-size:2.2rem"></i></a>
            </div>
            <div class="col-2">
              <a href="https://www.youtube.com/"><i class="bi bi-youtube" style="font-size:2.2rem"></i></a>
            </div>
            <div class="col-2">
              <a href="https://www.google.com/"><i class="bi bi-google" style="font-size:2.2rem"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="text-center p-2">© 2021 Megatron (Sri Lanka) Ltd. All Rights reserved. Megatron, Megatron Toys are registered trademarks of Megatron (Sri Lanka) Ltd.<br>
             Use of this site signifies your acceptance of Megatron (Sri Lanka) Website Terms and Conditions and Privacy Policy<br>
             Megatron (Sri Lanka) Ltd. Sri Dalada Veediya, Kandy 20000
          </p>
        </div>
      </div>
    </section>


    <script type="text/javascript" src="js\bootstrap.js"></script>
  </body>
</html>
