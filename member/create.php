<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//barang

$id_member = isset($_POST['id_member']) ? $_POST['id_member'] : '';
$nama_member = isset($_POST['nama_member']) ? $_POST['nama_member'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$tgl_join = isset($_POST['tgl_join']) ? $_POST['tgl_join'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO member (id_member, nama_member, email, tempat_lahir, tanggal_lahir, jenis_kelamin, no_telp, password, tgl_join, username) VALUES ('$id_member', '$nama_member', '$email', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$no_telp', '$password', '$tgl_join', '$username')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;