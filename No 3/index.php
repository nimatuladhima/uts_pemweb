<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Setting the pages character encoding -->
    <meta charset="UTF-8">

    <!-- The meta viewport will scale my content to any device width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to my stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <title>UTS 3</title>
</head>

<body>

    <h2>Soal 3 UTS</h2>
    <h5 align="center">Ni'matul 'Adhima</h5>

    <!-- Lets start with the table element -->
    <table>
        <!-- The first row is the tables header -->
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Ukuran</th>
            <th>Contact</th>
            <th>Warna</th>
        </tr>

        <!-- Next we will have the template which we will use inside
	  		the loop and poplulate with the data from the json file. -->

        <?php

			$json_data = file_get_contents("products.json");
			$products = json_decode($json_data, true);
			if(count($products) != 0){
				foreach ($products as $product) {
					?>
        <tr>
            <td>
                <img src="<?php echo $product['gambar']; ?>" alt="">
            </td>
            <td>
                <?php echo $product['nama']; ?>
            </td>
            <td>
                <?php echo $product['harga']; ?>;
            </td>
            <td>
                <?php echo $product['ukuran']; ?>
            </td>
            <td>
                <?php echo $product['contact']; ?>
            </td>
            <td>
                <select name="warna" id="warna">
                    <option value="pilih warna">Pilih Warna</option>
                    <option value="merah">Merah</option>
                    <option value="kuning">Kuning</option>
                    <option value="hijau">Hijau</option>
                    <option value="hijau">Biru</option>
                </select>
            </td>
        </tr>
        <?php
				}
			}
		?>
    </table>
</body>

</html>