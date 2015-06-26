<?php
include('header.php');
?>
<script>
function workingCheck(){
	if(document.getElementById('working').checked)
		document.getElementById('left').style.display = "none";
		
	else
		document.getElementById('left').style.display = "block";
		
}
</script>
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
		        				 	<label for="register-username"><i class="icon-user"></i> <b>First Name*</b></label>
									<input class="form-control" name="fname" type="text" required placeholder="" >
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Middle Name</b></label>
									<input class="form-control" name="mname" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Last Name*</b></label>
									<input class="form-control" name="lname" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Picture*</b></label>
									<input class="form-control" name="imagefile"  type="file" required onchange="previewImage(this,[,256],4);" accept="image/*"/>
									<div class="imagePreview"></div>
								</div>
								<div class="form-group">
		        				 	<label for="autosize"><i class="icon-user"></i> <b>Skills*</b></label>			
									<textarea class="form-control" name="skills" maxlength="1000" required></textarea>
								</div>
								<div class="form-group">
		        				 	<label for="autosize"><i class="icon-user"></i> <b>Short Bio</b></label>			
									<textarea class="form-control" name="bio"  maxlength="1000"></textarea>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Educational Background</b></label>
									<input class="form-control" name="edBackground" type="text"  placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Program of Study at ODU*</b></label>
									<input class="form-control" name="programODU" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Major*</b></label>
									<input class="form-control" name="major" type="text" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Joined ODU*</b></label>
									<input class="form-control" name="joinedODU" type="month" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Joined Lab*</b></label>
									<input class="form-control" name="joinedLab" type="month" required placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><b><input  name="working" id="working" type="checkbox" onclick="workingCheck();" value="yes"  > Still working in Lab?*</b></label>
								</div>
								<div class="form-group" id="left">
		        				 	<label for=""><i class="icon-user"></i> <b>Left Lab</b></label>
									<input class="form-control" name="leftLab" type="month"  placeholder="">
									<br />
		        				 	<label for=""><i class="icon-user"></i> <b>Presently Working For</b></label>
									<input class="form-control" name="presentwork" type="text"  placeholder="">
									 <br /> 
		        				 	<label for=""><i class="icon-user"></i> <b>Previously worked For</b></label>
									<input class="form-control" name="previouswork" type="text"  placeholder="">
									<br />
		        				 	<label for=""><i class="icon-user"></i> <b>Experience</b></label>
									<input class="form-control" name="experience" type="text"  placeholder="">
								</div>
								 <div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Projects Worked on(in lab)*</b></label>
									<input class="form-control" name="projects" type="text" required />
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Email*</b></label>
									<input class="form-control" name="email" type="email" required placeholder="" required>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-user"></i> <b>Phone*</b></label>
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

<?php include('footer.php'); ?>	    
