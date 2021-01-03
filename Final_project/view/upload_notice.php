<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/upnotice.css">
</head>
<body>
	<center>
		<?php
				require('../php/upnotice.php');
	?>
<div class="main">
	<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate()"  method="POST">

					<div class="form"><h2><b>Upload Notice</h2></div>
					<br/>
					<textarea id="text" name="notice" rows="10" cols="30" ></textarea>
				    <br><br>
				    <label id="message"></label><br/>
					<input type="submit" name="submit" value="Upload">
					<a class="hpage" href="teacher.html">Home page</a>
					<br>
					<br>
</form>
</div>
</center>
<script src="../js/upnotice.js"></script>
</body>
</html>