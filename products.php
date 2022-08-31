<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frontend Bootcamp</title>
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepr.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


        <!-- <style media="screen">
          a,
          a:hover {
              text-decoration: none;
              color: inherit;
          }

          .section-products {
              padding: 80px 0 54px;
          }

          .section-products .header {
              margin-bottom: 50px;
          }

          .section-products .header h3 {
              font-size: 1rem;
              color: #fe302f;
              font-weight: 500;
          }

          .section-products .header h2 {
              font-size: 2.2rem;
              font-weight: 400;
              color: #444444;
          }

          .section-products .single-product {
              margin-bottom: 26px;
          }

          .section-products .single-product .part-1 {
              position: relative;
              height: 290px;
              max-height: 290px;
              margin-bottom: 20px;
              overflow: hidden;
          }

          .section-products .single-product .part-1::before {
          		position: absolute;
          		content: "";
          		top: 0;
          		left: 0;
          		width: 100%;
          		height: 100%;
          		z-index: -1;
          		transition: all 0.3s;
          }

          .section-products .single-product:hover .part-1::before {
          		transform: scale(1.2,1.2) rotate(5deg);
          }

          .section-products #product-1 .part-1::before {
              background: url("primg/1.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-2 .part-1::before {
              background: url("primg/2.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-3 .part-1::before {
              background: url("primg/3.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-4 .part-1::before {
              background: url("primg/4.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-5 .part-1::before {
              background: url("primg/5.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-6 .part-1::before {
              background: url("primg/6.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-7 .part-1::before {
              background: url("primg/7.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-8 .part-1::before {
              background: url("primg/8.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-9 .part-1::before {
              background: url("primg/9.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-10 .part-1::before {
              background: url("primg/10.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-11 .part-1::before {
              background: url("primg/11.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-12 .part-1::before {
              background: url("primg/12.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-13 .part-1::before {
              background: url("primg/13.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-14 .part-1::before {
              background: url("primg/14.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-15 .part-1::before {
              background: url("primg/15.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-16 .part-1::before {
              background: url("primg/16.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-17 .part-1::before {
              background: url("primg/17.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-18 .part-1::before {
              background: url("primg/18.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-19 .part-1::before {
              background: url("primg/19.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-20 .part-1::before {
              background: url("primg/20.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-21 .part-1::before {
              background: url("primg/21.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-22 .part-1::before {
              background: url("primg/22.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-23 .part-1::before {
              background: url("primg/23.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-24 .part-1::before {
              background: url("primg/24.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-25 .part-1::before {
              background: url("primg/25.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-26 .part-1::before {
              background: url("primg/26.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }

          .section-products #product-27 .part-1::before {
              background: url("primg/27.jpg") no-repeat center;
              background-size: cover;
          		transition: all 0.3s;
          }
          .section-products .single-product .part-1 .discount,
          .section-products .single-product .part-1 .new {
              position: absolute;
              top: 15px;
              left: 20px;
              color: #ffffff;
              background-color: #fe302f;
              padding: 2px 8px;
              text-transform: uppercase;
              font-size: 0.85rem;
          }

          .section-products .single-product .part-1 .new {
              left: 0;
              background-color: #444444;
          }

          .section-products .single-product .part-1 ul {
              position: absolute;
              bottom: -41px;
              left: 20px;
              margin: 0;
              padding: 0;
              list-style: none;
              opacity: 0;
              transition: bottom 0.5s, opacity 0.5s;
          }

          .section-products .single-product .part-2 .product-title {
              font-size: 1rem;
          }

          .section-products .single-product .part-2 .product-title:hover {
              color: #ffcc00;
          }

          .section-products .single-product .part-2 h4 {
              display: inline-block;
              font-size: 1rem;
          }

          .section-products .single-product .part-2 .product-old-price {
              position: relative;
              padding: 0 7px;
              margin-right: 2px;
              opacity: 0.6;
          }

          .section-products .single-product .part-2 .product-old-price::after {
              position: absolute;
              content: "";
              top: 50%;
              left: 0;
              width: 100%;
              height: 1px;
              background-color: #444444;
              transform: translateY(-50%);
          }
        </style> -->


  </head>
  <body>

    <?php
      require("db_connection.php");
     ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Megatron</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products.php">Products</a>
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

    <!-- Products -->
    <section class="section-products">
      <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h3>Get 5 and recieve a 15% Discount</h3>
                    <h2>We have the best and fun toys</h2>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="header">
              <h2>Lego Brand</h2>
          </div>
          <?php
          for ($x = 1; $x <= 10; $x++) { ?>
            <?php
              require("db_connection.php");
              $pro_ids = $x;
              $sql = "select * from products where pro_ids=$pro_ids";
              $rs = $mysqli->query($sql);
              if(mysqli_num_rows($rs)>0){
                $row = mysqli_fetch_assoc($rs);
              }
                ?>

          <div class="col-lg-3 col-xl-3 col-md-4 ">
              <div id="product-<?php echo $x;?>" class="single-product">
                  <div class="part-1 p">

                  </div>
                  <div class="part-2">
                      <a href="pr1.php?pro_ids=<?php echo $x ?>"> <h3 class="product-title"><?php echo $row['pro_names'];?></h3> </a>
                      <h4 class="product-old-price"><?php echo 'Rs.'.$row['b_price'];?></h4>
                      <h4 class="product-price"><?php echo 'Rs.'.$row['a_price'];?></h4>
                  </div>
              </div>
          </div>

          <?php
          }
        ?>

        </div>
        <div class="row">
          <div class="header">
              <h2>Hotwheels Brand</h2>
          </div>
          <?php
          for ($x = 11; $x <= 20; $x++) { ?>
            <?php
              require("db_connection.php");
              $pro_ids = $x;
              $sql = "select * from products where pro_ids=$pro_ids";
              $rs = $mysqli->query($sql);
              if(mysqli_num_rows($rs)>0){
                $row = mysqli_fetch_assoc($rs);
              }
                ?>

          <div class="col-lg-3 col-xl-3 col-md-4 ">
              <div id="product-<?php echo $x;?>" class="single-product">
                  <div class="part-1 p">

                  </div>
                  <div class="part-2">
                      <a href="pr1.php?pro_ids=<?php echo $x ?>"> <h3 class="product-title"><?php echo $row['pro_names'];?></h3> </a>
                      <h4 class="product-old-price"><?php echo 'Rs.'.$row['b_price'];?></h4>
                      <h4 class="product-price"><?php echo 'Rs.'.$row['a_price'];?></h4>
                  </div>
              </div>
          </div>

          <?php
          }
        ?>

        </div>
        <div class="row">
          <div class="header">
              <h2>Transformers Brand</h2>
          </div>
          <?php
          for ($x = 21; $x <= 26; $x++) { ?>
            <?php
              require("db_connection.php");
              $pro_ids = $x;
              $sql = "select * from products where pro_ids=$pro_ids";
              $rs = $mysqli->query($sql);
              if(mysqli_num_rows($rs)>0){
                $row = mysqli_fetch_assoc($rs);
              }
                ?>

          <div class="col-lg-3 col-xl-3 col-md-4 ">
              <div id="product-<?php echo $x;?>" class="single-product">
                  <div class="part-1 p">

                  </div>
                  <div class="part-2">
                      <a href="pr1.php?pro_ids=<?php echo $x ?>"> <h3 class="product-title"><?php echo $row['pro_names'];?></h3> </a>
                      <h4 class="product-old-price"><?php echo 'Rs.'.$row['b_price'];?></h4>
                      <h4 class="product-price"><?php echo 'Rs.'.$row['a_price'];?></h4>
                  </div>
              </div>
          </div>

          <?php
          }
        ?>

        </div>
      </div>

    </section>


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
