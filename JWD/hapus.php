<?php
require 'functions.php';

// menggunakan method GET untuk mengambil id yg telah terseleksi oleh user dan dimasukkan
// ke dalam variabel $id
$id=$_GET["id"];

if(hapus($id)>0){
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href='index.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href='index.php';
        </script>
    ";
    echo "<br>";
    echo mysqli_error($conn);
}
?>