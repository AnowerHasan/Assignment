<html>
<head>
	<title>publichome</title>
	
</head>
<body>
  
	<div align="center">
		<table border="1" width="800" cellspacing="0">
			<tr>
				<td width="50%" colspan="2">
					<div align="left">XCompany</div>
					<div align="right">
						Login as<a href="#">
							<?php 
							session_start();
							echo $_SESSION['username']; 
							?> 
						</a>|
						<a href="publichome.php">Logout</a>
					</div>
				</td>
			</tr>