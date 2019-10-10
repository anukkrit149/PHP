<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 14-12-2018
 * Time: 10:46 PM
 */

$server = 'localhost:3306';
$username   = 'root';
$password   = '1234';
$database   = 'olcademy';
session_start();
$res=mysqli_connect($server,$username,$password,$database) or die("Connection failed");
//var_dump($res);
?>