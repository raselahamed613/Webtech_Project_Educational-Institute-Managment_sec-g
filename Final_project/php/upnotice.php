<?php

	if(isset($_POST['submit'])){

		//declaration
		$notice = $_POST['notice'];
		
		//session..
		$_SESSION['notice'] =$notice;

		//validation
		if($notice == ""){

			header('location: ../view/upload_notice.php?msg=null_notice');

		}else{
			include "../db/database.php";
			//echo $database;
			$query = mysqli_query($conn,"insert into notice values ('1','$notice')");
			echo "Upload notice done!!";
			//echo $notice;
			
		}
		
	}
	
?>