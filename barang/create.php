<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//barang
$id_barang = isset($_POST['id_barang']) ? $_POST['id_barang'] : '';
$kode_barang = isset($_POST['kode_barang']) ? $_POST['kode_barang'] : '';
$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$ukuran = isset($_POST['ukuran']) ? $_POST['ukuran'] : '';
$warna = isset($_POST['warna']) ? $_POST['warna'] : '';
$tanggal_masuk = isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$stok = isset($_POST['stok']) ? $_POST['stok'] : '';

/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `barang`(`id_barang`, `kode_barang`, `nama_barang`, `ukuran`, `warna`, `tanggal_masuk`, `harga`, `stok`) VALUES ('$id_barang','$kode_barang','$nama_barang','$ukuran','$warna','$tanggal_masuk','$harga','$stok')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;