<?php


include "admin/connection.php";
include 'dbcontroller.php';

$db_handle=new DBController();
$db_handle->connectDB();


if (isset($_REQUEST)) {
    
    $ajax=$_REQUEST['ajax'];
    $itemid = $_REQUEST['pid'];
    $action = $_REQUEST['action'];
    $cartitems=$_REQUEST['cartitems'];

    switch ($action) {

        case "add":
            $productByCode = $db_handle->runQuery("SELECT * FROM item WHERE itID='" . $itemid . "'");
            $itemArray = array($productByCode[0]["itID"] => array('id' => $productByCode[0]["itID"],'name' => $productByCode[0]["itName"], 'cat' => $productByCode[0]["itCat"], 'price' => $productByCode[0]["itPrice"],'quantity'=> 1));
            if (!empty($_SESSION["cart_item"])) {
                // var_dump($itemArray);
                // exit();

                if (in_array($productByCode[0]["itID"], array_keys($_SESSION["cart_item"]))) {

                    foreach ($_SESSION["cart_item"] as $k => $v) {

                        if ($productByCode[0]["itID"] == $k) {

                            // if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                            //     $_SESSION["cart_item"][$k]["quantity"] = 1;
                            // }
                            $_SESSION['totalprice'] += $productByCode[0]['itPrice'];
                            $_SESSION["cart_item"][$k]["quantity"] += 1;
                            // $_SESSION['totalitems']+=$_SESSION["cart_item"][$k]["quantity"];
                        }
                    }
                } else {
                    $_SESSION["cart_item"] = $_SESSION["cart_item"]+= $itemArray;
                    $_SESSION['totalprice'] += $productByCode[0]['itPrice'];
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
                $_SESSION['totalprice']=$productByCode[0]['itPrice'];
            }
            // var_dump($_SESSION);
            
            $_SESSION['totalitems']=count($_SESSION["cart_item"]);

            // echo json_encode($_SESSION);
            break;


        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($itemid == $k){
                        
                        $_SESSION['totalprice']-=$v['price'];
                        unset($_SESSION["cart_item"][$k]);}
                    if (empty($_SESSION["cart_item"])){
                        
                    $_SESSION['totalprice']=0;
                        unset($_SESSION["cart_item"]);}
                }
            }
            $_SESSION['totalitems']=$cartitems-1;
            // echo json_encode($_SESSION);
            break;


        case "empty":
            unset($_SESSION["cart_item"]);
            $_SESSION['totalitems']=0;
            $_SESSION['totalprice']=0;
            // echo json_encode($_SESSION);
            break;
    }
    if ($ajax)
        {
        echo json_encode($_SESSION);
        }
    else 
        header('Location:cart.php');
}

?>