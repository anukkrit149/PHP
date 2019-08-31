<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 23-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */



include '../classes/items.php';
include '../connection.php';


$id=$_GET['pid'];

$itemob= new items("ex","des","cat",898);

//$itemob->itemID=$id;
$itemob->setPdo($pdo);


$res=json_decode($itemob->getDetailsItemID($id));

var_dump($res);
exit();
?>