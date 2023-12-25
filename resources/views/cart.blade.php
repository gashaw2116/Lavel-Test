<!doctype html>


<html lang="en">


<head>


  
   <meta charset="utf-8" />


   <meta name="viewport" content="width=device-width, initial-scale=1" />


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
       crossorigin="anonymous" />


   <title></title>
   <style>
    .bg-secondary {
        background-color:black !important;
    }
    .copyright {
        background-color:green;  
    }
    nav {
        font-weight: 700;
    }
   
    .bg-primary {
        background-color:lightseagreen !important
    }
    .img-card {
        height: 18vw;
        object-fit: cover;
    }
    </style>
</head>


<body>


   <!-- header -->


   <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">


       <div class="container">


           <a class="navbar-brand" href="#"></a>


           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
               aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">


               <span class="navbar-toggler-icon"></span>


           </button>


           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


               <div class="navbar-nav ms-auto">


                   <a class="nav-link active" href="/">Home</a>


                   <a class="nav-link active" href="/products">Products</a>


                   <a class="nav-link active" href="/cart">Cart</a>


                   <a class="nav-link active" href="/about">About</a>


               </div>


           </div>


       </div>


   </nav>


   <header class="masthead bg-primary text-white text-center py-4">


       <div class="container d-flex align-items-center flex-column">


           <h2>Online Store Cart Page</h2>


       </div>


   </header>


   <!-- header -->
      <div class="container my-4">
      <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Gashaw Taye">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Gashaw2taye@gmail.com.com">
            </div>

          <div class="col-50">
            <h3></h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Gashaw taye">
            <label for="ccnum">card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
           </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b></b>
        </span>
      </h4>
      <p><a href="#">Smart TV =</a> <span class="price">$20</span></p>
      <p><a href="#">Iphone = </a> <span class="price">$10</span></p>
      <p><a href="#">Chromcast = </a> <span class="price">$15</span></p>
      <p><a href="#">Glasses = </a> <span class="price">$5</span></p>
      <hr>
      <p>Total Price<span class="price" style="color:black"><b>$50</b></span></p>
    </div>
  </div>
</div>

   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>


</body>


</html>
