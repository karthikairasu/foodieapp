<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foodie</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/logo.jpeg" type="icon">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
        .ftco-navbar-light{
            background: #404044 !important;
        }
		#focus:hover{
			 animation: shake 0.5s; 

  /* When the animation is finished, start again */
  animation-iteration-count: infinite;

		}
		@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
    </style>

  </head>
  <body>
    
    <nav class="navbar navbar-fixed-top ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img class="img-responsive" src="image/logo.jpeg" width="100px" height="75px"></a><span class="logoname" style="font-size: 30px; color: white; font-style: italic; font-weight: bolder;">FOODIE</span>

        <ul class="navbar-nav navbar-right ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Back</a></li>   
          </ul>

        
      </div>
    </nav>
    <!-- END nav -->
    



    <section class="ftco-section bg-light" id="menu_1">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Menu</span>
            <h2>Discover Our Exclusive Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span> Main</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Sub Category</a>
              <!---<a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Drinks</a>--->
            </div>
           
                
				 
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row" style="float:left;">
				  <?php
			   $conn = mysqli_connect("localhost","root","","foodie");
			   mysqli_set_charset($conn,'utf8');
			   $sql = "select * from foodie_product_category";
			   $res = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_object($res))
			   {
				?>
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate" style="min-height: 140px;">
                      <div class="menu-img"  height="300" width="300"><?php echo "<img src='image/$row->image' height='100'  id='focus' width='100' alt='food'>"?></div>
                      <div class="text d-flex">
                        <div class="one-half text-center">
                          <h3 style="font-size:22px;font-family:Merienda;font-weight:bold;"><?php echo "$row->title";?></h3>
                          <!--<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>-->
                        </div> 
                        <div class="one-forth">
                          <span class="price"></span>
                        </div>						
                      </div>
                    </div>
                    
                  </div>
                 
                  
				   <?php
			   }
			 ?>
                </div>
              </div><!-- END -->
               
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row" style="float:left;">
				  <?php
			   $conn = mysqli_connect("localhost","root","","foodie");
			   mysqli_set_charset($conn,'utf8');
			   $sql = "select * from foodie_product_sub_category";
			   $res = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_object($res))
			   {
				?>
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate" style="min-height: 140px;">
                      <div class="menu-img"  height="300" width="300"><?php echo "<img src='image/$row->image' height='100' width='100' id='focus' alt='food'>"?></div>
                      <div class="text d-flex">
                        <div class="one-half text-center">
                          <h3 style="font-size:22px;font-family:Merienda;font-weight:bold;"><?php echo "$row->title";?></h3>
                          <!--<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>-->
                        </div> 
                        <div class="one-forth">
                          <span class="price"></span>
                        </div>						
                      </div>
                    </div>
                    
                  </div>

                     <?php
			   }
			 ?>
                </div>
              </div><!-- END -->

              <!--<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			  
			      <div class="row" style="float:left;">
				  <?php
			   $conn = mysqli_connect("localhost","root","","foodie");
			   mysqli_set_charset($conn,'utf8');
			   $sql = "select * from foodie_product_category";
			   $res = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_object($res))
			   {
				?>
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate" style="min-height: 140px;">
                      <div class="menu-img"  height="300" width="300"><?php echo "<img src='image/$row->image' height='100' width='100' id='focus' alt='food'>"?></div>
                      <div class="text d-flex">
                        <div class="one-half text-center">
                          <h3 style="font-size:22px;font-family:Merienda;font-weight:bold;"><?php echo "$row->title";?></h3>
                          <!--<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>-->
                       <!-- </div> 
                        <div class="one-forth">
                          <span class="price"></span>
                        </div>						
                      </div>
                    </div>
                    
                  </div>

                     <?php
			   }
			 ?>
                </div>
                
              </div>--->
             <!-- <div class="col-sm-12 pt-4 text-center ftco-animate">
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                <span><a href="reservation.html" class="btn btn-primary btn-outline-primary p-3">Make a Reservation</a></span>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

        

    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>