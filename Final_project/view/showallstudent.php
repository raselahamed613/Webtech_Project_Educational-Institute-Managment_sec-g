<!DOCTYPE html>
<html>
<head>
	<title>all student</title>
	<link rel="stylesheet" type="text/css" href="../css/showallstudent.css">
</head>
<body>
	<center>
<div class="regform">
<form method="POST" action="">
	
					<div class="regform"><h1><b>Show All Results</h1></div>
						<br>
						<table border="solid white 1px">
							<tr>
								
								<th>studentId</th>
								<th>Student Name</th>
								<th>Father Name</th>
								<th>Mother name</th>
								<th>DOB</th>
								<th>Contact</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Department</th>
								<th>BloodGroup</th>
								<th>Nationality</th>
								<th>Relation</th>
								<th>Picture</th>
							</tr>
							<?php 
							 $obj=loadProfile();
							if($obj!=null){

									while($row = $obj->fetch_assoc()) {
												echo "<tr>";
									//echo "<td>".$row[""]."</td>";
        							echo "<td>".$row["StudentId"]."</td>";
        							echo "<td>".$row["StudentName"]."</td>";
        							echo "<td>".$row["FatherName"]."</td>";
        							echo "<td>".$row["MotherName"]."</td>";
        							echo "<td>".$row["DateofBirth"]."</td>";
        							echo "<td>".$row["ContactNumber"]."</td>";
        							echo "<td>".$row["Email"]."</td>";
        							echo "<td>".$row["Gender"]."</td>";
        							echo "<td>".$row["Department"]."</td>";
        							echo "<td>".$row["BloodGroup"]."</td>";
        							echo "<td>".$row["Nationality"]."</td>";
        							echo "<td>".$row["Religion"]."</td>";
        							echo "<td>".$row["Picture"]."</td>";
        							
                                         echo "</tr>";
                                                }
							}
								
							


							?>
						
						</table>
						<br/>
						<a href="../view/teacher.html">Home page</a>
						
													<?php
													 $obj="";
					function loadProfile(){

							include ("../db/database.php");
							//error_reporting(0);
							//$query = "select * form upresults";
				
							  // Check connection
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
       
            $sql = "SELECT * FROM add_student ";
            $result = $conn->query($sql);
       
            if ($result->num_rows > 0) {
            // output data of each row
                $result->fetch_assoc();
                return $result;
                $conn->close();
               // echo " $sem 
            }

            else {
                echo "0 results";
                $conn->close();
            }
        }
       
           
        	

							
							?>
						
						

							
										
</form>

</center>
</div>
</body>
</html>