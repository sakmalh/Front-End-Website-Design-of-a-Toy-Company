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
    <?php
      require("db_connection.php");
      $pro_ids = $_REQUEST['pro_ids'];
      $sql = "select * from products where pro_ids=$pro_ids";
      $rs = $mysqli->query($sql);
      if(mysqli_num_rows($rs)>0){
        $row = mysqli_fetch_assoc($rs);
      }
        ?>
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
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
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

    <section class="bg-light text-dark p-md-0 text-center text-sm-start">
      <div class="container-fluid p-3 border border-primary">
        <div class="row">
          <div class="col-lg-8 p-5 justify-content-center">
            <img src="primg/<?php echo $row['pic'] ?>" alt="" width=80% height=auto>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <h3><?php echo $row['pro_names'];?></h3>
              </div>
              <div class="col-lg-4">
                <h4>
                <?php
                  $stars = $row['stars'];
                  for ($x = 2; $x <= $stars; $x++) {
                    echo '<i class="bi bi-star-fill text-warning"></i>';
                    echo " ";
                  }
                  ?>
                  <i class="bi bi-star-fill text-warning"></i>
                </h4>
              </div>

            </div>
            <div class="row font-weight-bold">
              <div class="col">
                <br>
                <del><?php echo 'Rs.'.$row['b_price'];?></del>
                <h3><span class="text-danger font-weight-bolder"><?php echo 'Rs.'.$row['a_price'];?></span></h3>
                <?php
                if ($row['sold_out'] == '1') { ?>
                 <span class="text-danger">Sold Out</span>
                 <?php
               }
               else { ?>
                 <span class="text-danger">In Stock</span>
                 <?php
               }
                ?>
              </div>
              <h3 class="py-3"><i class="bi bi-suit-heart text-primary"></i></h3>
              <hr>
            </div>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-sm-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-truck customicon" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                  </div>
                  <div class="col">
                    <h5> <span class="custom1"> &nbsp Delivery Options</span></h5>
                  </div>
                </div>

                  <hr>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-sm-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-credit-card customicon" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                      </svg>
                  </div>
                  <div class="col">
                    <h5> <span class="custom1">  &nbsp Payment Options</span></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="row py-3">
              <div class="col-md-6 pt-2">
                <button class="btn btn-new btn-warning btn-lg" type="button" name="button"><span class="btn-txt">Buy Now</span></button>
              </div>
              <div class="col-md-6 pt-2">
                <button class="btn btn-new btn-warning btn-lg" type="button" name="button"><span class="btn-txt">Add to Cart</span></button>
              </div>
            </div>

          </div>
        </div>
        <div class="row pt-3">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h5>Description</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h5>Additional Info</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false"><h5>Reviews</h5></a>
            </li>
          </ul>
          <div class="tab-content p-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><p><?php echo $row['desc'];?></p></div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <p>
            Additional Information &nbsp <br>
            SKN: 482935 &nbsp <br>
            ID: F4779A1E &nbsp <br>
            UPC: 673419337212 &nbsp <br>
            Brand: LEGO &nbsp
          </p>
          </div>
          <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
            <br>
            <h5>David Peterson</h5>
            <p> Very Good product. Quick Delovery</p>
            <hr>
            <h5>Peter Thunerg</h5>
            <p > Very Good product. Quick Delovery</p>
          </div>
          </div>

        </div>

      </div>
    </section>



      <section class="bg-warning text-dark p-3 text-center text-sm-start">
        <div class="container-fluid">
          <div class="container-icons p-3 text-center">
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
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
</html>
