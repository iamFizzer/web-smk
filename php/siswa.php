
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SMK NUSRA</title>
</head>
<body>
    <h1>DATA SISWA SMK NUSRA BANDUNG</h1>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from siswa");
            while($siswa = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $siswa['nama'] ?></td>
                    <td><?php echo $siswa['kelas'] ?></td>
                    <td><?php echo $siswa['alamat'] ?></td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</body>
</html>