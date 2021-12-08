<?php 
// koneksi ke databse dan pilih Database
$conn = mysqli_connect('localhost','root','','pw_08567893219');
// Query isi tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// Untuk melihat isi $result
// var_dump($result);

// ubah data ke dalam array
$row = mysqli_fetch_row($result); //array numerik
var_dump($row);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/addy.jpg" width="60"></td>
      <td>08567893219</td>
      <td>Addy Juniaddy</td>
      <td>addy.juniaddy@gmail.com</td>
      <td>Matematika</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus </a> 
      </td>
    </tr>
  </table>
</body>
</html>