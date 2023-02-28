<?php
	if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["birth"]) || empty($_POST["gender"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["occupation"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["country"])){
		header("location:register.php?empty=1");
	}
	else{
		include("db.php");
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$birth=$_POST["birth"];
		$gender=$_POST["gender"];
		$caste=$_POST["caste"];
		$religion=$_POST["religion"];
		$occupation=$_POST["occupation"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$country=$_POST["country"];
		
		$sn=0;
		$rs=mysqli_query($conn,"select MAX(sn) from detail");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn++;
		$code="";
		$a=array();
		for($i='A'; $i<='Z'; $i++){
			array_push($a,$i);
			if($i=='Z'){
				break;
			}
		}
		for($i='a'; $i<='z'; $i++){
			array_push($a,$i);
			if($i=='z'){
				break;
			}
		}
		$b=array_rand($a,6);
		for($i=0;$i<sizeof($b);$i++){
			$code=$code.$a[$b[$i]];
		}
		$code=$code."_".$sn;
		$target="profile/";
		$target=$target.$code.".jpg";
		if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
			if(mysqli_query($conn,"insert into detail values($sn,'$code','$fname','$lname','$email','$pass','$gender','$caste','$religion','$occupation','$birth','$city','$state','$country')")>0){
				header("location:register.php?success=1");
			}
			else{
				header("location:register.php?again=1");
			}
		}
		else{
			header("location:register.php?upload_error=1");
		}
	}
?>
