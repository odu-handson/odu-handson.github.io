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
		<script>
		function workingCheck(){
			if(document.getElementById('working').checked)
				document.getElementById('left').style.display = "none";
			else
				document.getElementById('left').style.display = "block";
		}
		</script>
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
							
							
			        		
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="#"><img src="img/hands-on logo.png" width="200" alt="Hands-On"></a></li>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Project & Publications</a>
						</li>
						<li>
							<a href="#">Team</a>
						</li>
						<li>
							<a href="#">Blog</a>
						</li>
						<li>
							<a href="#">Contact Us</a>
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
						<h1>Member Details</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<div class="basic-login">
							<form role="form" action="savemember.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>First Name</b></label>
									<input class="form-control" name="fname" type="text" required placeholder="" >
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Middle Name</b></label>
									<input class="form-control" name="mname" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Last Name</b></label>
									<input class="form-control" name="lname" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Picture</b></label>
									<input class="form-control" name="imagefile"  type="file" required onchange="previewImage(this,[256],4);" accept="image/*"/>
									<div class="imagePreview"></div>
								</div>
								<div class="form-group">
		        				 	<label for="autosize"><i class="icon-user"></i> <b>Skills</b></label>			
									<textarea class="form-control" name="skills" maxlength="1000" required></textarea>
								</div>
								<div class="form-group">
		        				 	<label for="autosize"><i class="icon-user"></i> <b>Short Bio</b></label>			
									<textarea class="form-control" name="bio"  maxlength="1000" required></textarea>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Education</b></label>
									<input class="form-control" name="edBackground" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Program of Study at ODU</b></label>
									<input class="form-control" name="programODU" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Major</b></label>
									<input class="form-control" name="major" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Joined ODU</b></label>
									<input class="form-control" name="joinedODU" type="month" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Joined Lab</b></label>
									<input class="form-control" name="joinedLab" type="month" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><b><input  name="working" id="working" type="checkbox" onclick="workingCheck();" value="yes"  > Still working in Lab?</b></label>
								</div>
								<div class="form-group" id="left">
		        				 	<label for=""><i class="icon-user"></i> <b>Left Lab</b></label>
									<input class="form-control" name="leftLab" type="month"  placeholder="">
								</div>
								 <div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Projects Worked on</b></label>
									<input class="form-control" name="projects" type="text" required />
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Email</b></label>
									<input class="form-control" name="email" type="email" required placeholder="" required>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Phone</b></label>
									<input class="form-control" name="phone" type='tel' pattern='^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$' required placeholder="(XXX-XXX-XXXX)" required>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Website</b></label>
									<input class="form-control" name="web" type="url" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Git URL</b></label>
									<input class="form-control" name="git" type="url" placeholder="" >
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Facebook Profile URL</b></label>
									<input class="form-control" name="facebook" type="url" placeholder="" >
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Google Plus URL</b></label>
									<input class="form-control" name="plus" type="url" placeholder="" >
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>LinkedIn Profile URL</b></label>
									<input class="form-control" name="linkedin" type="url" placeholder="" >
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Submit</button>
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
		    		<!-- <div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div> -->
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#">Blog</a></li>
		    				<li><a href="#">Projects & Publications</a></li>
		    				<li><a href="#">Team</a></li>
							<li><a href="#">Contact Us</a></li>			
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