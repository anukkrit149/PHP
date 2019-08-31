<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 05-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */

include 'classes/dbcontroller.php';
include 'classes/auth.php';
include 'connection.php';




   if (isset($_POST)){

       $userOB=new auth($_POST['username'],crypt($_POST['pass'],"WKSalt"),$pdo);

       $userOB->setEmail($_POST['email']);
       $userOB->setPhno($_POST['phno']);

       $res=$userOB->createUser();

       if ($res)
           header('Location:index.php?res=1');
       else
           header('Location:index.php?res=-1');
   }


?>


<html>

<head>

    <title>Wise Kreator</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <link rel="stylesheet" href="css/main.css">




</head>
<body>
<div class="wrapper">
    <div id="formContent">


        <!-- Icon -->
        <div class="logo">
            <img src="image/logoF.png" id="icon" alt="Login" />
        </div>

        <form onsubmit="return myFunction()" method="post" >
            <input type="text" id="login" class="second" name="username" placeholder="username" required>
            <input type="email" id="login" class="second" name="email" placeholder="email-id" required>
            <input type="password" id="password" class="second" name="password" placeholder="Password" minlength="6" title="A password contains at least six characters" required>
            <input type="password" id="confirm_password" class="second" name="confrim_password" placeholder="Confrim Password" required>
            <input type="text" id="phone_no" class="second" name="phno" placeholder="Phone No." required>
            <input type="submit" class="fourth" name="register" id="register" value="Rigister">
            <br>
            <a href="index.php">Back</a>
        </form>



    </div>
</div>
<script>

    //form validation

    function myFunction() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("confirm_password").value;

        if (pass1 != pass2) {
            alert("Passwords Do not match");
            document.getElementById("password").style.borderColor = "#E34234";
            document.getElementById("confirm_password").style.borderColor = "#E34234";
            return false;
        }
        else {
            return true;
        }

    }

</script>
<script>
    //ajax request to submit data

    $(document).ready(
        function () {
            //process the form

            $('form').submit(
                function (event) {

                    var formData = {
                        'username' : $('input[name=username]').val(),
                        'email' : $('input[name=email]').val(),
                        'pass' : $('input[name=password]').val(),
                        'pnno' : $('input[name=phno]').val()
                    }

                    $.ajax({

                        type:'POST',
                        url:'addUser.php',
                        data:formData,
                        dataType:'json',
                                encode:true
                    })

                        .done(function (data) {
                            console.log(data)
                            
                        })

                    event.preventDefault();
                    
                }
            )


            
        }
    )




</script>

</body>



</html>
