<?php
 if (isset($_GET['id'])){
    //var_dump($_POST);
  $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // Cek konseksi
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo 'koneksi berhasil';
    }

    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    if (mysqli_query($con, $sql)) {
        echo "Data baru berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}
?>