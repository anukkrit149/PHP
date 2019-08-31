<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 05-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */

include 'connection.php';
include 'classes/items.php';
include 'classes/dbcontroller.php';

$db= new DBController();

$db->connectDB();
$cat=$db->runQuery("SELECT * FROM category");

foreach ($cat as $value)
{
    echo "<script>console.log(".$value.")</script>";
}


if (isset($_POST['item-submit'])) {

    $itemOB = new items($_POST['itName'], $_POST['itDesc'], $_POST['catID'], $_POST['price']);

    $itemOB->setPdo($pdo);

    $res = $itemOB->addItems();


    if ($res)
        echo "<script>console.log('success')</script>";
    else
        echo "<script>console.log('failed')</script>";
}

?>


<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Add Items</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">




</head>

<body>

<!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar" style="margin-left:180px">
        <li class="active">Add Items</li>
        <li>Drag and Drop</li>
        <!-- <li>Personal Details</li> -->
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Add Your Items</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        <input type="text" name="itemName" placeholder="Item Name" />
        <!-- <textarea name="message" rows="10" cols="30">The cat was playing in the garden.</textarea> -->
        <textarea name="desc" placeholder="Description"></textarea>

        <select name="Category">
            <?php
            foreach ($cat as $value)
            {
                echo "<option value=".$value[0].">".$value[1]."</option>";
            }

            ?>
<!--            <option value="volvo">Category1</option>-->
<!--            <option value="saab">Category2</option>-->
<!--            <option value="fiat">Category3</option>-->
<!--            <option value="audi">Category4</option>-->
        </select>
        <!-- <input type="" name="cat" placeholder="Category" /> -->

        <input type="number" name="price" min="0" placeholder="Price" />

        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Drag And Drop</h2>






        <!-- <form id="dropFileForm" action="http://localhost/upload.php" method="post" onsubmit="uploadFiles(event)"> -->

        <div id="drop-area">
            <form class="my-form">
                <p>Upload files here</p><br>
                <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                <label class="button" for="fileElem">Select some files</label>
            </form>
            <progress id="progress-bar" max=100 value=0></progress>
            <div id="gallery" ></div>
        </div>

</form>



<script  src="./script1.js"></script>




<!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
<input type="submit" name="submit" class="submit action-button" value="Upload" />

</fieldset>

















<!-- ignore below code -->

<!-- <h3 class="fs-subtitle">Your presence on the social network</h3>
<input type="text" name="twitter" placeholder="Twitter" />
<input type="text" name="facebook" placeholder="Facebook" />
<input type="text" name="gplus" placeholder="Google Plus" />
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
<h2 class="fs-title">Personal Details</h2>
<h3 class="fs-subtitle">We will never sell it</h3>
<input type="text" name="fname" placeholder="First Name" />
<input type="text" name="lname" placeholder="Last Name" />
<input type="text" name="phone" placeholder="Phone" />
<textarea name="address" placeholder="Address"></textarea>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset> -->

<!-- till here -->
</form>









<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



<script  src="js/script.js"></script>
<script  src="js/script1.js"></script>




</body>

</html>


