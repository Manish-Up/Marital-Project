 
<?php
    if(!isset($_COOKIE["login"])){
		header("location:login.php");
	}
	else{
		include("db.php");
		$email=$_COOKIE["login"];
		if(empty($_REQUEST["gender"]) || empty($_REQUEST["caste"]) || empty($_REQUEST["religion"])){
			  header("location:search.php?empty=1");
		}
		else{
			$gender=$_REQUEST["gender"];
			$caste=$_REQUEST["caste"];
			$religion=$_REQUEST["religion"];
			$id=0;
			if(isset($_GET["id"])){
				$id=intval($_GET["id"]);
			}
			$start=$id*3;
			$count=0;
			$rec=mysqli_query($conn,"select count(*) from detail where gender='$gender' AND caste='$caste' AND religion='$religion' AND email<>'$email'");
			if($num=mysqli_fetch_array($rec)){
			  $count=$num[0];
			}
			$page=ceil($count/3);
			if($id<0 || $id>=$page){
				header("location:page.php");
			}
   ?>
		<!DOCTYPE HTML>
		<html>
		<head>
		<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Matches :: w3layouts</title>
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
		<style>
			.interest{
				cursor:pointer;
			}
		</style>
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
			$(".interest").click(function(){
				var user=$(this).attr("id");
				
				$.post(
				  "sent_interest.php",{id:user},function(data){
					  if(data=="success"){
						  $("#r"+user).fadeOut(1000);
					  }
				  }
				);
			});
		});
		</script>
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
				<li class="current-page">Profile</li>
			 </ul>
		   </div>
		   <div class="col-md-9 profile_left2">
			  <?php
				  $flag=0;
				  $rs=mysqli_query($conn,"select * from detail where gender='$gender' AND caste='$caste' AND religion='$religion' AND email<>'$email' limit $start,3");
				  while($r=mysqli_fetch_array($rs)){
					  $flag=1;
			   ?>
			 <div class="profile_top" id="r<?=$r["code"]?>"><a href="user_profile.php?id=<?=$r["code"]?>">
			  <h2><?=$r["code"]?> </h2>
				<div class="col-sm-3 profile_left-top">
					<li data-thumb="profile/<?=$r["code"]?>.jpg">
						<img src="profile/<?=$r["code"]?>.jpg" class="img-responsive" />
					</li>
				</div>
				
				<div class="col-sm-6">
							<table class="table_working_hours">
						<tbody>
							<tr class="opened_1">
									<td class="day_label">First Name :</td>
									<td class="day_value"><?=$r["fname"]?></td>
								</tr>
								<tr class="opened_1">
									<td class="day_label">Last Name :</td>
									<td class="day_value"><?=$r["lname"]?></td>
								</tr><tr class="opened_1">
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
				   <div class="buttons">
					   <div class="vertical"><a style="color:white" href="user_profile.php?id=<?=$r["code"]?>">View Profile</a></div>
					   <div class="vertical">Shortlisted</div>
					   <div class="vertical"><span class="interest" id="<?=$r["code"]?>" >Send Interest</span></div>
				   </div>
				</div>
				<div class="clearfix"> </div>
			</a></div>
			
			<?php
				}
				if($flag==0){
					?>
					<div calss="profile_top"><h3>Record Not Found</h3></div>
					<?php
				}
				else{
					if($id>0){
					?>
						<a href="search_record.php?id=<?=$id-1?>&gender=<?=gender?>&caste=<?=caste?>&religion=<?=religion?>"><button style="float:left" class="btn btn-primary">Previous</button>
					<?php
					}
					if($id!=$page-1){
					?>
						<a href="search_record.php?id=<?=$id+1?>&gender=<?=gender?>&caste=<?=caste?>&religion=<?=religion?>"><button style="float:right"class="btn btn-primary">Next</button>
					<?php
					}
				}
		   ?>
		  </div>
		  <div class="col-md-3 match_right">
			<ul class="menu">
				<li class="item1"><h3 class="m_2">Show Profiles Created</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">within a week (2) </a></li>
					<li class="subitem2"><a href="#">within a month (4)</a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Profile type</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">with Photo (3) </a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Marital Status</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Unmarried (2) </a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Mother Tongue</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">English </a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Education</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Bachelors-Engineering </a></li>
					<li class="subitem1"><a href="#">Masters-Engineering </a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Occupation</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Engineer-Non IT (2) </a></li>
					<li class="subitem1"><a href="#">Software Professional (3)</a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Physical Status</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Normal (2) </a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Eating Habits</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Non Vegetarian (3)</a></li>
					<li class="subitem1"><a href="#">Vegetarian (2)</a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Smoking</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Not Specified (3)</a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Drinking</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Not Specified (3)</a></li>
					<li class="subitem1"><a href="#">Never Drinks (3)</a></li>
				  </ul>
				</li>
				<li class="item1"><h3 class="m_2">Profile Created by</h3>
				  <ul class="cute">
					<li class="subitem1"><a href="#">Self (1)</a></li>
				  </ul>
				</li>
			  </ul>
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
					<div class="copy">
					   <p>Copyright ?? 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					</div>
			  </div>
		</div>
		</body>
		</html>	
<?php
		}
	}
?>