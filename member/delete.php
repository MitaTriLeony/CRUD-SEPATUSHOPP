<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_member = $_POST['id_member'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM member WHERE `id_member`= '$id_member'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;