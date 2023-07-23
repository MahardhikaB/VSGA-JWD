<?php
require 'functions.php';
global $conn;
// cek apakah button submit sudah ditekan atau belum
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href='index.php';
            </script>
        ";
        echo "<br>";
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container py-4 px-5 mt-4 rounded">
    <h1 class="text-center">Tambah Data Mahasiswa</h1>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="Nama">
                    </div>
                    <div class="form-group">
                        <label for="nrp">Nim</label>
                        <input type="text" class="form-control" id="nrp" name="Nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="Jurusan">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary text-center">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>