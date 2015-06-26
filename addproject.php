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
		<style>
			.imagePreview{margin-top:10px;}
			.imagePreview img {margin:10px;}
			article.styled .imagePreview img {
				padding:15px;
				border:2px dashed #ccc;
				border-radius:10px;
			}
		</style>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
							
							
			        		<li><a href="page-login.php"><h5>Login</h5></a></li>
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
							<a href="#">Add Project</a>
						</li>
						<li>
							<a href="team.php">Add Member</a>
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
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Project Details</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form role="form" action="saveproject.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
		        				 	<label for="register-projectname"><i class="icon-user"></i> <b>Project Name*</b></label>
									<input class="form-control" id="projectname" name="pname" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="autosize"><i class="icon-user"></i> <b>Abstract*</b></label>			
									<textarea id="abstract" name="abstract" class="form-control" maxlength="1000" required></textarea>
									
								</div>
								<div class="form-group">
									<label for=""><i class="icon-user"></i> <b>Team*</b></label>
									<input class="form-control" id="team" name="team" type="text" required placeholder="">
									
								</div>
								<div class="form-group">
									<label for=""><i class="icon-user"></i> <b>Clients*</b></label>
									<input class="form-control" id="client" name="client" type="text" required placeholder="">
									
								</div>
								<div class="form-group">
									<label for=""><i class="icon-user"></i> <b>Project Type*</b></label>
									<input class="form-control" id="ptype" name="ptype" type="text" required placeholder="mobile or web or any other">
									
								</div>
								<div class="form-group">
									<label for=""><i class="icon-user"></i> <b>Technology Used*</b></label>
									<input class="form-control" id="tused" name="tused" type="text" required placeholder="">
									
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Picture*</b></label>
									<input class="form-control" name="imagefile"  type="file" required onchange="previewImage(this,[256],4);" accept="image/*"/>
									<div class="imagePreview"></div>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-lock"></i> <b>Funds</b></label>
									<input class="form-control" id="funds" name= "funds" type="text" placeholder="" >
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-lock"></i> <b>Publications</b></label>
									<input class="form-control" name="publications" id="publications" type="text" placeholder="">
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn pull-right">Add Project</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
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
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
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
		<script src="js/html5.image.preview.min.js"></script>
    </body>
</html>