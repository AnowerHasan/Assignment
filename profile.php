<?php include 'headeraslogin.php';?>

<?php include 'middlebar.php';?>
    <td>
        <table align="center">
        <tr align="">
            <div>
                <td border="0" colspan="2">
                    <fieldset>
                        <legend>Profile</legend>
                        Name:
                        <label><?php $name = $_SESSION['name'];
                            echo "$name";?>
                        </label><br><br>
                        Email:
                        <label><?php $email = $_SESSION['email'];
                            echo "$email";?>
                        </label><br><br>
                        Gender:
                        <label><?php $gender = $_SESSION['gender'];
                            echo "$gender";?>
                        </label><br><br>
                        Date Of Birth:
                        <label><?php $date = $_SESSION['date'];
                            echo "$date";?>
                        </label><br><br>
                        <a href="#">Edit Profile</a>
                    </fieldset>
                </td>

            </div>
        </tr>

    </td>
    </tr>
        </table>
<?php include 'footer.php';?>