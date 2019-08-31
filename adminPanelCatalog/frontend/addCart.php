<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 05-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */

session_start();
require_once("classes/dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "add":
            if(!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM item WHERE itID='" . $_GET["itemID"] . "'");
                $itemArray = array($productByCode[0]["itID"]=>array('name'=>$productByCode[0]["itName"], 'cat'=>$productByCode[0]["itCat"],  'price'=>$productByCode[0]["itPrice"]));

                if(!empty($_SESSION["cart_item"])) {
                    if(in_array($productByCode[0]["itID"],array_keys($_SESSION["cart_item"]))) {
                        foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productByCode[0]["itID"] == $k) {
                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if(!empty($_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}

?>



