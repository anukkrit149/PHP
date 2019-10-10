<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 15-12-2018
 * Time: 11:00 PM
 */

include '../connect.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo /** @lang HTML form for input team data
     *** input data - team name & work  */
    "";
}
else
{
    //the form has been posted, so save it
    $sql_create_team = /** @lang creating table for a team */
        "CREATE TABLE ".$_POST['team_name']."_team
(
    mem_name VARCHAR(60) NOT NULL,
    mem_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    position VARCHAR(20) NOT NULL,
    address VARCHAR(100) NOT NULL
);
CREATE UNIQUE INDEX team_mem_name_uindex ON team (mem_name);";

    $result = mysqli_query($sql);

    if(!$result)
        echo "<script>alert(". mysqli_error().")</script>";
    else
        echo '<script>alert("Team created")</script>';

    $sql_insert_team_info="INSERT 
    company(team_id, team_name, team_description) 
    VALUES (".$_POST['team_name'].",".$_POST['team_des'].")";

    mysqli_query($sql_insert_team_info);

    header("Location:admin_page.php");
}

