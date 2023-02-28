 
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php
      include("navbar.php");
 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <?php
				    if(isset($_GET["empty"])){
					?>
					  <div class="alert alert-danger"><h3>All Field Required</h3></div>
					<?php
					}
				    else if(isset($_GET["success"])){
					?>
					  <div class="alert alert-success"><h3>Profile Created</h3></div>
					<?php
					}
				    else if(isset($_GET["again"])){
					?>
					  <div class="alert alert-danger"><h3>Try Again</h3></div>
					<?php
					}
					else if(isset($_GET["upload_error"])){
					?>
						<div class="alert alert-danger">
							<h3>Image upload failed</h3>
						</div>
					<?php
					}
				?>
	     <form method="post" enctype="multipart/form-data" action="insert.php">
	  	    <div class="form-group">
		      <label for="edit-name">First Name<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Last Name<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="lname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
		    </div>
            <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Gender : </label>
                <div class="col-sm-5">
                    <input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
                </div>
                <div class="clearfix"> </div>
            </div>
			<div class="form-group form-group1">
                <label class="col-sm-7 control-lable">Caste<span class="form-required" title="This field is required.">*</span></label>
			    <select name="caste"class="form-control" required>
					<option value="">Select</option>
				    <option value="Verma">Verma</option>
			        <option value="Sharma">Sharma</option>
					<option value="Sikh">Sikh</option>
					<option value="Jain">Jain</option>
					<option value="Prajapat">Prajapat</option>
			   	    <option value="Choudhary">Choudhary</option>
					<option value="Depawat">Depawat</option>
					<option value="Upadhyay">Upadhyay</option>
				    <option value="Panchariya">Panchariya</option>
					<option value="Rathod">Rathod</option>
					<option value="Gupta">Gupta</option>
				    <option value="Sain">Sain</option>
                </select>
		    </div>
			<div class="form-group">
		      <label for="edit-name">Religion<span class="form-required" title="This field is required.">*</span></label>
		      <select name="religion" class="form-control" required>
										<option value="">Select</option>
										<option value="Hindu">Hindu</option>
										<option value="Sikh">Sikh</option>
										<option value="Jain">Jain</option>
										<option value="Buddhism">Buddhism</option>
										<option value="Christian">Christian</option>
										<option value="Parsi">Parsi</option>
										<option value="Islam">Islam</option>
										<option value="Other">Other</option>
									</select>
		    </div>
			<div class="form-group">
		      <label for="edit-name">Occupation<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		      <div>
		      <label for="edit-pass">Date Of Birth: <span class="form-required" title="This field is required.">*</span></label>
                  <input type="date" name="birth" class="form-control"  required>
			  </div>
			  <div class="form-group">
		      <label for="edit-name">City<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="city" value="" size="60" maxlength="60" class="form-text required">
		      </div>
			  <div class="form-group">
		      <label for="edit-name">State<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="state" value="" size="60" maxlength="60" class="form-text required">
		      </div>
			  <div class="form-group">
		      <label for="edit-name">Country<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="country" value="" size="60" maxlength="60" class="form-text required">
		      </div>
			  <div class="form-group">
			   <label for="edit-name">Image<span class="form-required" title="This field is required.">*</span></label>
			    <input type="file" name="photo"  class="form-control">
			  </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		 
      </div>
</div>
</body>
</html>	