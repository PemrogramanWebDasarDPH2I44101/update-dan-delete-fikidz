<?php
    require_once("db.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>

<html>
    <body>
        <form method="post">
            <table align="center">
                <tr>
                    <td colspan="2" align="center"><h2>Data Diri</h2></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" value="<?php echo $row['nim'] ?>"></td>
                </tr> 
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    if (isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];

        $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', tgl_lahir='$tgl_lahir' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            header("location: list.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>