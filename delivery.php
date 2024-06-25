<?php require_once "DBconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hambaa</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong computer_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="home.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="/gorurhat/Ecommerce-master/index.php">Animals</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="skinBuyer.php">Animal Skin</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="delivery.php">Delivery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="/gorurhat/Ecommerce-master/admin/index.php">Admin</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- laptop1 -->
      <div class="laptop1">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptop1_img">
                     <figure><img src="images/leptop.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>By walk</h2>
                     <p>Hamba.com provides a delivery system by walking process if the buyer orders cattle in town.
And for these delivery systems buyers can only clear their payment after delivery. We provide
systematic, skilled cowboys to deliver cattle.</p>
                     <a class="read_more" href="contact.php">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="laptop1">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptop1_img">
                     <figure><img src="images/leptop1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>By truck</h2>
                     <p>Hamba.com offers a delivery system by truck outside the town. But for this system customers
need to pay 20% cash before delivery. This delivery system is provided in a very systematic way
with skilled and licensed truck drivers.</p>
                     <a class="read_more" href="contact.php">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="laptop1">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptop1_img">
                     <figure><img src="images/leptop2.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>By Van </h2>
                     <p>Hamba.com has options to deliver cattle through a van. If the customer selects the delivery
system by van in between towns, we give them 5% offer in delivery. Carefully we send the
product to the customer's house.</p>
                     <a class="read_more" href="contact.php">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end laptop1 -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="images/logo1.png" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://bd.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>We are committed to providing the best products to our consumers. We do great care in every
stage to make sure that the end product will be safe for all. We follow some key processes to
ensure authentic products with consistent quality.</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

