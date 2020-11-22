<?php

	if(isset($_POST['submit'])){

		//declaration
		$notice = $_POST['notice'];
		
		//session..
		$_SESSION['notice'] =$notice;

		//validation
		if($notice == ""){

			header('location: ../view/upload_notice.html?msg=null_notice');

		}else{
			$myfile = fopen('upload_notice.txt', 'a');
             fwrite($myfile, $_POST["notice"] .  "\r\n");
             fclose($myfile);
			echo "Upload notice done!!";
			echo $notice;
			
		}
		
	}
	
?>