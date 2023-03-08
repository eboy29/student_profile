<?php
session_start();
?>





<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>CIT fill up form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>


		
				<!-- Section 4 -->
		        <div class="section-4-container section-container section-container-image-bg" id="section-4">
			        <div class="container">
			            <div class="row">
			                <div class="col section-4 section-description wow fadeInLeftBig">
			                	<h2>CIT fil up form </h2>
								
			                    <p>
			                    	To register your whole creadentials to cit data base kindly fill up this form 
			                    </p>
			                </div>
			            </div>


			            <div class="row">	
			            	<div class="col section-bottom-button wow fadeInUp">
		                        <a class="btn btn-primary btn-customized-2" href="student_form.php">
				            		<i class="fas fa-envelope"></i> Student Fill up form 
				            	</a>
			            	</div>
			            </div>


			        </div>
		        </div>
		        
		        <!-- Section 5 -->
		        <div class="section-5-container section-container" id="section-5">

				
			        <div class="container">

					<?php
					if(isset($_SESSION['reg_success'])){
						

						?>

					<div class="alert alert-success" role="alert">
					<?= $_SESSION['reg_success'];?>
					</div>

					<?php     
					unset($_SESSION['reg_success']);  
					}

					?>
		
			            <div class="row">
			                <div class="col section-5 section-description wow fadeIn">
			                    <h2>CIT organizations</h2>
			                    <div class="divider-1 wow fadeInUp"><span></span></div>
			                    <p>We have completed 7 orgs under cit with active members !</p>
			                </div>
			            </div>
			            <div class="row">
		                	<div class="col-md-4 section-5-box wow fadeInUp">
		                		<div class="section-5-box-image"><img src="assets/img/portfolio/aats.jpg" alt="portfolio-1"></div>
		                		<h3><a href="#">Acssociation of Automotive Technology Students</a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> Under automotive Department</div>
		                		<p></p>
		                    </div>
		                    <div class="col-md-4 section-5-box wow fadeInDown">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/cads.jpg" alt="portfolio-2"></div>
		                		<h3><a href="#">College of Assosciation of Drafting Students</a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> Under Drafting Department</div>
		                		<p></p>
		                    </div>
		                    <div class="col-md-4 section-5-box wow fadeInUp">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/gazete.jpg" alt="portfolio-3"></div>
		                		<h3><a href="#">CIT Gazette - Publications </a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> November 2018</div>
		                		<p></p>
		                    </div>
							<div class="col-md-4 section-5-box wow fadeInUp">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/creativ.jpg" alt="portfolio-3"></div>
		                		<h3><a href="#">Collegiate Resources Auxillary of Technical Visionaries </a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> Under technical Department</div>
		                		<p></p>
		                    </div>
							<div class="col-md-4 section-5-box wow fadeInUp">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/food.jpg" alt="portfolio-3"></div>
		                		<h3><a href="#">Federation of food technolgy Students </a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> Under Food Department</div>
		                		<p></p>
		                    </div>
							<div class="col-md-4 section-5-box wow fadeInUp">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/sspice.jpg" alt="portfolio-3"></div>
		                		<h3><a href="#">Society of proficient, innovative and computer ethusiasts </a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> November 2018</div>
		                		<p>Under Comptech Department</p>
		                    </div>
							<div class="col-md-4 section-5-box wow fadeInUp" >
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/creativ.jpg" alt="portfolio-3"></div>
		                		<h3><a href="#">Technikous omada electrical  </a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> Under Electrical Department</div>
		                		<p></p>
		                    </div>
			            </div>
			           
			            </div>
			        </div>
		        </div>
		        
		        <!-- Section 6 -->
		        <div class="section-6-container section-container section-container-image-bg" id="section-6">
			        <div class="container">
			            <div class="row">
			                <div class="col section-6 section-description wow fadeIn">
			                    <h2>Register to be a member</h2>
			                    <div class="divider-1 wow fadeInUp"><span></span></div>
			                    <p></p>
			                </div>
			            </div>
			            <div class="row">
		                	<div class="col-md-6 section-6-box wow fadeInUp">
		                		<h3>rEGISTER</h3>
		                    	<div class="section-6-form">
		                    		<form role="form" action="assets/contact.php" method="post">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="contact-email">NAME</label>
				                        	<input type="text" name="email" placeholder="your name" class="contact-email form-control" id="contact-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="contact-subject">STUDENT NUMBER</label>
				                        	<input type="text" name="subject" placeholder="YOUR STUDENT NUMBER" class="contact-subject form-control" id="contact-subject">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="contact-subject">DEPARTMENT OF CIT </label>
				                        	<input type="text" name="subject" placeholder="YOUR COLLEGE DEPARTMENT" class="contact-subject form-control" id="contact-subject">
				                        </div>
				                        
				                        <button type="submit" class="btn btn-primary btn-customized"><i class="fas fa-paper-plane"></i> Submit</button>
				                    </form>
		                    	</div>
		                    </div>
		                    <div class="col-md-5 offset-md-1 section-6-box wow fadeInDown">
		                    	<h3> like and Follow facebook page </h3>
		                    	<div class="section-6-social">
			                    	<a href="https://www.facebook.com/CITGazette" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.facebook.com/CADSOfficialpage" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.facebook.com/cit.aats2022" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.facebook.com/CITCreativ" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.facebook.com/bulsucitffts" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.facebook.com/BulSUSpice" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.facebook.com/BulSUSpice" target="_blank"><i class="fab fa-facebook-f"></i></a>
		                    	</div>
		                    </div>
			            </div>
			        </div>
		        </div>
		
		        <!-- Footer -->
		        <footer class="footer-container">
		
			        <div class="container">
			        	<div class="row">
		
		                    <div class="col">
		                    	&copy; visit our facebook page <a href="https://www.facebook.com/bulsuCIT" target="_blank">GEAR UP CIT</a>.
		                    </div>
		
		                </div>
			        </div>
		
		        </footer>
	        
	        </div>
	        <!-- End content -->
        
        </div>
        <!-- End wrapper -->

        <!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>