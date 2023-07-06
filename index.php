<!DOCTYPE html>
<html lang="en">
<head>
   <title>Membuat CRUD Dengan PHP dan Mysql - menampilkan data dari database</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP Dan MYSQL</h1>
        <h2>menampilkan data dari database</h2>
</div>
<br/>
<?php
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "data berhasil di input.";
    }else if($pesan =="update"){
        echo "data berhasil di update.";
    }else if($pesan=="hapus"){
        echo "data berhasil di hapus.";
    }
}
?>
<br/>
<a class="tombol" href="from_input.php">+ tambah data baru</a>
<h3>Data barang<h/3>
<table border="1" class="table">
    <tr>
        <th>no</th>
        
    
</body>
</html>