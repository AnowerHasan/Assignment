<?php include 'header.php'; ?>
<tr align="">
<div>

	<td border="0" colspan="2">
	<fieldset>
		<legend>Login</legend>
		<form action = "loginconfirm.php" method="post">
			User Name:<input type="text" name="username"><br><br>
			Password: <input type="password" name="password">
				<label>
					<?php if( !empty( $_REQUEST['Message'] ) )
						{$msg = $_GET['Message'];
				  		echo "$msg";}
				    ?>		    	
				</label><br><hr>
					  <input type="checkbox" name="checkbox">Remember Me<br><br>
					  <input type="submit" name="submit">
					  <span class="password"><a href="#">Forgot Password?</a></span>
		</form>
	</fieldset>
	</td>

</div>
</tr>
<?php include 'footer.php';?>