<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 27-06-2019
 * Summary-
 * API Used-
 * Limitations-
 */

session_start();
$host="localhost";
$db="gfiahtrm_wisekreator";
$user="gfiahtrm_wisekreator";
$pass="wiseKreator149";

$dsn = "mysql:host=$host;dbname=$db;";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

