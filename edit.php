<?php
  include("koneksi.php");

  if (!isset($_GET['id'])) {
    header('location:index.php');
  }

  $id = $_GET['id'];
  $sql = "SELECT * FROM produk WHERE id=$id";
  $query = mysqli_query($db, $sql);
  $produk = mysqli_fetch_assoc($query);

  if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan");
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
  </head>
  <body>
  <form action="proses-edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $produk['id'];?>" />
    <label for="nama_produk">Nama Produk</label>
    <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $produk['nama_produk'];?>"> 
    <label for="keterangan">Keterangan</label>
    <input type="text" id="keterangan" name="keterangan" value="<?php echo $produk['keterangan'];?>">
    <label for="harga">Harga</label>
    <input type="number" id="harga" name="harga" value="<?php echo $produk['harga'];?>">
    <label for="jumlah">Jumlah</label>
    <input type="number" id="jumlah" name="jumlah" value="<?php echo $produk['jumlah'];?>">

    <button type="submit" name="edit">Edit</button>
  </form>
  </body>
  </html>