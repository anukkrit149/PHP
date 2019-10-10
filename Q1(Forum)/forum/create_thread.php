<?php
/**
// * Created by PhpStorm.
// * User: Anukkrit
// * Date: 14-12-2018
// * Time: 10:45 PM
// */

include '../connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sql = "INSERT INTO threads(thread_name, thread, thread_date, thread_by, thread_cat)
       VALUES(mysqli_real_escape_string(".$_POST['thread_name']."),".$_POST['thread'].",now(),".$_SESSION['user_name'].",".$_POST['cat'].")";

    $result = mysqli_query($sql);
    if(!$result)
        echo 'Error' . mysqli_error();
    else
        echo '<script>alert("thread created")</script>';
}


?>

