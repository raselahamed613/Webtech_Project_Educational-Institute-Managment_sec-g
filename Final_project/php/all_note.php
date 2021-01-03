<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/allnote_notice.css">
</head>
<body>
	<center>
		<div class="regform">
<form method="POST" action="">
	
					<div class="regform"><h1><b>View All Notes</h1></div>
						<br>
						<table border="solid white 1px">
							<tr>
								<th>serial</th>
								<th>filename</th>
								
							</tr>
							<?php 
							 $obj=loadProfile();
							if($obj!=null){

									while($row = $obj->fetch_assoc()) {
												echo "<tr>";
        							echo "<td>".$row["serial"]."</td>";
        							echo "<td>".$row["filename"]."</td>";
        							
                                         echo "</tr>";
                                                }
							}
								
							


							?>
						
						</table>
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
       
            $sql = "SELECT * FROM upnote ";
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