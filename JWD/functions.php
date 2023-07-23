<?php
// membuat koneksi
$conn=mysqli_connect("localhost","root","","test");
// cek koneksi jika error
if(!$conn){
    die("Koneksi Error : ".mysqli_connect_errno()." - " .mysqli_connect_error());
}

// ambil data dari tabel mahasiswa/query data mahasiswa
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");

// function query akan menerima isi parameter dari string query yang ada pada index2.php(line 3)

function query($query_kedua){
    // dikarenakan $conn diluar function query maka dibutuhkan scope global $conn
    global $conn;
    $result=mysqli_query($conn,$query_kedua);

    // wadah kosong untuk menampung isi array pada saat looping line 15
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama=htmlspecialchars($data["Nama"]);
    $nim=htmlspecialchars($data["Nim"]);
    $email=htmlspecialchars($data["Email"]);
    $jurusan=htmlspecialchars($data["Jurusan"]);

    // query insert data
    $query="INSERT INTO mahasiswa (nama,nim,email,jurusan)
            VALUES
            ('$nama','$nim','$email','$jurusan')
            ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function ubah($data,$idMahasiswa){
    global $conn;

    $id=$idMahasiswa;
    $nama=htmlspecialchars($data["Nama"]);
    $nim=htmlspecialchars($data["Nim"]);
    $email=htmlspecialchars($data["Email"]);
    $jurusan=htmlspecialchars($data["Jurusan"]);

    // query insert data
    $query="UPDATE mahasiswa SET
            Nama='$nama',
            Nim='$nim',
            Email='$email',
            Jurusan='$jurusan'
            WHERE id=$id
            ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}
?>