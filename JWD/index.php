<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container px-5 pb-5 pt-5 mt-5">
        <h1 class="text-center">Daftar Mahasiswa</h1>
        <table class="table table-striped text-center rounded">
            <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            <?php foreach($mahasiswa as $row) : ?>
            <tr>
                <td class="align-middle"><?= $i; ?></td>
                <td class="align-middle"><?= $row["nama"]; ?></td>
                <td class="align-middle"><?= $row["nim"]; ?></td>
                <td class="align-middle"><?= $row["email"]; ?></td>
                <td class="align-middle"><?= $row["jurusan"]; ?></td>
                <td class="align-middle">
                    <a class="btn btn-primary btn-sm"  href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
                    <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a class="align-middle btn btn-outline-success btn-block text-center" href="tambah_data.php">Tambah Data</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>