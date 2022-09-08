<?php

//include koneksi database
include('config.php');

//get data dari form
$area =$_POST['area'];
$penilaian =$_POST['penilaian'];
$skor =$_POST['skor'];
// $skor =$_POST['skor'];
$kriteria =$_POST['kriteria'];
$keterangan =$_POST['keterangan'];
$nilai =$_POST['nilai'];
$evidence =$_POST['evidence'];


//query insert data ke dalam database
$query = "INSERT INTO upapm (area,penilaian,skor,kriteria,keterangan,nilai,evidence) VALUES ('$area', '$penilaian', '$skor', '$kriteria','$keterangan','$nilai','$evidence')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>