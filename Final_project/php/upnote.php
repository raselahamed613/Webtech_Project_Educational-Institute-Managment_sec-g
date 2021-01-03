<?php

	if(isset($_POST['submit'])){

		//declaration
		$note = $_POST['file'];
		
		//session..
		$_SESSION['file'] =$note;
		setcookie('isValid', 'true', time()-1000, '/');

		//validation
		if($note == ""){

			header('location: ../view/upload_note.php?msg=null_file');

		}else{
			include "../db/database.php";
			//echo $database;
			$query = mysqli_query($conn,"insert into upnote values ('1', '$note')");
			echo "Upload Notes done!!";
		}
		
	}
	
?>