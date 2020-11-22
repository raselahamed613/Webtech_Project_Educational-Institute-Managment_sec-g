<?php

	if(isset($_POST['submit'])){

		//declaration
		$note = $_POST['file'];
		
		//session..
		$_SESSION['file'] =$note;

		//validation
		if($note == ""){

			header('location: ../view/upload_note.html?msg=null_file');

		}else{
			$myfile = fopen('upload_note.txt', 'a');
             fwrite($myfile, $_POST["file"] .  "\r\n");
             fclose($myfile);
			echo "Upload Notes done!!";
		}
		
	}
	
?>