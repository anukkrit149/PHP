<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 15-12-2018
 * Time: 10:53 PM
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "INSERT INTO replies(replies, username,'when')
       VALUES(mysqli_real_escape_string(".$_POST['reply']."),".$_SESSION['user_name'].",now())";
    $result=mysqli_query($sql);
    if ($result)
        echo "";
    else
        echo "";
}