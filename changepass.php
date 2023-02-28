<?php
    if(!isset($_COOKIE["login"])){
		header("location:login.php");
    }
	else{
		$email=$_COOKIE["login"];
        if(empty($_POST["cp"]) || empty($_POST["np"]) || empty($_POST["rp"])){
		header("location:change_pass.php?empty=1");
	    }
		else{
			$cp=$_POST["cp"];
			$np=$_POST["np"];
			$rp=$_POST["rp"];
			include("db.php");
			$rs=mysqli_query($conn,"select * from detail where email='$email'");
			if($r=mysqli_fetch_array($rs)){
				if($cp==$r["pass"]){
					if($np==$rp){
					   if(mysqli_query($conn,"update detail set pass='$np'where email='$email'")>0){
							header("location:change_pass.php?success=1");
						}
						else{
							header("location:change_pass.php?again=1");
						}	
					}
					else{
						header("location:change_pass.php?mismatch=1");
					}
				}
				else{
					header("location:change_pass.php?invalid=1");
				}
			}
		}
	}
?>