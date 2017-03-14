<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "<b>Nim :</b> "; echo $obj->nim;
echo "<br>";
echo "<b>Nama :</b> "; echo $obj->nama;
echo "<br>";
echo "<b>Alamat : </b>"; echo $obj->alamat;
echo "<br>";
echo "<b>No Hp : </b>"; echo $obj->no_hp;
echo "<br>";
echo "<b>Mata Kuliah 1:</b> ";echo $obj->makul[0];
echo "<br>";
echo "<b>Mata Kuliah 2:</b>";echo $obj->makul[1];
echo "<br>";
echo "<b>Mata Kuliah 3:</b> ";echo $obj->makul[2];
?>