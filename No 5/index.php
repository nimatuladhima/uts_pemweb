<!DOCTYPE html>
<html>

<head>
    <title>Soal 5 UTS</title>
</head>

<body>

    <style type="text/css">
    body {
        font-family: sans-serif;
        text-align: center;
        font-size: 12px;
    }

    p {
        color: green;
    }
    </style>

    <h2>Ni'matul 'Adhima' <br>20050974016</h2>

    <a href="upload.php">IMPORT FILE EXCEL</a>

    <?php
		if(isset($_GET['berhasil'])){
			echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
		}

	?>

    <br><br>
    <table border="1" align="center" width="500">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jk</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Email</th>
        </tr>
        <?php
			include "koneksi.php";
			$no = 1;
			$tampil = mysqli_query($koneksi, "SELECT * from tmahasiswa");
			while($data = mysqli_fetch_array($tampil)) :

		?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$data['Nim']?></td>
            <td><?=$data['Nama']?></td>
            <td><?=$data['Jk']?></td>
            <td><?=$data['Prodi']?></td>
            <td><?=$data['Alamat']?></td>
            <td><?=$data['Kota']?></td>
            <td><?=$data['Email']?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>