<?php

//include koneksi database
include('config.php');

//get data dari form
$id = $_POST['id'];
$area =$_POST['area'];
$penilaian =$_POST['penilaian'];
$skor =$_POST['skor'];
// $skor =$_POST['skor'];
$kriteria =$_POST['kriteria'];
$keterangan =$_POST['keterangan'];
$nilai =$_POST['nilai'];
$evidence =$_POST['evidence'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE upapm SET area = '$area', penilaian = '$penilaian', skor = '$skor', kriteria = '$kriteria',keterangan = '$keterangan', nilai = '$nilai', evidence = '$evidence' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>