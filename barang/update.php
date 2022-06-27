<?php
require_once '../koneksi.php';

$id_barang = isset($_POST['id_barang']) ? $_POST['id_barang'] : '';
$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$ukuran = isset($_POST['ukuran']) ? $_POST['ukuran'] : '';
$warna = isset($_POST['warna']) ? $_POST['warna'] : '';
$tanggal_masuk = isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE barang SET nama_barang = '$nama_barang', ukuran = '$ukuran',warna = '$warna', tanggal_masuk = '$tanggal_masuk', harga = '$harga' WHERE `id_barang`= '$id_barang'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;