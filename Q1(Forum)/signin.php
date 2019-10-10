<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 14-12-2018
 * Time: 11:11 PM
 */


include 'connect.php';

if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    header('Location:forum/index.php');
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
            header('Location:login.php');
    }
    else
        {

            $sql = "SELECT 
                        user_id,
                        user_name,
                        user_level
                    FROM
                        users
                    WHERE
                        user_name = '" . mysqli_real_escape_string($_POST['user_name']) . "'
                    AND
                        user_pass = '" . $_POST['user_pass'] . "'";

            $result = mysql_query($sql);
            if(!$result)
            {

                echo "<script>alert('Try after sometime')</script>";
                header("Location:frontEnd/index.php");

            }
            else
            {
                if(mysqli_num_rows($result) == 0)
                {
                    echo "<script>alert('Record not found')</script>";
                    header("Location:frontEnd/index.php");
                }
                else
                {
                    $_SESSION['signed_in'] = true;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $_SESSION['user_id']    = $row['user_id'];
                        $_SESSION['user_name']  = $row['user_name'];
                        $_SESSION['user_level'] = $row['user_level'];
                    }

                    header("Location:forum/index.php");
                }
            }
        }
}
?>