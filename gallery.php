<?php

session_start();

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Gallery | HRDO, India</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">8237112626 / 9881002626 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:humanrightsmaha@gmail.com">humanrightsmaha@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>

                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  

                  <div class="row" style="margin-left: -120px">
 
                     <div class="col-md-12">
                        <img  style="margin-top: 0px;" src="img/hrdologo.jpg" height="258px" width="auto">
                      </div>
                     



                 </div>
                  
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT</a></li>
                    <!-- <li class="has-child"><a href="#">CAUSES</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="causes.html">Causes list </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                      </ul>

                    </li> -->
                    <li><a class="is-active" href="gallery.php">GALLERY</a></li>
                    <li><a href="membershipForm.php">MEMBERSHIP FORM</a></li>
                    <li><a href="contactUs.php">CONTACT</a></li>
                    
  <?php
                 if(isset($_SESSION["adminId"]) or isset($_SESSION["memberId"]))
                 {

           ?>
                    <li><a href="memberProfile.php">MEMBER PROFILE</a></li>

                    <li><a href="logout.php">LOGOUT</a></li>

           <?php

                 }else
                 {
            ?>

                      <li><a href="login.php">LOGIN</a></li>

            <?php

                 }

           ?>


                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<!-- <p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p> -->
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">
				

					<a href="Gallery/img1.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="Gallery/thumbs/img1.jpg" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->
                    <a href="Gallery/img2.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img2.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> <!-- /.gallery-item -->
                    <a href="Gallery/img3.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img3.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> <!-- /.gallery-item -->
                    <a href="Gallery/img4.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img4.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> <!-- /.gallery-item -->
            </div>
            <div class="row">
                

                    <a href="Gallery/img5.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img5.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> <!-- /.gallery-item -->
                    <a href="Gallery/img9.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img9.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> <!-- /.gallery-item -->
                    <a href="Gallery/img7.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img7.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> <!-- /.gallery-item -->
                    <a href="Gallery/img8.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/img8.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
					<a href="Gallery/98.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/98.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>

                    </a> 
					
					<a href="Gallery/99.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/99.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/100.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/100.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/101.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/101.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/102.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/102.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/103.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/103.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/104.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/104.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/105.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/105.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/106.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/106.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/107.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/107.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/108.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/108.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/109.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/109.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/110.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/110.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/111.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/111.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/112.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/112.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/113.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/113.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/114.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/114.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/115.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/115.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/116.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/116.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/117.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/117.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/118.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/118.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/119.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/119.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/120.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/120.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/121.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/121.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/122.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/122.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/123.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/123.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/124.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/124.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/125.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/125.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/126.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/126.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/127.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/127.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/128.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/128.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/129.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/129.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/130.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/130.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/131.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/131.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
						
						<a href="Gallery/132.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

                        <img src="Gallery/thumbs/132.jpg" alt="">

                        <span class="on-hover">
                            <span class="hover-caption">Image Caption</span>
                        </span>
            </div>
           
		</div>


	</div> <!-- /.main-container  -->


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                 <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;We are the Non Govt. Organaziation who are working individually or with others, acts to promote or protect human rights. We call our self <strong>Human rights defenders</strong> and we act peacefully for the promotion and protection of those rights. Human rights defenders are those men and women who act peacefully for the promotion and protection of those rights, and most of this activity happens within a nation as opposed to internationally.
                                 </p>
                                  <p>
                                   &nbsp;&nbsp;&nbsp;&nbsp;Our mission is fight agaist the human right violation. In efforts to eliminate violations of human rights, building awareness and protesting inhumane treatment has often led to calls for action and sometimes improved conditions.

                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                 </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-center">
                &copy; 2018 Reserved. Designed and maintained by OMVSAB IT SOLUTION.
            </div>
        </div>
        
    </footer>




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
