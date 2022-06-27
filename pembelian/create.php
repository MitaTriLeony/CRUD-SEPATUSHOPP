<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//pembelian

$id_invoice = isset($_POST['id_invoice']) ? $_POST['id_invoice'] : '';
$id_member = isset($_POST['id_member']) ? $_POST['id_member'] : '';
$kode_barang = isset($_POST['kode_barang']) ? $_POST['kode_barang'] : '';
$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$tgl_transaksi = isset($_POST['tgl_transaksi']) ? $_POST['tgl_transaksi'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';



/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO pembelian (id_invoice, id_member, kode_barang, nama_barang, harga, tgl_transaksi, jumlah) VALUES ('$id_invoice', '$id_member', '$kode_barang', '$nama_barang', '$harga', '$tgl_transaksi', '$jumlah')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;