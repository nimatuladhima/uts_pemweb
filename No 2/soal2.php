<?php
 $prov = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Bojonegoro",
      "kecamatan" => "Bojonegoro",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Sidarjo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Lamongan",
        "kecamatan" => "Babat",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Mojokerto",
        "kecamatan" => "Mojokerto",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 2",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "kecamatan 3",
    ),
  );
  echo " soal no 2//ni'matul 'adhima";
?>
<table border="1" width="900" align="center">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kabupaten</th>
            <th scope="col">Kecamatan</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $no =1;
    foreach($prov as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['provinsi']."</td>
      <td>".$b['kabupaten']."</td>
      <td>".$b['kecamatan']."</td>";
      echo "</tr>";
      $no++;
    }
    ?>
    </tbody>
</table>