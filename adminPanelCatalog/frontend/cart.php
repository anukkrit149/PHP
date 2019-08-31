<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 24-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */


include "admin/connection.php";
include 'dbcontroller.php';

$db_handle=new DBController();
$db_handle->connectDB();


if (isset($_POST)) {

    $itemid = $_POST['pid'];
    $action = $_POST['action'];
    $cartitems=$_POST['cartitems'];

    switch ($action) {

        case "add":
            $productByCode = $db_handle->runQuery("SELECT * FROM item WHERE itID='" . $itemid . "'");
            $itemArray = array($productByCode[0]["itID"] => array('name' => $productByCode[0]["itName"], 'cat' => $productByCode[0]["itCat"], 'price' => $productByCode[0]["itPrice"],'quantity'=> 1));
            if (!empty($_SESSION["cart_item"])) {
                // var_dump($itemArray);
                // exit();

                if (in_array($productByCode[0]["itID"], array_keys($_SESSION["cart_item"]))) {

                    foreach ($_SESSION["cart_item"] as $k => $v) {

                        if ($productByCode[0]["itID"] == $k) {

                            // if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                            //     $_SESSION["cart_item"][$k]["quantity"] = 1;
                            // }

                            $_SESSION["cart_item"][$k]["quantity"] += 1;
                            // $_SESSION['totalitems']+=$_SESSION["cart_item"][$k]["quantity"];
                        }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
            // var_dump($_SESSION);

            $_SESSION['totalitems']=$cartitems+1;

            // echo json_encode($_SESSION);
            break;


        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($itemid == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            $_SESSION['totalitems']=$cartitems-1;
            // echo json_encode($_SESSION);
            break;


        case "empty":
            unset($_SESSION["cart_item"]);
            $_SESSION['totalitems']=0;
            // echo json_encode($_SESSION);
            break;
    }

    echo json_encode($_SESSION);

}

?>