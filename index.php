<?php
 $con=mysqli_connect("localhost","root","") or die("unable to connect!");
 mysqli_select_db($con,'manthan');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>MANTHAN : Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <style type="text/css">
 	.mu-social-media a
 	{
 		color: #fff;
 		border-color: #fff;
 	}
 </style>
  </head>
  <body>
  	
  	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <!-- Logo -->
			      <a class="navbar-brand" href="index.html" style="height: 100px;width:100px;"><img src="assets/images/logo.png" ></a>

			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav mu-menu navbar-right">
			      		<li><a href="#mu-hero">Home</a></li>
				        <li><a href="#mu-about">About Us</a></li>
				        <li><a href="#mu-schedule">Event Rules</a></li>
			            <li><a href="#mu-register">Register</a></li>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						
						<div class="mu-social-media" style="text-shadow: 1px 2px 1px #000;" >
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/manthan_fest"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-snapchat"></i></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-6" style="color: #fff;margin-top: 15px; text-align: right;"><a data-toggle="tooltip" data-placement="bottom" title="Gmail"><span class="fa fa-envelope-square" style="font-size:20px; color:#fff; text-shadow: 1px 2px 1px #000;"></span></a> manthanbvimit@gmail.com ,
    					<span class="fa fa-phone-square" style="font-size:20px; color:#fff text-shadow: 1px 2px 1px #000;"></span> 8600509524 / 8451020143</div>
				</div>
				<div class="mu-hero-area">

					<div class="mu-hero-featured-area">
						<div class="mu-logo-area">
							<img src="assets/images/wlogo.png">
						</div>

						<div class="mu-hero-featured-content">

							<h2 style="text-shadow: 1px 2px 1px #000;">WELCOME TO MANTHAN !</h2>
							<p class="mu-event-date-line" style="box-shadow: 1px 2px 1px #000;">23 - 24 january, 2018. BVIMIT</p>

							<div class="mu-event-counter-area">
								<div id="mu-event-counter">
									
								</div>
							</div>

						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	
	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="assets/images/college.jpg" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>ABOUT THIS EVENT</h2>
										<p style="font-size: 20px;"> Manthan will be 14<sup>th</sup> time a college festival of such calibre & complexity is organized & managed with the theme " Techno Trash", as this year MANTHAN aims to bring out the TECH Step Towards Sustainability.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Event Rules</h2>
							</div>

							<div class="mu-schedule-content-area">
								
								<!-- start of event info-->
	<br>
<div class="container">
		  <ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#IT">IT</a></li>
			<li><a data-toggle="tab" href="#NON-IT">NON-IT</a></li>
			<li><a data-toggle="tab" href="#INDOOR">INDOOR</a></li>
			<li><a data-toggle="tab" href="#OUTDOOR">OUTDOOR</a></li>
		  </ul>

		<div class="tab-content">
		<!-- start of it events -->
			<div id="IT" class="tab-pane fade in active">
			  <h1 style="text-shadow: 1px 2px 1px #000; font-size:20px; text-align:center; font-family: 'lato',sans-serif;"> IT EVENTS </h1><br>
				<div class="container">
					<div class="row">
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/logo_design.png" alt="event-image">
											<h4>Logo designing</h4>
											<center> <button class="btn btn-primary" data-target="#logoModal" data-toggle="modal"> View Rules </button></center>
											
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="logoModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> Logo Designing </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> This game consists of 2 rounds.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The participant needs to create the logo based on theme.
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="col-sm-3">
									<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/techno_hunt.png" alt="event-image">
											<h4>Techno hunt</h4>
											<center> <button class="btn btn-primary" data-target="#technoModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="technoModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> techno hunt </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> There are three simple rounds.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Each round has 10 questions.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Answer of question will used to unzip the folder.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> More the folders you unzip more are your chances to win the game.
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/debug.jpg" alt="event-image">
											<h4>Debugging</h4>
											<center> <button class="btn btn-primary" data-target="#debugModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="debugModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> debugging </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> This game will consist of the 3 rounds.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The participant needs to pick the bugs.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Language: C/C++.<br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/nfs.png" alt="event-image">
											<h4>NFS Most Wanted</h4>
											<center> <button class="btn btn-primary" data-target="#nfsModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="nfsModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> nfs most wanted </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The number of rounds of this game is based on number of participant. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Participant needs to accelerate the speed of car to win the game. <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
					</div>
					<div class="row">
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/cs.png" alt="event-image">
											<h4>Counter Strike</h4>
											<center> <button class="btn btn-primary" data-target="#csModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="csModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> counter strike </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Team of 5.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The participant in the team must be of same institute.  <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/fifa.png" alt="event-image">
											<h4>FIFA-12</h4>
											<center> <button class="btn btn-primary" data-target="#fifaModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="fifaModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> fifa-12 </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The number of rounds of this game is based on number of participant.   <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/web_design.png" alt="event-image">
											<h4>Web designing</h4>
											<center> <button class="btn btn-primary" data-target="#web_designModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="web_designModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> web designing </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> This event will be two rounds.   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The participant needs to create the website consisting of minimum 4 pages.   <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:89%;" src="images/event/mm.png" alt="event-image">
											<h4>MINI MILITIA</h4>
											<center> <button class="btn btn-primary" data-target="#mmModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="mmModal" tabindex="-1">
												<div class="modal-dialog modal-sm-4">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> mini militia </h4>
														</div>
														<div class="modal-body">
																<label> Mini Militia : Singles </label><br> <br>
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> APK for the game will be provided by us.   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> For individual match there will be only 1 round.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The player who will win the toss will be allowed to select the map that they want to play.    <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In case if anyone's mobile hang or switch off in between of the game there would be no  rematch.<br>
																
																<hr>
																<label> Mini Militia : Team </label><br> <br>
																<label> <b>Participants : </b></label> 3 players.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> APK for the game will be provided by us.   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> For group match there will be total 3 round.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The team who will win the toss will be allowed to select the map that they want to play.    <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In case if anyone's mobile hang or switch off's in between of the game there would be no rematch.<br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
					</div>
				</div>
			</div>
			<!-- end of it events-->
			
			<!-- start of non-it events-->
			<div id="NON-IT" class="tab-pane fade">
			  <h1 style="text-shadow: 1px 2px 1px #000; font-size:20px; text-align:center; font-family: 'lato',sans-serif;"> NON-IT EVENTS </h1><br>
						<div class="row">
								<div class="col-sm-3">
									<div class="single-event">
												<img class="img-responsive img-thumbnail" src="images/event/sl.jpg" alt="event-image">
												<h4>SNAKE AND LADDER</h4>
											<center> <button class="btn btn-primary" data-target="#snakeModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="snakeModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> snake and ladder </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> 2 players.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 2 players- 1 to throw dice other to walk over numbers. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 1 who throws must have to spin the dice and cannot throw the dice directly in that case there would be penalty of minus 3 from other mate and if it cost snake bite it has to be continued from the tail of the snake.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 1 who throws the dice cannot guide the person who plays over board.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 2 immunity per can be given group for a match.<br> 
																<i class="fa fa-circle-o" aria-hidden="true"></i> Immunity can be given on doubt before getting over snake and only to the one who is playing over board and not by the one who throws the dice.   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Their can be more than one person on same number.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> One who reaches home first wins.  <br>
																
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
								
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:75%;" src="images/event/waste.jpg" alt="event-image">
											<h4>Best out of waste</h4>
											<center> <button class="btn btn-primary" data-target="#bst_wstModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="bst_wstModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Best out of waste </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i>   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i>   <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:100%;" src="images/event/photography.jpg" alt="event-image">
											<h4>Photography</h4>
											<center> <button class="btn btn-primary" data-target="#photoModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="photoModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Photography </h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Participant should have DSLR Camera and the memory card.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The theme for photography will be provided on the spot.  <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								
								<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:82%;" src="images/event/mehandi.jpg" alt="event-image">
											<h4>Mehandi</h4>
											<center> <button class="btn btn-primary" data-target="#mehandiModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="mehandiModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">mehandi</h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Select Best.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> There is no theme.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Time limit is 1 hour.  <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
						</div>
						<div class="row">
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/nail2.jpg" alt="event-image">
											<h4>nail-painting</h4>
											<center> <button class="btn btn-primary" data-target="#nail-paintingModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="nail-paintingModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">nail-painting</h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> College not provides any material.  <br>
																
																<i class="fa fa-circle-o" aria-hidden="true"></i> Time limit is 1 hour.  <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:83%;" src="images/event/face2.jpg" alt="event-image">
											<h4>face painting</h4>
											<center> <button class="btn btn-primary" data-target="#faceModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="faceModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">face painting</h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Time 2 hour  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Theme is given by Event Head on the spot.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> College not provides any material. <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/tshirt.jpg" alt="event-image">
											<h4>Tshirt Painting</h4>
											<center> <button class="btn btn-primary" data-target="#tshirtModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="tshirtModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">tshirt painting</h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> Individual.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Time limit is 1 ½  hour  <br>
																
																<i class="fa fa-circle-o" aria-hidden="true"></i> College not provides any material including T-shirt.  <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:100%; height:100%;" src="images/event/neon1.png" alt="event-image">
											<h4>Neon Cricket</h4>
											<center> <button class="btn btn-primary" data-target="#neonModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="neonModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">neon cricket</h4>
														</div>
														<div class="modal-body">
																<label> <b>Participants : </b></label> 4 members .<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The Neon Cricket Must Consist of 4 Members. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In this participant will have Neon Strips on his bat as well as ball.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> This game will be held in a dark class room. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The batsmen will be able to see only the Neon ball.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The team with maximum score will win the match.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> One innings will consist of 2 overs. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Coordinators decision will be final decision. <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
						</div>
			</div>
			<!-- end of non it events-->
			
			<!-- start indoor events-->
			<div id="INDOOR" class="tab-pane fade">
			  <h1 style="text-shadow: 1px 2px 1px #000; font-size:20px; text-align:center; font-family: 'lato',sans-serif;"> INDOOR EVENTS </h1> <br>
					<div class="row">
						<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/chess.jpg" alt="event-image">
											<h4>Chess</h4>
											<center> <button class="btn btn-primary" data-target="#chessModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="chessModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">chess</h4>
														</div>
														<div class="modal-body">
																<label> <b>Players : </b></label> Individual<br>
																<label> Rules : </label> <br>
																<b> CHECK AND CHECKMATE </b> <br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The goal in chess is to capture (or checkmate) the opponent's king. That is why all players have to protect their kings. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If an opponent's piece is threatening to capture the king, the king is said to be 'in check'. It is illegal to move the king onto a square where it would be under attack (in check).  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If the king is in check, the king's owner must do something to protect the king right away. <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/carrom.png" alt="event-image">
											<h4>Carrom</h4>
											<center> <button class="btn btn-primary" data-target="#carromModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="carromModal" tabindex="-1">
												<div class="modal-dialog modal-sm-3">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">carrom</h4>
														</div>
														<div class="modal-body">
																<label> <b>Players : </b></label> [Single and Doubles]<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> A game consists of 3 boards .The team scoring maximum points first wins the game. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The one who has leading points after the 3 boards. If both teams have same points after 3 boards a knock-out board will be held and winner of that board is considered as winner of the game.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Tapping NOT ALLOWED.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The winner of a board collects one point for each of the opponent's carrom men left at the finish and 3 points for the queen if covered by the winner (if covered by the loser, no-one gets those points).<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Sinking the striker costs you one piece or your turn. But, if you sink a piece in the same shot, then two come up and you shoot again or one comes up and you loose your turn.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> After sinking the striker, your opponent places the due piece(s) within the center circle. If you haven't sunk one yet, you owe one.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If the center spot is partially covered when replacing the queen or a jumped piece, the piece should cover as much red as possible. If totally covered, the piece is placed opposite the next player behind the red spot.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If the Queen and cover is taken in a single shot then the Queen is considered as taken(but in different pockets).  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The decision taken by the coordinator is final. <br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/tt.png" alt="event-image">
											<h4>Table Tennis</h4>
											<center> <button class="btn btn-primary" data-target="#ttModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="ttModal" tabindex="-1">
												<div class="modal-dialog modal-sm-4">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> table tennis </h4>
														</div>
														<div class="modal-body">
																<label> Table Tennis : Singles </label><br> <br>
																<label> <b>Players : </b></label> Single. <br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> All matches will be of 3 sets each of 11 points.   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Service will be decided by toss.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> For each game, the first player to reach 11 points wins that game, however a game must be won by at least a two point margin.    <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> A point is scored after each ball is put into play.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Each player serves two points in a row and then switch server. However, if a score of 10-10 is reached in any game, then each server serves only one point and then the server is switched.<br>
																
																<hr>
																<label> Table Tennis : Doubles  </label><br> <br>
																<label> <b>Players : </b></label> Doubles.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> All matches will be of 3 sets each of 11 points.  <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Service will be decided by toss.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> During service rather than the ball bouncing anywhere on the table, it must bounce only on the right half portion of the both server and the receiver.    <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The service still alternates every two points between teams , but it also alternates between players on the same team.<br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
					</div>
			</div>
			<!-- end of indoor events-->
			
			<!-- start of outdoor events-->
			<div id="OUTDOOR" class="tab-pane fade">
			  <h1 style="text-shadow: 1px 2px 1px #000; font-size:20px; text-align:center; font-family: 'lato',sans-serif;"> OUTDOOR EVENTS </h1> <br>
					<div class="row">
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/treasure_hunt.jpg" alt="event-image">
											<h4>Treasure Hunt</h4>
											<center> <button class="btn btn-primary" data-target="#treasure_huntModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="treasure_huntModal" tabindex="-1">
												<div class="modal-dialog modal-sm-4">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> treasure Hunt </h4>
														</div>
														<div class="modal-body">
																
																<label> <b>Participants : </b></label> 5 . <br>
																<label> Rules : </label> <br> <br>
																<label> First Round :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Every group will play this round. Every group has 5 participants. Only 3 can play first round.   <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> It includes 3 different small games.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The team that most time will be eliminated. <br>
																
																<hr>
																
																<label> Second Round :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Remaining 2 players will participate in second round .<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> There legs will be tight with handkerchief and they have to race with handkerchief tied on.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> First five team will qualify for the final round that is treasure hunt. <br>
																
																<hr>
																<label> Final Round :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 5 teams will get a different color cardboard and according to the clue, they would have to find further clues .<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Two winners will be chosen .<br>
																
																
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/cricket.png" alt="event-image">
											<h4>Box Cricket</h4>
											<center> <button class="btn btn-primary" data-target="#boxModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="boxModal" tabindex="-1">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">box cricket</h4>
														</div>
														<div class="modal-body">
																<label> <b>Players : </b></label> [6+2] 6 Players, 2 Substitutes .<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The game will be played by Soft Tennis Ball.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 3 over’s each side.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Ball has to pitch ahead of the center line otherwise it will be considered as a “NO BALL”.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Side arm bowling is not allowed.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> “NO BALLS” and “WIDE” will not be counted as official ball and 1 run will be scored by the opponent team.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Byes and Leg Byes are allowed.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Wicket keepers are allowed to change anytime.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Ball going directly outside the Box without interference by opponent team will be considered as “OUT”.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Ball going outside the “BOUNDRY AREA” will be scored 4 Runs. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Ball going outside the “2D AREA” will be scored 2 Runs.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Ball going outside the “1D AREA” will be scored 1 Run.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In case of a Tie, the team winning the toss will be considered as the winner of the match.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The Non Striker has to stand completely inside the “STUMP BOX”.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Umpire’s Decision will be considered as Final and no arguments will be entertained with the Umpire.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Profanity will not be entertained on the field.<br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/rink_football.png" alt="event-image">
											<h4>Rink Football</h4>
											<center> <button class="btn btn-primary" data-target="#rinkModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="rinkModal" tabindex="-1">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Rink Football</h4>
														</div>
														<div class="modal-body">
																<label> <b>Players : </b></label> [7+3] 7 Players (compulsory), 3 Substitutes (optional).<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Duration of The Game will be 15 minutes Full Time without any break at Half Time.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Teams are required to assemble on the field 15 minutes prior to the schedule of the event.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 6 a-Side Tournament With 3 Substitutes, Changes are allowed during the game play, Player has to go out First & Next Player (Sub) enters, If more than 6 players (per team) are found in the game, the team shall be disqualified for violation of rules.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Only 8 Players will be registered and No Change allowed after commencement of the Event..<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> This Team will be Permanent throughout the Tournament. Any changes made will Disqualify the Team automatically.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> There will be NO Offside rule.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Sliding tackles are NOT allowed.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In Case of Outside, instead of throw-ins, Kick-in is allowed.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In Case of Center Start, Goal is not allowed on the first touch. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In Case of 1 Yellow Card, the Player will be out for 2 minutes without any substitution; In case of 2 Yellow cards, the Player will be sent off; 1 Red Card will also Hold the Same Rule.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In Case Of Draw, there will be a Direct Tie-Breaker of 5 penalty Shootouts Per Team, followed by Sudden Death in Case of No Result in the Tie-Breaker.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Basic Rink Football Rules are mandatory.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In Case of any Misbehavior from any Team Members, the Team is Liable to be Debarred/Disqualified from the Tournament directly without any confrontations.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Referee’s Decisions on the Field will be Final.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Players of each Team are required to carry their respective College ID Cards along.<br>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/tug_of_war.png" alt="event-image">
											<h4>Tug Of War</h4>
											<center> <button class="btn btn-primary" data-target="#tug_of_warModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="tug_of_warModal" tabindex="-1">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">tug of war</h4>
														</div>
														<div class="modal-body">
																<label> <b>Players : </b></label> [4+1] 4 boys, 1 girl.<br>
																<label> Rules : </label> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Each Team will consist of 5 Players. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Players must include 4 boys compulsorily along with 1 girl which is optional.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> It means, either the Team can play with 4 boys ONLY Or 4 boys and 1 girl [5 players] irrespective of the opponents Team.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The ground will be marked with a centre line and two other equidistant lines on either side of the centre line.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The Rope will be marked with a ribbon as the centre, exactly above the centre line.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The teams start with the rope's centre (ribbon) directly above a centre line marked on the ground, and once the contest has commenced, attempt to pull the other team such that the centre (ribbon) on the rope crosses the marking on your side of the centre line.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The Team achieving this are considered the Winner of the contest.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> 1st whistle check both teams are ready, 2nd whistle pick up the rope, 3rd whistle pull the rope.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Shaking the rope is not allowed.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Lowering one’s elbow below the knee during a 'pull' - known as 'Locking' - is a foul, as is touching the ground for extended periods of time.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The rope must go under the arms; actions such as pulling the rope over the shoulders is considered a foul.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Referee’s decision will be Final.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Any misbehavior from any player(s) of any team shall lead to disqualification.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Players of each Team are required to carry their respective College ID Cards along.<br>
																
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
					</div>
					<div class="row">
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" src="images/event/vb.jpg" alt="event-image">
											<h4>volleyball</h4>
											<center> <button class="btn btn-primary"> View Rules </button></center>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="img-responsive img-thumbnail" style="width:100%;" src="images/event/badminton.jpg" alt="event-image">
											<h4>Badminton</h4>
											<center> <button class="btn btn-primary" data-target="#badmintonModal" data-toggle="modal"> View Rules </button></center>
											<div class="modal fade" data-keyboard="false" data-backdrop="static" id="badmintonModal" tabindex="-1">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"> badminton </h4>
														</div>
														<div class="modal-body">
																
																<label> <b>Players : </b></label> [Singles & Doubles] <br>
																<label> Rules : </label> <br> <br>
																<label>Toss :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Before play commences, a toss shall be conducted and the side winning the toss shall exercise the choice in to serve or receive first or to start play at one end of the court or the other.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The side losing the toss shall then exercise the remaining choice.<br>
																
																<hr>
																
																<label> Serving Rules:  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> In badminton, the serve must be hit in an upwards direction, with an underarm hitting action. You are not allowed to play a tennis style serve.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The main rule here is that when you hit the shuttle, it must be below your waist. To be exact, the rules define this to be a height level with the lowest part of your ribcage. In other words, you can serve from a bit higher than the top of your shorts, but not much.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The badminton court has a line down the middle, extending from the back to near the net; this is the centre line. At the front of the court, the centre line is met by another line; this is the front service line. These two lines form a T shape where they meet.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Service courts are used for three things.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> The server must stand inside a service court.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> The receiver must stand inside the diagonally opposite service court.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> The serve must travel into the diagonally opposite service court.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> For example, suppose the server is standing in his left service court. The receiver will be standing in his left service court, which is also where the serve has to go.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> If the serve is going to land outside the service court, then the receiver should let it fall to the floor. If the receiver hits the serve, then the rally continues even if the serve had been going out.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> The server and receiver must stay inside their service boxes until the server contacts the shuttle with his racket. After that, they can leave the boxes immediately and move anywhere on court.<br>
																<hr>
																<label> Serving and receiving courts :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The players shall serve from, and receive in, their respective right service courts when the server has not scored or has scored an even number of points in that game. <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> The players shall serve from, and receive in, their respective left service courts when the server has scored an odd number of points in that game. <br>
																<hr>
																<label> Service Court Errors :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> A service court error has been made when a player has served or received out of turn or has served or received from the wrong service court.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If a service court error is discovered, the error shall be corrected and the existing score shall stand.<br>
																<hr>
																
																<label> Faults:  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> It shall be a ‘fault’ if a service is not correct.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If, in service, the shuttle is caught on the net and remains suspended on its top.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> After passing over the net, is caught in the net or is hit by the receiver’s partner.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If in play, the shuttle:<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> Lands outside the boundaries of the court (i. e. not on or within the boundary lines); passes through or under the net.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> Fails to pass over the net.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> Touches the ceiling or side walls.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> Touches the person or dress of a player.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> Touches any other object or person outside the court.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> If is hit twice in succession by the same player.<br>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-square" aria-hidden="true"></i> Touches a player’s racket and does not travel towards the opponent’s court.<br>
																<hr>
																
																
																<label> Intervals :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Not exceeding 60 seconds during each game when the leading score reaches 11 points.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> Not exceeding 120 seconds between the first and second game, and between the second and third game shall be allowed in all matches.<br>
																<hr>
																
																
																<label> Game Point for Winning :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> You have to win the game by at least two points. If the score reaches 20–20, then 21 points are no longer enough to win the game. You need to win two clear points: two points in a row, one after the other.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> For example, 22–20 would be a winning score, as would 25–23. But 21–20 would not be enough, and neither would 24–23.<br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> If you reach 30–29, however, you’ve won the game. 30 points is the upper limit.<br>
																<hr>
																
																
																<label> Points :  </label><br> <br>
																<i class="fa fa-circle-o" aria-hidden="true"></i> It will be a total of 11 points match.<br>
																
																
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" data-dismiss="modal">close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
					</div>
			</div>
			<!-- end of outdoor events-->
		</div>
</div>
	
	<!-- end of event info-->
	

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Schedule -->

		

		<!-- Start Venue -->
		<section id="mu-venue">
			<div class="mu-venue-area">
				<div class="row">

					<div class="col-md-6">
						<div class="mu-venue-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7543.632466338918!2d73.04410462221323!3d19.027817691108236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c24ae7f38c4d%3A0x6c245daebfcc7c33!2sBharati+Vidyapeeth%E2%80%99s+Institute+of+Management+Studies+%26+Research!5e0!3m2!1sen!2sin!4v1513956343624" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mu-venue-address">
							<h2>VENUE <i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
							<address>
								Bharati Vidyapeeth's<br/>
								Institute of Management & Information Technology.<br/>
								Sector 8, C.B.D. Belapur,<br/>
								Navi Mumbai, <br/>
								Maharashtra	400614.<br/>
							</address>
							
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Venue -->

		

		<!-- Start Register  -->
		<section id="mu-register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Register Form</h2>
							</div>

							<div class="mu-register-content">
								<form class="mu-register-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

									 <div class="row panel-body">
      	<div class="col-sm-6 col-md-6"><label>Name:</label><input type="text" class="form-control" id="name" placeholder="ENTER NAME" name="name" required></div>

      	<div class="col-sm-6 col-md-6"><label>College:</label><input type="text" class="form-control" id="clg" placeholder="Enter College name" name="clg" required></div>

      	<div class="col-sm-6 col-md-6"><label>City:</label><input type="text" class="form-control" id="city" placeholder="Enter city name" name="city"> </div><br>

      	<div class="col-sm-6 col-md-6"><label> Gender:</label><br>
	 <select name="sex" class="form-control">
                     <option> Gender </option>
                     <option> Male </option>
                   <option> Female </option>
                                          
      </select> </div>
      	<div class="col-sm-6 col-md-6"><label>Mobile:</label><input type="text" class="form-control" id="cnt" placeholder="Enter contact no" name="cnt"> </div>
      	<div class="col-sm-6 col-md-6"><label>Email:</label><input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required> </div>

      	<div class="col-sm-6 col-md-6"><label>Select event:</label>
    
	 	<?php
                                              $con=mysqli_connect("localhost","root","") or die("unable to connect!");
                                              mysqli_select_db($con,'manthan');
                    
                                              $sql = "SELECT enm FROM event";
                                              $result = mysqli_query($con,$sql);

                                             echo "<select class='form-control' name='eve'>";
                  
                                             while ($row = mysqli_fetch_array($result)) {
                                             echo "<option value='" . $row['enm'] ."'>" . $row['enm'] ."</option>";
                                             }
                                             echo "</select>";
                              
           ?>
		</div> 
      	<div class="col-sm-6 col-md-6"><label>Select Sub event:</label>
		
	<?php
                                             
                                              $con=mysqli_connect("localhost","root","") or die("unable to connect!");
                                              mysqli_select_db($con,'manthan');
                    
                                              $sql = "SELECT snm FROM subevents";
                                              $result = mysqli_query($con,$sql);

                                             echo "<select class='form-control' name='subeve'>";
                  
                                             while ($row = mysqli_fetch_array($result)) {
                                             echo "<option value='" . $row['snm'] ."'>" . $row['snm'] ."</option>";
                                             }
                                             echo "</select>";
                              	
                                             ?>
                    </div>

      	<div class="col-sm-12 col-md-12"><center><button type="submit" name="submit" class="mu-reg-submit-btn">Submit</button> </center></div>          
	</div>
		

					            </form>
		<?php
			 if(isset($_POST['submit']))
				{
					$name = $_POST['name'];
					$clg = $_POST['clg'];
					$city = $_POST['city'];
					$gender = $_POST['sex'];
					$cont= $_POST['cnt'];
					$email= $_POST['email'];
					$event = $_POST['eve'];
					$subevent = $_POST['subeve'];
					
					$sql="insert into register(name,clg,city,gen,cnt,email,event,subevent) values ('$name','$clg','$city','$gender','$cont','$email','$event','$subevent')";
				
						if(!mysqli_query($con,$sql))
					{
						echo '<script type="text/javascript"> alert("Records not inserted") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Records inserted successfully") </script>';
					}
				
				}
		?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Register -->

		

		<!-- Start Sponsors -->
		
		<!-- End Sponsors -->

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					
					<div class="mu-footer-bottom">
						<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="#">Manthan@BVIMIT</a>. All right reserved.</p>
					</div>
				</div>
			</div>

	</footer>
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
  
      <script type="text/javascript">
		$(document).ready(function()
		{ $('[data-toggle="tooltip"]').tooltip();
		});
		
		function ClearForm(form)
		{
			form.name.value =""
			form.clg.value = "";
			form.city.value = "";
			form.cnt.value = "";
			form.email.value = "";

		}	
	</script> 
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	
	
    
  </body>
</html>