<?php include 'headeraslogin.php';?>
<?php include 'middlebar.php';?>
<td>
    <table align="center">
        <tr>
            <div>
                <td border="0" colspan="2">
                    <fieldset>
                        <legend>Edit Profile</legend>
                        <form action="editprofileconfirm.php" method="post">
                        Name:<input type="text" name="name" value="<?php echo                           $_SESSION['name'] ?>">
                        <br><br>
                        Email:
                        <input type="email" name="email" value="
                        <?php echo $_SESSION['email']; ?>">
                        <br><br>
                        <?php
                        if($_SESSION['gender']=='Male')
                        {
                        echo'Gender: <input type="radio" name="gender"                                 value="Male" checked="checked">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other';
                        }
                        if($_SESSION['gender']=='Female')
                        {
                        echo'Gender: <input type="radio" name="gender"                                 value="Male">Male
                        <input type="radio" name="gender" value="Female"                                checked="checked">Female
                        <input type="radio" name="gender" value="Other">Other';
                        }
                        if($_SESSION['gender']=='Other')
                        {
                        echo'Gender: <input type="radio" name="gender"                                 value="Male" >Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other"                                checked="checked">Other';
                        }
                        ?>
                        <br><br>
                        Date Of Birth:
                        <input type="date" name="date" value="<?php echo                           $_SESSION['date'] ?>">
                        <br><br>
                        <input type="submit" name="submit">
                        </form>
                    </fieldset>
                </td>

            </div>
        </tr>

        </td>
        </tr>
    </table>
<?php include 'footer.php';?>
