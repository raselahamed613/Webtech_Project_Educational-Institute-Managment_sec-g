<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/upnote.css">
</head>
<body>
	<center>
	<?php
				require('../php/upnote.php');
	?>
	<div class="main">
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate()"  method="POST">
	
					<div class="form"><h1><b>Upload Note</h1></div>
						<br/>
					
					<div class="text">Choose File: <input type="file" name="file" id="file"></div>
				    <br>
				    <label id="message"></label>
				    <br/>
				    <input  type="submit" name="submit" value="Upload">

					<a class="hpage" href="teacher.html">Home page</a>
					<br>
					<br>
				
</form>
	</div>
	
</center>
<script src="../js/upnote.js"></script>
</body>
</html>