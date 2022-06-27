<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_barang = $_POST['id_barang'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM barang WHERE `id_barang`= '$id_barang'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;