<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hands-On</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">
		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="js/angular.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							
							
			        		<li><a href="login.php"><h5>Login</h5></a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/hands-on logo.png" width="200" alt="Hands-On"></a></li>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="projects.php">Projects & Publications</a>
						</li>
						<li>
							<a href="team.php">Team</a>
						</li>
						<li>
							<a href="blog.php">Blog</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
										
					</ul>
				</nav>
			</div>
		</div>

        <!-- Page Title -->
		<div ng-app="handson" ng-controller="teamdetailsCtrl">
		<div ng-repeat="x in names">
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1> {{x.name + " " + x.lname}}</h1>
					</div>
				</div>
			</div>
		</div>
        
		
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Image Column -->
					
					<div class="col-md-4 col-sm-6" >
						<div class="team-member">
							<div class="team-member-image">
								<a href="#"><img  src="data:image/jpeg;base64,{{x.pic}}" alt="Name Surname" width="200px" height="250px"></a>
							</div>
						</div>
					</div>
					<!-- End Image Column -->
					<!-- Project Info Column -->
					<div class="portfolio-item-description col-sm-6">
						<!--<label> <h3>Name :</h3>  {{x.name + " " + x.mname + " " + x.lname}} </label>
						<p> 
							Mauris auctor blandit neque eu cursus. Nunc vel commodo dui, sed tempus mi. Fusce eleifend, orci ut elementum porta, mauris leo porta purus.
						</p>
						<p>
							Etiam aliquet tempor est nec pharetra. Etiam interdum tincidunt orci vitae elementum. Donec sollicitudin quis risus sit amet lobortis. Fusce sed tincidunt nisl.
						</p> -->
						<ul class="no-list-style">
							<li><b>Name:</b> {{x.name + " " + x.mname + " " + x.lname}}</li>
							<li><b>In Lab:</b> {{x.joinlab + " to " + x.leftlab}}</li>
							<li><b>Skills:</b> {{x.skills}}</li>
							<li><b>About:</b> {{x.about}}</li>
							<li><b>Education:</b> {{x.education}}</li>
							<li><b>Projects Worked On:</b> {{x.projects}}</li>
							<li><b>Email-id:</b> {{x.email}}</li>
							<li><b>Phone:</b> {{x.phone}}</li>
						</ul>
						<!--<ul class="no-list-style">
							
							<li class="portfolio-visit-btn"><a href="#" class="btn">Visit Website</a></li>
						</ul>-->
					</div> 
					<!-- End Project Info Column -->
				</div>
				<!-- Related Projects -->
				<!--<h3>Related Projects</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/portfolio3.jpg" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Project Name</li>
									<li>Website design & Development</li>
									<li>Client: Some Client LTD</li>
									<li class="read-more"><a href="#" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/portfolio4.jpg" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Project Name</li>
									<li>Website design & Development</li>
									<li>Client: Some Client LTD</li>
									<li class="read-more"><a href="#" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/portfolio6.jpg" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Project Name</li>
									<li>Website design & Development</li>
									<li>Client: Some Client LTD</li>
									<li class="read-more"><a href="#" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
				<!-- End Related Projects -->
			</div>
		</div>
		</div>
	</div>
		<script>
		var app = angular.module('handson', []);
		app.controller('teamdetailsCtrl', function($scope, $http) {
		$http.get("http://www.cs.odu.edu/~sthirive/handson/teamdetailsql.php?id=<?php echo $_REQUEST['id'];?>")
		.success(function (response) {
			console.log("response",response);
			$scope.names = response.records1;});
		});
		
		</script>
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.php"><img src="img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    	<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="blog.php">Blog</a></li>
		    				<li><a href="projects.php">Projects & Publications</a></li>
		    				<li><a href="team.php">Team</a></li>
							<li><a href="contact.php">Contact Us</a></li>			
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> Dragas Hall, Old Dominion University, Norfolk,VA<br/>
	        				<b>Phone:</b> +1 757 6837808<br/>
	        				<b>Fax:</b> 1 757 6834900<br/>
	        				<b>Email:</b> <a href="mailto:financials@cs.odu.edu">financials@cs.odu.edu</a>
	        			</p>
		    		</div>
		    		<!--<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>-->
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2015 Handson. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>