<?php
 $buku = array(
    array(
      "judul" => "Pemrograman Web dengan Javascript",
      "pengarang" => "Budi Seyadi",
      "tahun" => 2019
    ),
    array(
      "judul" => "Belajar Mandiri Python",
      "pengarang" => "Ahmad Mustofa",
      "tahun" => 2010
    ),
    array(
      "judul" => "Microsoft Excel untuk Penulisan Ilmiah",
      "pengarang" => "Edi Rahmadi",
      "tahun" => 2015
    ),
    array(
      "judul" => "Microsoft Word untuk Penulisan Ilmiah",
      "pengarang" => "Budi Cahyadi",
      "tahun" => 2015
    )
  );
  echo " soal no 1/Ni'matul 'Adhima";
?>
<table border="1" width="900" align="center">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $no =1;
    foreach($buku as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['judul']."</td>
      <td>".$b['pengarang']."</td>
      <td>".$b['tahun']."</td>";
      echo "</tr>";
      $no++;
    }
    ?>
    </tbody>
</table>