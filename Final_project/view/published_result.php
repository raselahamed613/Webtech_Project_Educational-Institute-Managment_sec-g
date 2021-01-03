<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/pubresult.css">
</head>
<body>
	<?php
				require('../php/pubresult.php');
	?>
	<div class="main">
	<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate()"  method="POST">
					
					<div class="regform"><h1>Published Results</h1></div>
					<table>
						<br/><br/>
						<tr>
							<td>Semester:</td>
							<td><input type="text" name="semester" id="semester" placeholder="Semester" ></td>
						</tr>
						<tr>
							<td>Student ID:</td>
							<td><input type="text" name="student_id" id="student_id" placeholder="Student Id" ></td>

						</tr>
						<tr>
							<td>Subject Name:</td>
							<td><input type="text" name="subject_name" id="subject_name" placeholder="Subject Name"></td>
						</tr>
						<tr>
							<td>Student Marks:</td>
							<td><input type="text" name="marks" id="marks" placeholder="Student Marks" ></td>
						</tr>
						
					</table>
					<br/>
					<label id="message"></label>

					<br/>
					
					<input class="input" type="submit" name="submit" value="Upload">
					</br></br>
				
					<a href="../php/viewallresult.php">View All Result</a>
					<a href="teacher.html">Home page</a>
					<br/><br/><br/>
					</div>

				


</form>
		<script src="../js/pubresult.js"></script>
</body>
</html>
