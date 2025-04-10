<?php 

$id=$_GET['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM jenis WHERE 
id_jenis='$id'");

if($query){
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}