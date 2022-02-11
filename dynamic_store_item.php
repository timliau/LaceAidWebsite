<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lace Aid</title>
    <link rel="stylesheet" href="./Assets/css/style-store.css" />
  
    <script type="text/javascript">
            
        function addToShoppingCart(){
            var inputQuantity = document.getElementById("inputQuantity").value;
            shoppingCart+=inputQuantity;
            alert("Added Item to Cart");
        }
        document.getElementById("addToCartButton").addEventListener("click", addToShoppingCart);
        
    </script>
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

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img/<?php $_SESSION['name'] ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder"><?php $_SESSION['name'] ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?php $_SESSION['price'] ?></span>
                        </div>
                        <p class="lead">Lace Aid is a self tying shoe made to protect your feet</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" id="addToCartButton" onclick="alert('Item Added to Cart')">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
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