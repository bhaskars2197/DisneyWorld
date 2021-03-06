<!doctype html>
<html lang="en">
<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "disneyworld";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(mysqli_connect_errno()){
        die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }
    $query = "SELECT * FROM rides";
    $result = mysqli_query($conn,$query);

    $query3 = "SELECT * FROM merchandise";
    $result3 = mysqli_query($conn,$query3);
                   
    
?>
<head>
  <meta charset="utf-8">
  <title>Disney World</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="css/nivo-slider-theme.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>

    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">


            <nav class="navbar navbar-default">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1>Disney World</h1>
				  <p style="color:white">Bangalore</p>

								</a>
              </div>

              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#top_rides">Rides</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Restaurants</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Merchandise</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#viewbooking">View Booking</a>
                  </li>
                </ul>
              </div>
  
            </nav>

          </div>
        </div>
      </div>
    </div>
   
  </header>

  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/bh1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/bh2.jpg" alt="" title="#slider-direction-2" />
     	<img src="img/slider/bh4.jpg" alt="" title="#slider-direction-3" />
      </div>

      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">

                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The highest rated amuzement Park in Bangalores</h2>
                </div>

                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Come and enjoy the rides of a lifetime</h1>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">

                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The highest rated amuzement Park in Bangalore</h2>
                </div>

                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Come and enjoy the rides of a lifetime</h1>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">

                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The highest rated amuzement Park in Bangalore</h2>
                </div>

                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Come and enjoy the rides of a lifetime</h1>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/about/h1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                
              </a>
              <p>
                Come  and  experience  the  joy  of  a  lifetime  at  Disney  World  Bangalore!  
                        At  Disney  World  Bangalore,  we  are  commited  to  giving  you  the  experience  of  a  lifetime.
                        With  the  world's  most  premium  rides,  shows  and  entertainment,  we  assure  you  the  full 
                        Disney  experience  at  an  affordable  price.
						
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Fun Rides
                </li>
                <li>
                  <i class="fa fa-check"></i> Best Cuisines
                </li>
                <li>
                  <i class="fa fa-check"></i> Branded Merchendice
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div id="top_rides" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Top rides</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/tr1.jpg" alt="">
									</a>
              </div>
              <div class="team-content text-center">
                <h4><a href="booking_rides.php?name=<?php
                  $rname=""; 
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["ride_id"]==111){
                        $rname=$row["ride_name"];
                        echo $row["ride_name"];
                    }
                  }
                ?>">
                
                <?php
                  echo $rname;
                
                ?></a>     
                 </h4>
                <p>The fastest coaster ever</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/tr2.jpg" alt="">
									</a>
          
              </div>
              <div class="team-content text-center">
                <h4><a href="booking_rides.php?name=<?php 
                     mysqli_data_seek($result,0);
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["ride_id"]==112){
                        $rname=$row["ride_name"];
                        echo $row["ride_name"];
                    }
                  }
                ?>">
               <?php
                  echo $rname;
                
                ?></a>     </h4>
                <p>Defies laws of physics</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/tr3.jpg" alt="">
									</a>
               
              </div>
              <div class="team-content text-center">
                <h4><a href="booking_rides.php?name=<?php 
                     mysqli_data_seek($result,0);
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["ride_id"]==113){
                        $rname=$row["ride_name"];
                        echo $row["ride_name"];
                    }
                  }
                ?>">
               <?php
                  echo $rname;
                
                ?></a>   </h4>
                <p>Off to another world</p>
              </div>
            </div>
          </div>
		  <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/tr4	.jpg" alt="">
                
              </div>
              <div class="team-content text-center">
                <h4><a href="booking_rides.php?name=<?php 
                     mysqli_data_seek($result,0);
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["ride_id"]==114){
                        $rname=$row["ride_name"];
                        echo $row["ride_name"];
                    }
                  }
                ?>">
               <?php
                  echo $rname;
                ?></a>    </h4>
                <p>Not for the faint hearted
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Restaurants</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="indian.php">
										<img src="img/team/1.jpg" alt="">
									</a>
                
              </div>
              <div class="team-content text-center">
                <h4>Indian Cuisine</h4>
                <p>Consists of a wide variety of regional and traditional cuisines native to the Indian 
				subcontinent. Given the range of diversity in soil type, climate, culture, ethnic groups, 
				and occupations, these cuisines vary substantially from each other and use locally available
				spices, herbs,vegetables, and fruits.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="european.php">
										<img src="img/team/2.jpg" alt="">
									</a>
                
              </div>
              <div class="team-content text-center">
                <h4>European Cuisine</h4>
                <p>The cuisines of Western countries are diverse by themselves, although there are common 
				characteristics that distinguish Western cooking from cuisines of Asian countries and others. 
				Steak and cutlet in particular are common dishes across the West. Western cuisines also put substantial emphasis on grape wine and on sauces as 
				condiments, seasonings, or accompaniments.</p>
				.
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="italian.php">
										<img src="img/team/3.jpg" alt="">
									</a>
                
              </div>
              <div class="team-content text-center">
                <h4>Italian Cuisine</h4>
                <p>Italian cuisine is generally characterized by its simplicity, with many dishes having only 
				two to four main ingredients. Italian cooks rely chiefly on the quality of the ingredients 
				rather than on elaborate preparation. Ingredients and dishes vary by region. 
				Many dishes that were once regional have proliferated with variations throughout the country. </p>
              </div>
            </div>
          </div>
		  <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="chinese.php">
										<img src="img/team/25.jpg" alt="">
									</a>
                
              </div>
              <div class="team-content text-center">
                <h4>Chinese Cuisine</h4>
                <p>Chinese cuisine is an important part of Chinese culture, which includes cuisine originating 
				from the diverse regions of China, as well as from Chinese people in other parts of the world.
				Because of the Chinese diaspora and historical power of the country,Chinese cuisine has 
				influenced many other cuisines in Asia, with modifications made to cater to local palates.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
						<img src="img/about/2.jpg" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>work with us</h2>
        <h5>We are colaborated with big names such as Marvel Comic Universe(MCU) and Forge Comics</h5>
        <a href="#contact" class="ready-btn">Contact us</a>
      </div>
    </div>
  </div>
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Merchandise</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          </div>
        </div>
        <div class="awesome-project-content">
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="pay_merchandise.php"><img src="img/portfolio/d1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                   
                      <a href = "pay_merchandise.php?name=<?php 
                     mysqli_data_seek($result3,0);
                  while($row=mysqli_fetch_assoc($result3)){
                    if($row["merch_id"]==1){
                        $rname=$row["merch_name"];
                        echo $row["merch_name"];
                    }
                  }
                ?>"><h4><?php echo $rname;?></h4></a>
                      <span>INR :5000/-</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="pay_merchendise.html"><img src="img/portfolio/d2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    
                  <a href = "pay_merchandise.php?name=<?php 
                     mysqli_data_seek($result3,0);
                  while($row=mysqli_fetch_assoc($result3)){
                    if($row["merch_id"]==2){
                        $rname=$row["merch_name"];
                        echo $row["merch_name"];
                    }
                  }
                ?>"><h4><?php echo $rname;?></h4></a>
                      <span>INR 3000/-</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="pay_merchendise.html"><img src="img/portfolio/d3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    
                  <a href = "pay_merchandise.php?name=<?php 
                     mysqli_data_seek($result3,0);
                  while($row=mysqli_fetch_assoc($result3)){
                    if($row["merch_id"]==4){
                        $rname=$row["merch_name"];
                        echo $row["merch_name"];
                    }
                  }
                ?>"><h4><?php echo $rname;?></h4></a></a>
                      <span>INR 2500/-</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="pay_merchandise.php"><img src="img/portfolio/d4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                  <a href = "pay_merchandise.php?name=<?php 
                     mysqli_data_seek($result3,0);
                  while($row=mysqli_fetch_assoc($result3)){
                    if($row["merch_id"]==3){
                        $rname=$row["merch_name"];
                        echo $row["merch_name"];
                    }
                  }
                ?>"><h4><?php echo $rname;?></h4></a>
                      <span>INR 3500/-</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="pay_merchandise.php"><img src="img/portfolio/d5.png" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                  <a href = "pay_merchandise.php?name=<?php 
                     mysqli_data_seek($result3,0);
                  while($row=mysqli_fetch_assoc($result3)){
                    if($row["merch_id"]==5){
                        $rname=$row["merch_name"];
                        echo $row["merch_name"];
                    }
                  }
                ?>"><h4><?php echo $rname;?></h4></a>
                   <span>INR 2700/-</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="pay_merchandise.php"><img src="img/portfolio/d6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                  <a href = "pay_merchandise.php?name=<?php 
                     mysqli_data_seek($result3,0);
                  while($row=mysqli_fetch_assoc($result3)){
                    if($row["merch_id"]==6){
                        $rname=$row["merch_name"];
                        echo $row["merch_name"];
                    }
                  }
                ?>"><h4><?php echo $rname;?></h4></a>
                     <span>INR 2100/-</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  
  
 
  <!-- Start contact Area -->
  <div id="viewbooking" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>View Booking</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Enter your email<br>
               View your booking
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-4 col-sm-4 col-xs-4" style="margin-left:34%">
            <div id="errormessage"></div>
              <form action="getBookings.php" method="get" role="form" class="contactForm">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">View</button></div>
              </form>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>Disney World </h2>
				  <p>Bangalore</p>
                </div>

                               
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                
                <div class="footer-contacts">
                  <p><span>Tel:</span> +91 9480057965</p>
                  <p><span>Email:</span> enquiry@disneyworldblr.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Merchandise</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/d1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/d2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/d4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/d3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/d5.png" alt=""></a>
                  <a href="#"><img src="img/portfolio/d6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Disney World</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
<?php
    mysqli_close($conn);
?>