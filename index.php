<?php
    require_once("db.php");

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $sql = "INSERT INTO mahasiswa(nim, nama, tgl_lahir) 
            VALUES ('$nim', '$nama', '$tgl_lahir')";

    if (mysqli_query($conn, $sql)) {
        echo "Data Berhasil Ditambahkan";
    }else {
        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
    }

    mysqli_close($conn);
    echo "<br>";
    echo "<a href='list.php'>Lihat Data</a>";
?>
