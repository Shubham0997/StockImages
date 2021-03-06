<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PhotosStack </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="icon" href="icon/mainlogo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
      html, body {
  height: 100%;
}
    img.one {
  height: auto;
  width: auto;
}</style>
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0"><img class="one" src="icon/mainlogo.png" width="300" height="300"></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">


            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="NatureImages.php">Gallery</a>
                  <ul class="dropdown">
                    <li><a href="NatureImages.php">Nature</a></li>
                    <li><a href="PortraitImages.php">Portrait</a></li>
                    <li><a href="StreetImages.php">Street</a></li>
                    <li><a href="WildlifeImages.php">Wildlife</a></li>
                    <li><a href="LandscapeImages.php">Landscape</a></li>
                    <li><a href="TravelImages.php">Travel</a></li>
                    <li class="has-children">
                    </li>
                  </ul>
                </li>
                <li class="active"><a href="contact.php">Contact</a></li>
                <li><a href="doubleunderscore.php">@__.doubleunderscore</a></li>
                <li><a href="vasuahluwalia.php">@vasu_ahluwalia</a></li>
                <li><a href="Sign In.php">Sign In</a></li>
                <li><a href="Sign Up.php">Sign Up</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
              <li>
                  <a href="https://www.instagram.com/__.doubleunderscore/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCuOVzpgbpgiUcUK4efNvQCA" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  <div class="site-section" data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Contact Us</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 mb-5">
              <form method="GET">
               

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" name="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" name="subject" id="subject" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" name="Submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>
  <?PHP
  $servername="localhost";
  $username="root";
  $password="";
  $db="user_info";
  $con=mysqli_connect($servername,$username,$password,$db);
  if(isset($_REQUEST['Submit']))
  
  {
    $fn=$_GET['fname'];
    $ln=$_GET['lname'];
    $em=$_GET['email'];
    $sb=$_GET['subject'];
    $msg=$_GET['message'];
    $q="insert into contact_us(F_name,L_name,Email,Subject,Message) values ('$fn','$ln','$em','$sb','$msg')";
    $r=mysqli_query($con,$q);
    
  }
  ?>
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+91 7018648324</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">Shubham49412@gmail.com</a></p>

              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
      </p>
    </div>
  </div>

    

    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>