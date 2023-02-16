<!DOCTYPE html>
<html >
<head>
    <title>Data Investaris Alat Dan Bahan</title>
    <center>
        <h1>Data Investaris Alat Dan Bahan</h1>
        <a href=index.php><input type="button" value="Kembali"></a>
</head>
<body>
  <table border="1">
  <tr>
    <th> No </th>
    <th> Nama </th>
    <th> Jabatan </th>
    <th> Nama Bahan </th>
    <th> Jenis Bahan </th>
    <th> stok </th>
    <th> Harga </th>
    <th> kondisi </th>
    <th> Tanggal Masuk </th>
    <th> Aksi </th>
  </tr>
  <?php
  include "koneksi.php";
 $query = mysqli_query($db, "SELECT * FROM  tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan");

$no=1;
foreach($query as $row):
 ?>

 <tr>
  <td><?= $no++; ?></td>
  <td><?= $row['nama_user']; ?></td> 
  <td><?= $row['jabatan']; ?></td>
  <td><?= $row['nama_bahan']; ?></td>
  <td><?= $row['jenis_bahan']; ?></td>
  <td><?= $row['stok']; ?></td>
  <td><?= $row['harga']; ?></td>
  <td><?= $row['kondisi']; ?></td>
  <td><?= $row['tgl_masuk']; ?></td>
  <td>
      <a href="edit.php?id_user=<?= $row['id_user']; ?>">Edit</a>||
      <a href="hapus.php?id_user=<?= $row['id_user']; ?>">Hapus</a>
  </td>
 </tr>

<?php endforeach; ?>

<a href ="tambah.php"><input type="button" value ="Tambah"></a>

</body>
</center>
</html>