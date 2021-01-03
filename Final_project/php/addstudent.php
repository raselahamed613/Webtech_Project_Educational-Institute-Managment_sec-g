<?php

	if(isset($_POST['submit'])){
/*
		$myfile = fopen('text.txt', 'a');
		$data = "submit\r\n";
		fwrite($myfile, $data);
		fclose($myfile);
8*/
		//declaration

		$sid 	= $_POST['id'];
		$sname 	= $_POST['studentname'];
		$f_name = $_POST['fathername'];
		$m_name	= $_POST['mothername'];
		$dob	= $_POST['dob'];
		$contact= $_POST['contact_number'];
		$email	= $_POST['email'];
		$gender = $_POST['gender'];
		$depart	= $_POST['dept'];
		$blood	= $_POST['blood'];
		$country= $_POST['nationality'];
		$relig  = $_POST['religion'];
		$image	= $_POST['picture'];

		//session...
		$_SESSION['id'] =$sid;
		$_SESSION['studentname'] =$sname;
		$_SESSION['dob'] =$dob;
		$_SESSION['email'] =$email;
		$_SESSION['picture'] =$image;



		//validation
		if($sid == ""){
			//echo "Username field is empty...";
			header('location: ../view/addstudent.php?msg=null_id');

		}else if(empty($sname)){
			//echo "Password field is empty...";
			header('location: ../view/addstudent.php?msg=null_studentname');

		}else if(empty($f_name)){
			header('location: ../view/addstudent.php?msg=null_fathername');

		}else if(empty($m_name)){
			header('location: ../view/addstudent.php?msg=null_mothername');
		}else if(empty($dob)){
			header('location: ../view/addstudent.php?msg=null_dob');
		}else if(empty($contact)){
			header('location: ../view/addstudent.php?msg=null_contact_number');
		}else if(empty($email)){
			header('location: ../view/addstudent.php?msg=null_email');
		}else if(empty($gender)){
			header('location: ../view/addstudent.php?msg=null_gender');
		}else if(empty($depart)){
			header('location: ../view/addstudent.php?msg=null_dept');
		}else if(empty($blood)){
			header('location: ../view/addstudent.php?msg=null_bloodgroup');
		}else if(empty($country)){
			header('location: ../view/addstudent.php?msg=null_nationality');
		}else if(empty($relig)){
			header('location: ../view/addstudent.php?msg=null_religion');
		}else if(empty($image)){
			header('location: ../view/addstudent.php?msg=null_picture');
		}else{
			include "../db/database.php";
			//echo $database;
			$query = mysqli_query($conn,"insert into add_student values ('$sid','$sname','$f_name','$m_name','$dob','$contact','$email','$gender','$depart','$blood','$country','$relig','$image')");

			 echo "submitting done!!";
		}

	}

?>
