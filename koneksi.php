<?php
$dbserver = 'localhost';
$dbname = 'uaspweb2022';
$dbuser = 'root';
$dbpassword = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;

try{
    $connection = new PDO ($dsn, $dbuser, $dbpassword);

}catch(Exception $e){
    die("terjadi error: {$e->getMessage()}");
}
?>