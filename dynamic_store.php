<?php

$host = 'localhost';
$user = 'testuser';
$pwd = 'D6I]EW]e2Z@g7T.R';
$db = 'laceaid';

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("ERROR in connection: " . mysqli_connect_error());
}

$response = array();

$sql_query = "select * from dynamicStore";
$result = mysqli_query($conn, $sql_query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lace Aid</title>
    <link rel="stylesheet" href="./Assets/css/style-store.css" />
  
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <a href="./index.html">
              <div class="logo">
                <img src="./img/logo.png" alt="Logo"/>
                <h3 id="app-title">Lace Aid</h3>
              </div>
            </a>
            

            <div class="links">
              <ul>
                <li><a href="#">Features</a></li>
                <li><a href="http://222.164.5.103/runrecords">Your Runs</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./signup.html" class="btn">Sign up</a></li>
                <li><a href="checkout.html"><img src="img/icon_shopping_cart.png" height="50" width="50" /></a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <!-- Header-->
        <header class="bg-dark py-5">
          <div class="container px-4 px-lg-5 my-5">
              <div class="text-center text-white">
                  <h1 class="display-4 fw-bolder">Walking around with your feet unprotected?</h1>
                  <p class="lead fw-normal text-white-50 mb-0">Browse our selection of LaceAid products to keep your feet safe and get you through your day</p>
              </div>
          </div>
      </header>


      <!-- Section-->
      <section class="py-5">
          <div class="container px-4 px-lg-5 mt-5">
              <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            if(mysqli_num_rows($result) > 0) {
                $response['success'] = 1;
                $runRecords = array();

                while ($row = mysqli_fetch_assoc($result)){ ?>
                <div class="col mb-5">
                <a href>
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="image/<?php echo $row['image']?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $row['name']?></h5>
                                <!-- Product price-->
                                <?php echo $row['price']?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./store_item.html">View options</a></div>
                        </div>
                    </div>
                </a>  
                </div>                
                <?php } ?>

                <?php
                    $response['runRecords'] = $runRecords;
                } 
                else {
                    $response['success'] = 0;
                    $response['message'] = 'No data';
                }
                // echo json_encode($response);
                mysqli_close($conn);
                
              ?>
              
              
                  
              </div>
          </div>
      </section>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./Assets/js/app.js"></script>
  </body>
</html>