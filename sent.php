 
<?php
    if(!isset($_COOKIE["login"])){
		header("location:login.php");
    }
	else{
		include("db.php");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from detail where email='$email'");
		if($r=mysqli_fetch_array($rs)){
		?>
		<!DOCTYPE HTML>
		<html>
		<head>
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
		<style>
		   pre{
			   background:white;
			   font-size:15px;
			   font-family:arial;
			   border:none;
		   }
		</style>
		</head>
		<body>
		<!-- ============================  Navigation Start =========================== -->
		 <?php
			 include("navbars.php");
			 ?>
		<!-- ============================  Navigation End ============================ -->
		<div class="grid_3">
		  <div class="container">
		   <div class="breadcrumb1">
			 <ul>
				<a href="index.html"><i class="fa fa-home home_1"></i></a>
				<span class="divider">&nbsp;|&nbsp;</span>
				<li class="current-page">Inbox</li>
			 </ul>
		   </div>
		   <div class="col-md-3 col_5">
			 <ul class="match_box">
				<h4>Matches</h4>
				<li><a href="#">Mutual Matches</a></li>
				<li><a href="#">Profiles yet to be viewed</a></li>
				<li><a href="#">Mutual Matches</a></li>
			 </ul>
			 <ul class="menu">
                   <li data-thumb="profile/<?=$r["code"]?>.jpg">
					    <img src="profile/<?=$r["code"]?>.jpg" class="img-responsive"/>
				   </li>
				
					<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value"><?=$r["fname"]?></td>
						</tr>
					    <tr class="opened_1">
							<td class="day_label">Last Name :</td>
							<td class="day_value"><?=$r["lname"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Gender :</td>
							<td class="day_value"><?=$r["gender"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Birth :</td>
							<td class="day_value"><?=$r["birth"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Caste :</td>
							<td class="day_value"><?=$r["caste"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?=$r["religion"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Occupation :</td>
							<td class="day_value"><?=$r["occupation"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">City :</td>
							<td class="day_value"><?=$r["city"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">State :</td>
							<td class="day_value"><?=$r["state"]?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Country :</td>
							<td class="day_value"><?=$r["country"]?></td>
						</tr>
				    </tbody>
				</table>
				
				  </ul>
		   </div>
		   <div class="col-md-9 members_box2">
			   <h3>Inbox</h3>
			   <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
			   <div class="col_4">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
						  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
						  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">New</a></li>
						  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Read</a></li>
						  <li role="presentation"><a href="#profile2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Accepted</a></li>
						  <li role="presentation"><a href="#profile2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Not Interested</a></li>
					   </ul>
					   <div id="myTabContent" class="tab-content">
						  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<ul class="pagination pagination_1">
							  <li class="active"><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">5</a></li>
							  <li><a href="#">...</a></li>
							  <li><a href="#">Next</a></li>
							</ul>
							<div class="clearfix"> </div>
							
							<?php
								$cn=mysqli_query($conn,"select * from inbox where from_email='$email'");
								while($nc=mysqli_fetch_array($cn)){
									$rec=mysqli_query($conn,"select * from detail where email='".$nc["to_email"]."'");
									if($user=mysqli_fetch_array($rec)){
									?>
									<div class="jobs-item with-thumb">
									   <div class="thumb_top">
										<div class="thumb"><a href="user_profile.php?id=<?=$user["code"]?>"><img src="profile/<?=$user["code"]?>.jpg" class="img-responsive" alt=""/></a></div>
										<div class="jobs_right">
											<h6 class="title"><a href="user_profile.php?id=<?=$user["code"]?>"><?=$user["fname"]." ".$user["lname"]?></a></h6>
											
											<ul class="login_details1">
											  <li>Message Date : <?=$nc["dt"]?></li>
											</ul>
											<p class="description">
											<pre><?=$nc["msg"]?></pre>
											</p>
										</div>
										<div class="clearfix"> </div>
									   </div>
									   <div class="thumb_bottom">
										   <div class="thumb_but"><a href="user_profile.php?id=<?=$user["code"]?>" class="photo_view">Send Mail</a></div>
										  <div class="clearfix"> </div>
									   </div>
									  </div>
									  <?php
									}
								}
							   ?>
							  
						  </div>
						  
						  
					 </div> 
				  </div>
			   </div>
			</div>
		   <div class="clearfix"> </div>
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
<?php
	    }
		else{
			header("location:logout.php");
		}
    }
?>	