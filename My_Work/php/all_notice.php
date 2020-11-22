<center>
<form method="POST" action="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h2><b>View All Notice</h2></legend>
					<?php
						$myfile = fopen("upload_notice.txt", "r") or die("Unable to open file!");
					
						?>	
						<table>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>
						<tr>
							<td><?php
								echo fgets($myfile);
							?></td>
						</tr>

					</table>
							<?php fclose($myfile);?>		
										
					<br>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>