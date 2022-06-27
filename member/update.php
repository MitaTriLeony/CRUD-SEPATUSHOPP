<?php
require_once '../koneksi.php';

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
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE anggota SET nama_member = '$nama_member', email = '$email',tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', no_telp = '$no_telp', password = '$password', tgl_join = '$tgl_join', username = '$username' WHERE `id_member`= '$id_member'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;