<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 27-06-2019
 * Summary-
 * API Used-
 * Limitations-
 */

session_start();
require 'classes/auth.php';
require 'connection.php';


if(isset($_POST['login-submit'])){

    $userOB = new auth($_POST['username'],crypt($_POST['pass'],"WKSalt"),$pdo);

    if ($userOB->login()){

        $_SESSION['user']=$userOB->getDetails();

        header("Location:index.php");
    }
    else
        header("Location:login.php?error=1");

}else{
//    $error=$_GET['error'];

    function errorFunc($e)
    {
        $msg="<div></div>";
        if ($e){
         $msg="<div class=\"alert alert-danger\">
                  <strong>Opps!</strong>Invalid Credentials</div>";
         return $msg;
    }
    return $msg;
    }


//    if ($error)


}
?>

<html>

<head>

<title>Wise Kreator</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link rel="stylesheet" href="css/main.css">




</head>
<body>
<div class="wrapper">
  <div id="formContent">


    <!-- Icon -->
    <div class="logo">
      <img src="img/logoF.png" id="icon" alt="Login" />
    </div>

    <!-- Login Form -->
    <form method="post">
        <?php echo errorFunc($_GET['error']);?>
      <input type="text" id="login" class="second" name="username" placeholder="login">
      <input type="password" id="password" class="second" name="password" placeholder="password">
      <input type="submit" class="fourth" name="login-submit" value="submit">
    </form>





  </div>
</div>

</body>
</html>