<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 15-12-2018
 * Time: 10:52 PM
 */

$server = 'localhost:3306';
$username   = 'root';
$password   = '1234';
$database   = 'admin_panel';
session_start();
$res=mysqli_connect($server,$username,$password,$database) or die("Connection failed");