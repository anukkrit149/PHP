<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 15-12-2018
 * Time: 11:30 PM
 */

include '../connect.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo /** @lang HTML form for input team member
     *** input data - member name & work  */
    "<input type='file' name='fileToUpload' id='fileToUpload'>";


}
else
    {   $pp=$_FILES['pp'];
        $sql_insert_team_info="INSERT 
    ".$_POST['team_name']."_team(mem_name,position,address) 
    VALUES (".$_POST['mem_name'].",".$_POST['position'].", ".$_POST['address'].")";

        $result=mysqli_query($sql_insert_team_info);

        if(!$result)
            echo "<script>alert(". mysqli_error().")</script>";
        else
            echo '<script>alert("Team member added")</script>';

        header("Location:add_mem_team.php");
    }

