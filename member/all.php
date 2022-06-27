<?php
include_once '../koneksi.php';
/** 
 * @var $connection PDO
 */
$query = "select * from member";

$statement = $connection->query($query);
$statement->setfetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();
header('Content-Type: application/json');
echo json_encode($result);
?>