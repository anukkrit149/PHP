<?php

/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 02-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */

require "connection.php";

$pid =  $_SESSION['itemID'];



foreach ($_FILES['files']['name'] as $key=>$val){
    //var_dump($_FILES['files']['name']);



    $path="uploads/".$pid;
    $ext = end((explode(".", $val)));
    if(!is_dir($path))
        mkdir($path);
    $time=time();
    $target=$path."/".$time.".".$ext;
    if (move_uploaded_file($_FILES['files']['tmp_name'][$key],$target)){
        //   echo "file uploaded";
        $stmt=$pdo->prepare("INSERT INTO itempic(itID,path,catid) VALUES(?,?,?);");
        $res=$stmt->execute([$pid,$target,$_SESSION['itemCat']]);
        if ($res)
            echo "<script>console.log('Success')</script>";
        else
            echo "<script>console.log('Failed')</script>";

    }else
        echo "<script>console.log('Failed file')</script>";
}

header('Location:index.php?res=success');

?>