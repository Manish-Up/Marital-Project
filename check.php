<?php
    if(empty($_REQUEST["email"]) || empty($_REQUEST["pass"])){
		header("location:index.php?empty=1");
	}
	else{
		$conn=mysqli_connect("localhost","root","","ecbrecord");
		
		$email=$_REQUEST["email"];
		$pass=$_REQUEST["pass"];
		$rs=mysqli_query($conn,"select * from detail where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($pass==$r["pass"]){
				setcookie("login",$email,time()+3600);
				header("location:profile.php");
			}
			else{
				header("location:index.php?invaild_pass=1");
			}
		}
		else{
			header("location:index.php?invalid=1");
		}
	}
?>