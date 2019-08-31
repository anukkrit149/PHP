<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 09-08-2019
 * Summary-
 * API Used-
 * Limitations-
 */


include 'connection.php';

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];

    $_FILES['files']['name'];

    $path="uploads/".$name;
    $ext = end((explode(".", $val)));
    if(!is_dir($path))
        mkdir($path);
    $time=time();
    $target=$path."/".$time.".".$ext;
    if (move_uploaded_file($_FILES['files']['tmp_name'],$target)){
        $stmt=$pdo->prepare("INSERT INTO wkevent(wkname,email,target) VALUES(?,?,?);");
        $res=$stmt->execute([$name,$email,$target]);
        if ($res)
            echo "<script>console.log('Success')</script>";
        else
            echo "<script>console.log('Failed')</script>";

    }else
        echo "<script>console.log('Failed file')</script>";

}



?>