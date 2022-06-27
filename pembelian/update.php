<?php
require_once '../koneksi.php';

$id_invoice = $_POST['id_invoice'];
$id_member = $_POST['id_member'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE pembelian SET id_member = '$id_member', kode_barang = '$kode_barang',nama_barang = '$nama_barang', tanggal_transaksi_masuk = '$tanggal_transaksi_masuk', harga = '$harga', jumlah = '$jumlah' WHERE `id_invoice`= '$id_invoice'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;