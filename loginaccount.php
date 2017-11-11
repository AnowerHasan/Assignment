<?php include 'headeraslogin.php';?>

<?php include 'middlebar.php';?>
		<td>
            Welcome
                <?php
                echo $_SESSION['username'];
                ?>
		</td>
	</tr>

	
<?php include 'footer.php';?>