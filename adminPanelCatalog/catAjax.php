<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 22-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */

include "classes/dbcontroller.php";

$db= new DBController();
$db->connectDB();

//$_GET['pid']

if (isset($_POST['category'])){

    $id=$_POST['category'];
    $subcat=$db->runQuery("SELECT * FROM subcategory WHERE mcid=".$id);
    $str="";

    foreach ($subcat as $value)
    {
        $str = $str."<option value=".$value['id'].">".$value['cat']."</option>";
    }

    echo json_encode($str);

}

?>