<?php include 'header.php';?>
<tr align="">
<div>

	<td border="0" colspan="2">

	<fieldset>
		<legend>REGISTRATION</legend>
		<form action="registrationconfirm.php" method="post">
		Name: <input type="text" name="name" required><br><br><HR>
		Email: <input type="email" name="email" required><img src="im.jpg"></br><br><hr>
		User Name:<input type="text" name="username" required><br><br>
		Password: <input type="Password" name="password" required><br><hr>
		Confirm password :<input type="password" name="confirmPassword" required>
			<label>
				<?php if( !empty( $_REQUEST['Message'] ) )
					{$msg = $_GET['Message'];
			  		echo "$msg";}
			    ?>		    	
			</label><br><br><hr>
			<fieldset>
			<legend>Gender:</legend>
						<input type="radio" name="gender" value="Male" checked="checked">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="Other">Other
	       </fieldset><hr>

	       <fieldset>
			<legend>Date Of Birth</legend>
			<input type="Date" name="date" required>
					<!-- Day
					<input name = "Day"/>/
					mm 
					<input name = "Month"/>/
					yyyy 
					<input name = "Year"/> -->
		</fieldset><hr>

		  <input type="submit" name="submit">
		
		</form>
	</fieldset>
	</td>

</div>
			</tr>
			<?php
				include 'footer.php';
			?>
