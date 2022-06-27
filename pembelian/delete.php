<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_pembelian = $_POST['id_pembelian'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM pembelian WHERE `id_pembelian`= '$id_pembelian'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;