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
include 'classes/dbcontroller.php';

$db= new DBController();

$db->connectDB();
$cat=$db->runQuery("SELECT * FROM category");



foreach ($cat as $value)
{
    echo "<script>console.log(".$value['ctID'].")</script>";
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

    <style>
        #newProperty,#propertyTable,#propertyTable > tr{
            width:100% !important;
        }
    </style>


</head>

<body>

<!-- multistep form -->
<form id="itdetails">
    <!-- progressbar -->
    <ul id="progressbar" style="margin-left:180px">
        <li class="active">Add Items</li>
        <li>Add Pictures</li>
        <!-- <li>Personal Details</li> -->
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Add Your Items</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        <input type="text" name="itemName" placeholder="Item Name" />

        <table id="propertyTable"><tr>
                <td>   <input type="text" name="descProp" placeholder="Property Name" /></td>
                <td>   <input type="text" name="descVal" placeholder="Property Value" /></td>
            </tr>
        </table>


        <input type="button" class="action-button" id="newProperty" value="Add New Property">
        <select name="Category" id="cat">
            <?php

            foreach ($cat as $value)
            {
                echo "<option value=".$value['ctID'].">".$value['ctName']."</option>";
            }

            ?>
        </select>


        <select name="subCategory" id="sub">

        </select>
        <select name="subsubCategory" id="subsub">

        </select>
        <input type="number" name="price" min="0" placeholder="Price" />

        <input type="submit" name="it-submit" class="next action-button" value="Next" />
    </fieldset>
</form>
<fieldset>
    <h2 class="fs-title">Add Pictures</h2>






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






    <!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
    <input type="button" name="submit" class="submit action-button" value="Upload" />

</fieldset>
<!--</form>-->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



<script  src="js/script.js"></script>
<script  src="js/script1.js"></script>
<script>

    nextProp = 1;

    $('#newProperty').bind('click', function() {
        // noinspection JSAnnotator
        $("#propertyTable").append(`<tr><td><input type="text" name="descProp`+nextProp+`" placeholder="Property Name" /></td><td>   <input type="text" name="descProp`+nextProp+`" placeholder="Property Value" /></td></tr>`)
        nextProp++;

    });

    $("#cat").on('change',
        function(){
            console.log($('#cat').val());
            $.ajax({
                type: 'POST',
                url: 'catAjax.php',
                data: {
                    category:$('#cat').val()
                },
                // dataType: 'json',
                success: function (data) {
                    console.log(data);
                    data=JSON.parse(data)
                    $('#sub').append(data);
                }
            });



        });

    $("#sub").on('change',
        function(){
            console.log($('#sub').val());
            $.ajax({
                type: 'POST',
                url: 'catAjax.php',
                data: {
                    subcategory:$('#sub').val()
                },
                // dataType: 'json',
                success: function (data) {
                    console.log(data);
                    data=JSON.parse(data)
                    $('#subsub').append(data);
                }
            });


        });

    $('itdetails').submit(
        function(e){
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data)
                {
                    alert(data);
                }
            });

        });




</script>



</body>

</html>


