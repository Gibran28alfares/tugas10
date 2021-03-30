<?php 
  include("koneksi.php");

  ?>
<html>
<head>
  <title>Crud Sederhana</title>
</head>
<body>
  <form action="proses-tambah.php" method="POST">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" id="nama_produk" name="nama_produk">
    <label for="keterangan">Keterangan</label>
    <input type="text" id="keterangan" name="keterangan">
    <label for="harga">Harga</label>
    <input type="number" id="harga" name="harga">
    <label for="jumlah">Jumlah</label>
    <input type="number" id="jumlah" name="jumlah">

    <button type="submit" name="tambah">Tambah</button>
  </form>

    <table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama Produk</th>
          <th>Keterangan</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // perulangan untuk menampilkan data
          $sql = "SELECT * FROM produk";
          $query = mysqli_query($db, $sql);
          while($produk = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$produk['id']."</td>";
            echo "<td>".$produk['nama_produk']."</td>";
            echo "<td>".$produk['keterangan']."</td>";
            echo "<td>".$produk['harga']."</td>";
            echo "<td>".$produk['jumlah']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$produk['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$produk['id']."' onclick=' return myFunction()'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>

<script>
  myFunction = () => {

    return confirm("apakah yakin ingin menghapusnya?");
  }
</script>
</body>
</html>