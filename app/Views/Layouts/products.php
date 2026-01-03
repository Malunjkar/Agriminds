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
      <title>Agriminds</title>
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
   <body class="main-layout products_page">
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
                              <a href="index"><h1 class="  text-center text-primary">Agriminds</h1></a>
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
                              <li class="nav-item ">
                                 <a class="nav-link" href="index"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about">About</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="products">Services </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact">Contact</a>
                              </li>
                              
                              <style>
                                 .dropbtn {
                                    background-color: #fca510;
                                    color: white;
                                    padding: 10px;
                                    font-size: 16px;
                                    border: none;
                                    cursor: pointer;
                                 }

                                 .dropbtn:hover,
                                 .dropbtn:focus {
                                    background-color: #808080;
                                 }

                                 .dropdown {
                                    float: right;
                                    position: relative;
                                    display: inline-block;
                                 }

                                 .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    background-color: #f1f1f1;
                                    min-width: 160px;
                                    overflow: auto;
                                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                    right: 0;
                                    z-index: 1;
                                 }

                                 .dropdown-content a {
                                    color: black;
                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
                                 }

                                 .dropdown a:hover {
                                    background-color: #ddd;
                                 }

                                 .show {
                                    display: block;
                                 }
                              </style>
                              </head>

                              <body>

                                 <h2>Aligned Dropdown Content</h2>


                                 <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">Login</button>
                                    <div id="myDropdown" class="dropdown-content">
                                       
                                       <button onclick="window.location.href='loginf1';" class="submit " type="button">Farmer Login</button>
                                       <button onclick="window.location.href='logins2';" class="submit " type="button">Service Provider  Login</button>
                                      
                                    </div>
                                 </div>

                                 <script>
                                    /* When the user clicks on the button, 
                                    toggle between hiding and showing the dropdown content */
                                    function myFunction() {
                                       document.getElementById("myDropdown").classList.toggle("show");
                                    }

                                    // Close the dropdown if the user clicks outside of it
                                    window.onclick = function (event) {
                                       if (!event.target.matches('.dropbtn')) {
                                          var dropdowns = document.getElementsByClassName("dropdown-content");
                                          var i;
                                          for (i = 0; i < dropdowns.length; i++) {
                                             var openDropdown = dropdowns[i];
                                             if (openDropdown.classList.contains('show')) {
                                                openDropdown.classList.remove('show');
                                             }
                                          }
                                       }
                                    }
                                 </script>
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
      <!-- product  section -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Our Services</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">
                  <div class="product_box">
                     <figure><img src="images/product1.jfif" alt="#"/></figure>
                     <h3 class="black">Tractor</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="product_box">
                     <figure><img src="images/product2.jfif" alt="#"/></figure>
                     <h3 >Harvester</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right0">
                  <div class="product_box">
                     <figure><img src="images/product3.jfif" alt="#"/></figure>
                     <h3>Tractor</h3>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 padding_left0">
                  <div class="product_box">
                     <figure><img src="images/product4.jfif" alt="#"/></figure>
                     <h3>Sprayer</h3>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 padding_right0">
                  <div class="product_box">
                     <figure><img src="images/product5.jfif" alt="#"/></figure>
                     <h3>Worker</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end product  section -->
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-3 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                           </div>
                           <div class="col-md-3">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-3">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                              <ul class="social_icon">
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                           <div class="col-md-8">
                              <textarea class="contactus1" placeholder="Message" type="type" Message="Name">Message </textarea>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                              <button class="send_btn">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-3 border_right">
                  <ul class="location_icon">
                     <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Sangamner</li>
                     <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +91 8956339398
                     </li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>sushant@gmail.com</li>
                  </ul>
               </div>
               <div class="col-md-3 border_right">
                  <h3>Useful Link</h3>
                  <ul class="link">
                     <li><a href="#">Farmer.com </a></li>
                     <li><a href="#">Sevices.com </a> </li>
                     <li><a href="#">machines.com </a></li>
                     <li><a href="https://instagram.com/sushantsonawane_25?igshid=YmMyMTA2M2Y=">Sushant.com </a> </li>
                     <li><a href="https://instagram.com/akshu_malunjkar_2311?igshid=YmMyMTA2M2Y=">Akshay.com </a></li>
                  </ul>
               </div>
               <div class="col-md-3 border_right">
                  <h3>Menus</h3>
                  <ul class="link">
                     <li><a href="index">Home</a></li>
                     <li><a href="about">About</a></li>
                     <li><a href="products">Services</a></li>
                     <li><a href="blog">Blog</a></li>
                     <li><a href="contact">Contact</a></li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <form class="bottom_form">
                     <h3>Newsletter</h3>
                     <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     <button class="sub_btn">subscribe</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                  <p>Copyright 2023 All Right Reserved By <a href="https://html.design/"> Agriminds</a></p>                  </div>
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