
<?php
session_start();

	if(isset($_POST['submit'])){

		//declaration
		$sem 	  = $_POST['semester'];
		$sid 	  = $_POST['student_id'];
		$subject  = $_POST['subject_name'];
		$st_marks = $_POST['marks'];

		
		//session...
		$_SESSION['semester'] =$sem;
		$_SESSION['student_id'] =$sid;
		$_SESSION['subject_name'] =$subject;
		$_SESSION['marks'] =$st_marks;


		//echo $_SESSION['semester'];
		//validation
		if($sem == ""){
			header('location: ../view/published_result.html?msg=null_semester');
			//echo "Null semester";
		}
		else if($sid == ""){
			header('location: ../view/published_result.html?msg=null_studentId');
			echo "null student id";
		}
		else if($subject == ""){
			header('location: ../view/published_result.html?msg=null_subject');
			//echo "null subject";
		}
		else if($st_marks == ""){
			header('location: ../view/published_result.html?msg=null_studentmarks');
			//echo "null marks";
		}
		else{
			$myfile = fopen('allresult.txt', 'a');
             fwrite($myfile, $_POST["semester"] ."   ". $_POST["student_id"] ."   ". $_POST["subject_name"] ."   ". $_POST["marks"] . "\r\n");
             fclose($myfile);
			 echo "Upload result done!!";
			
		}
		
	}
?>
