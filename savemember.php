<?php
include 'connectdb.php';
$fname = addslashes($_POST['fname']);
$mname = addslashes($_POST['mname']);
$lname = addslashes($_POST['lname']);
$skills = addslashes($_POST['skills']);
$bio = addslashes($_POST['bio']);
$edBackground = addslashes($_POST['edBackground']);
$programODU = addslashes($_POST['programODU']);
$major = addslashes($_POST['major']);
$joinedODU = addslashes($_POST['joinedODU']);
$joinedLab = addslashes($_POST['joinedLab']);
$leftLab = addslashes($_POST['leftLab']);
$present = addslashes($_POST['presentwork']);
$previous = addslashes($_POST['previouswork']);
$exp = addslashes($_POST['experience']);
$projects = addslashes($_POST['projects']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$web = addslashes($_POST['web']);
$git = addslashes($_POST['git']);
$facebook = addslashes($_POST['facebook']);
$plus = addslashes($_POST['plus']);
$linkedin = addslashes($_POST['linkedin']);
//echo $sql;
echo '<!DOCTYPE html>
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script>
		function workingCheck(){
			if(document.getElementById("working").checked)
				document.getElementById("left").style.display = "none";
			else
				document.getElementById("left").style.display = "block";
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
					<div class="col-sm-10" style="min-height:420px">';

function bytesToSize1024($bytes, $precision = 2) {
	$unit = array('B','KB','MB');
	return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}
	 
$fileName = $_FILES['imagefile']['name'];
$tmpFileName = $_FILES['imagefile']['tmp_name'];
$fileType = $_FILES['imagefile']['type'];
$fileSize = bytesToSize1024($_FILES['imagefile']['size'], 1);

$fp      = fopen($tmpFileName, 'r');
$content = fread($fp, filesize($tmpFileName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

if($_POST['working']=='yes')
	$sql = "insert into team (fname,mname,lname,skills,about,education,program,major,joinodu,joinlab,projects,email,phone,website,git,fburl,gurl,lnurl,working,picture) values ('$fname','$mname','$lname','$skills','$bio','$edBackground','$programODU','$major','$joinedODU','$joinedLab','$projects','$email','$phone','$web','$git','$facebook','$plus','$linkedin',1,'$content')";
else
	$sql = "insert into team (fname,mname,lname,skills,about,education,program,major,joinodu,joinlab,leftLab,presentwork,previouswork,experience,projects,email,phone,website,git,fburl,gurl,lnurl,working,picture) values ('$fname','$mname','$lname','$skills','$bio','$edBackground','$programODU','$major','$joinedODU','$joinedLab','$present','$previous','$exp','$leftLab','$projects','$email','$phone','$web','$git','$facebook','$plus','$linkedin',0,'$content')";
//echo $sql; 
$res = mysql_query($sql,$conn);

if ($res) {
    echo "<h2>New member added successfully.</h2>";
} else {
    echo "Error: <br>" . $conn->error;
}

echo '</div>
					
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
        <script>window.jQuery || document.write("<script src="js/jquery-1.9.1.min.js"><\/script>")</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>';
$conn->close();
?>