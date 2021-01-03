<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/viewall_result.css">
</head>
<body>
	<center>
		<div class="regform">
<form method="POST" action="">
	
					<div class="regform"><h1><b>Show All Results</h1></div>
						<br>
						<table border="solid white 1px">
							<tr>
								<th>semester</th>
								<th>studentId</th>
								<th>SubjectName</th>
								<th>Marks</th>
							</tr>
							<?php 
							 $obj=loadProfile();
							if($obj!=null){

									while($row = $obj->fetch_assoc()) {
												echo "<tr>";
        							echo "<td>".$row["semester"]."</td>";
        							echo "<td>".$row["studentId"]."</td>";
        							echo "<td>".$row["SubjectName"]."</td>";
        							echo "<td>".$row["Marks"]."</td>";
                                         echo "</tr>";
                                                }
							}
								
							


							?>
						
						</table>
												<a href="../view/teacher.html">Home page</a>
						<a href="../view/published_result.php">Back</a>
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
       
            $sql = "SELECT * FROM upresults ";
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
