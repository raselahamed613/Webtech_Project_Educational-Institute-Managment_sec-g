<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/addstudent.css">

</head>
<body>
	<?php
				require('../php/addstudent.php');
	?>
	<div class="main">
	<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate()"  method="POST">
	<div class="regform"><h1><b>ADD STUDENTS</h1></div>
				
					
					<table>
						<tr>
							<td>Student ID: </td>
							<td> <input class="text-box" type="text" name="id" id="id" placeholder="Student Id">
		                    </td>
						</tr>
						<tr>
		                    <td>Student Name: </td>
		                    <td> <input type="text"  name="studentname" id="studentname" placeholder="Student Name">

		                    </td>
               		    </tr>
               		    <tr>
		                    <td>Father Name: </td>
		                    <td> <input type="text" name="fathername" id="fathername"   placeholder="Father Name">

		                    </td>
               		    </tr>
               		    <tr>
		                    <td>Mother Name: </td>
		                    <td> <input type="text" name="mothername" id="mothername" placeholder="Mother Name" >

		                    </td>
               		    </tr>
               		    <tr>
		                    <td>Date Of Birth: </td>
		                    <td><input type="date" name="dob" id="dob" placeholder="Date of birth" >

		                    </td>
                		</tr>
                		<tr>
		                    <td>Contact Number: </td>
		                    <td> <input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" >

		                    </td>
               		    </tr>
               		    <tr>
		                    <td>Email: </td>
		                    <td><input type="email" name="email" id="email" placeholder="Email">

		                    </td>
		                </tr>
		                 <tr>
		                    <td class="g" colspan="2">
		                        <fieldset>
		                            <legend>Gender</legend>
		                            <input type="radio" name="gender" id="" value="Male">Male
		                            <input type="radio" name="gender" id="" value="Female">Female
		                            <input type="radio" name="gender" id="" value="Other">Other
		                        </fieldset>

                    		</td>
                		</tr>
                		<tr>
		                    <td colspan="2">
		                        <fieldset>
		                            <legend>Department</legend>
		                            <input type="radio" name="dept" id="" value="EEE">EEE
		                            <input type="radio" name="dept" id="" value="COE">COE
		                            <input type="radio" name="dept" id="" value="CSE">CSE
		                            <input type="radio" name="dept" id="" value="SE">SE
		                            <input type="radio" name="dept" id="" value="CIS">CIS
		                            <input type="radio" name="dept" id="" value="BBA">BBA
		                        </fieldset>

                    		</td>
                		</tr>
                		<tr>
		                    <td colspan="2">
		                        <fieldset>
		                            <legend>Blood Group</legend>
		                            <input type="radio" name="blood" id="" value="ops">O+
		                            <input type="radio" name="blood" id="" value="oneg">O-
		                            <input type="radio" name="blood" id="" value="Bpos">B+
		                            <input type="radio" name="blood" id="" value="b-">B-
		                            <input type="radio" name="blood" id="" value="ab+">AB+
		                            <input type="radio" name="blood" id="" value="ab-">AB-
		                        </fieldset>

                    		</td>
                		</tr>
		                <tr>
							<td>Nationality: </td>
							<td> <input type="text" name="nationality" id="nationality" placeholder="Nationality" >

		                    </td>
						</tr>
						<tr>
							<td>Religion: </td>
							<td> <input type="text" name="religion" id="religion" placeholder="Religion">

		                    </td>
						</tr>
                		<tr>
          				  <td>Picture: </td>
          				  <td><input type="file" name="picture" id="picture" placeholder="Picture">

	            		  </td>
                		</tr>
               		    <tr>
		               		<td colspan="2">
		                       <input class="input" type="submit" name="submit" value="submit">
		                       <button  type="reset">Reset</button>
		                    </td>
               		    </tr>
		               
					</table>
					<label id="message"></label><br/><br/>
					<a href="teacher.html">Home page</a>
</form>
</div>
	<script src="../js/addstudent.js"></script>
</body>
</html>
