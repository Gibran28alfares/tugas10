<?php
include("koneksi.php");
  if (isset($_POST['edit'])) {
    $id          = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan  = $_POST['keterangan'];
    $harga       = $_POST['harga'];
    $jumlah      = $_POST['jumlah'];

    $sql = "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id=$id";
    $query = mysqli_query($db,$sql);
    if ($query) {
      header('location:index.php');
    }else{
      die("gagal menyimpan perubahan");
    }
  }else {
    die("akses dilarang");
  }
?>