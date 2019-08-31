<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 22-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */


session_start();
include 'connection.php';
include 'classes/items.php';
include 'classes/dbcontroller.php';



if (isset($_POST['it-submit'])) {

    $details=Array($_POST['Prop']=>$_POST['Val']);

    for ($i=0;$i<15;$i++){
      if (empty($_POST['Prop'.$i]))
          break;
      else
          $details['Prop'.$i]=$_POST['Val'.$i];

    }

    $details=json_encode($details);

//    $itemOB = new items($_POST['itName'],$details,$_POST['cat'],$_POST['price']);

//    $itemOB->setPdo($pdo);

//    $res = $itemOB->addItems();

    $query="INSERT INTO items(itName,itDes,itCat,itPrice) VALUES (?,?,?,?);";
    $stmt = $pdo->prepare($query);
    $bool=$stmt->execute([$_POST['itName'],$details,$_POST['cat'],$_POST['price']]);

    $_SESSION['itemID']=$pdo->lastInsertId();
    $_SESSION['itemCat']=$_POST['cat'];


    if ($res)
        echo json_encode("Success");
    else
        echo json_encode("Failed");
}

?>