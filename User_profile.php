<?php
session_start();
?>

<?php
$s="localhost";
$u="root";
$p="";
$db="user_info";
$c=mysqli_connect($s,$u,$p,$db);
$Y=$_SESSION['X'];
if(isset($_SESSION['X']))
{
	$q="select * from signup where Username='$Y'";
	$r=mysqli_query($c,$q);
	if($r){
			while($w=mysqli_fetch_array($r))
	{
				?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PhotosStack </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="icon" href="icon/mainlogo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

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

<style>.wrapper {
  padding: 100px;
}

.image--cover {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin: 20px;

  object-fit: cover;
  object-position: center right;
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
                <li><a href="doubleunderscore.php">@__.doubleunderscore</a></li>
                <li><a href="vasuahluwalia.php">@vasu_ahluwalia</a></li>
                <li><a href="contact.php">Contact</a></li>
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
        
  


<header>

	<div class="container">

		<div class="profile">

			<div class="profile-image">

      <?php echo" <img width='200 px' class='image--cover' height='200px' src='profilePictures/".$w['name']."'>" ?>

			</div>

			<div class="profile-user-settings">

				<h1 class="profile-user-name"><?php echo $w['Username'];?><br></h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <a href="logout.php" size="20"><input type="Submit" value="Log Out" class="btn btn-primary py-2 px-4 text-white"></a>
      </div>
      <div class="profile-bio">

<p><span class="profile-real-name"><?php echo $w['F_name'];?>&nbsp<?php echo $w['L_name'];}}}?>
<?php
        $s="localhost";
        $u="root";
        $p="";
        $db="user_info";
        $c=mysqli_connect($s,$u,$p,$db);
        $sql="select * from user_image where Username='$Y'";

        $result=mysqli_query($c,$sql);
        $x = 0; 
        while($row=mysqli_fetch_array($result)){
          $x++;}
          echo "&nbsp&nbsp&nbsp Posts: $x <br>";

      ?>


</span> 

</div>


		</div>
		<!-- End of profile section -->

	</div>
	<!-- End of container -->

</header>



</main>
<!-- partial -->
  <script  src="./script.js"></script>






  <div class="site-section" data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
 <h2 class="site-section-heading text-center">Upload Images</h2>
            </div>
          </div>
<font size="4">
          <div class="row">
            <div class="col-lg-8 mb-5">
              <form method="post" enctype="multipart/form-data">
               
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="name">Name</label> 
                    <input required type="text" name="nameofpic"  placeholder="Give an appropriate name to your picture..." class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Description</label> 
                    <textarea required name="Desc" cols="10" rows="2" class="form-control" placeholder="Give a description/caption for your picture..."></textarea>
                  </div>
                </div>
                <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="image">Choose an image to upload....</label> 
                    <input required type="file" name="file" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                  <label class="text-black" for="category">Choose the category....</label> 
<select required class="form-control" name="cat">
<option  value="Nature">Nature</option>
<option value="Portrait">Portrait</option>
<option value="Street">Street</option>
<option  value="Wildlife">Wildlife</option>
<option value="Landscapes">Landscapes</option>
<option value="Travel">Travel</option>
</select>



                  </div>
                </div>
                <div class="row form-group">

                <div class="row form-group">
                  <div class="col-md-12">
                  &nbsp&nbsp&nbsp<input type="submit" name="Submit" value="Upload Image" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>


            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>


<?PHP

  $servername="localhost";
  $username="root";
  $password="";
  $db="user_info";
  $con=mysqli_connect($servername,$username,$password,$db);
  if(isset($_REQUEST['Submit']))
  
  {
    $imgname=$_POST['nameofpic'];
    $imgdesc=$_POST['Desc'];
    $cat=$_POST['cat'];


  $file=$_FILES['file']['name'];
	$loc=$_FILES['file']['tmp_name'];
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
  $folder="upload/";
  move_uploaded_file($loc,$folder.$file);
  
    $q="insert into user_image(name,loc,type,size,Username,imageName,ImageDescription,ImageCategory) values ('$file','$loc','$type','$size','$Y','$imgname','$imgdesc','$cat')";
    $r=mysqli_query($con,$q);
    
  }
  ?>
</div></div>


<div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Your Gallery</h2>
            </div>
          </div>
        </div>
    
      </div>

      <?php
        $s="localhost";
        $u="root";
        $p="";
        $db="user_info";
        $c=mysqli_connect($s,$u,$p,$db);
        $sql="select * from user_image where Username='$Y'";
        $result=mysqli_query($c,$sql);
        while($row=mysqli_fetch_array($result)){
         
          ?>

          <a href="delete.php?del=<?php echo $row['indexNo']?>"   class="btn btn-primary py-2 px-4 text-white">Delete</a><?php
           echo"<div class='row' id='lightgallery'>";
        echo" <div class='col-sm-6 col-md-4 col-lg-3 col-xl-2 item' data-aos='fade' data-src='upload/".$row['name']."' data-sub-html='<p>".$row['ImageDescription']."</p>'>";
          echo "<a href='#'><img src='upload/".$row['name']."' alt='IMage' class='img-fluid'></a>";
        echo"</div>";
        echo"</div>"; 
      }
      

      
      ?>
      
      </div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.

</font>
      </p>
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
     