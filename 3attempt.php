<?php
	if(ISSET($_POST['login'])){
		require 'MainClass.php';	
 
		$username=$_POST['username'];
		$password=$_POST['password'];
 
		$query=mysqli_query($conn, "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
 
		if($row > 0){
			echo "<center><label class='text-success'>Login success!</label></center>";
			session_destroy();
		}else{
			if(!ISSET($_SESSION['attempt'])){
				$_SESSION['attempt'] = 0;
			}
 
			$_SESSION['attempt'] += 1;
 
			if($_SESSION['attempt'] === 3){
				$_SESSION['msg'] = "disabled";
			}
 
 
			echo "<center><label class='text-danger'>Invalid username or password</label></center>";
		}
	}
?>