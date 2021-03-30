<?php
  include("koneksi.php");

  // mengecek apakah tombol tambah sudah diklik?
  if (isset($_POST['tambah'])) {
  // ambil data dari halaman index
    $id          = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan  = $_POST['keterangan'];
    $harga       = $_POST['harga'];
    $jumlah      = $_POST['jumlah'];

    // buat query
    $sql = "INSERT INTO produk (id,nama_produk,keterangan,harga,jumlah) VALUE ('$id','$nama_produk','$keterangan','$harga','$jumlah')";

    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if ($query) {
      header('location:index.php?status=sukses');
    }else{
      header('location:index.php?status=gagal');
    }
  }else{
    die("Akses dilarang");
  }
?>