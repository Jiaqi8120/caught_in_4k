<?php
# memulakan fungsi SESSION
session_start();

# Memanggil fail header.php 
include('header.php');
include('connection.php');
include('guard-staff.php');
?>

<!-- Tajuk Antaramuka--> 
<h3> Pendaftaran Barangan Baru </h3>

<!-- Borang Pendaftaran Barang Baru--> 
<form action = 'barang-daftar-proses.php' method = 'POST'>

    Nama Barang   <input type ='text' name ='nama' required> <br>
    Jenama        <select name='kod_jenama' required>
                      <option selected disabled>Sila pilih jenama</option>
<?php

      $sql_jenama = "select * from jenama order by jenama_barang";
      $laksana_carian = mysqli_query($condb,$sql_jenama);
      while($m=mysqli_fetch_array($laksana_carian))
      {
      echo "<option value='".$m['kod_jenama']."'>".$m['jenama_barang']."</option>";
      }
?>
                </select>
                <a href='barang-jenama-borang.php'>[+]Jenama</a>
                <br>
    Harga       <input type ='text' name ='harga'    required> <br>
    ISO         <input type ='text' name ='ISO'      required> <br>
    Prosesor    <input type ='text' name ='Prosesor' required> <br>
    Link Gambar <input type ='text' name ='gambar'   required> <br>
                <input type='submit' value='Daftar'>


            
</form>
<?php include ('footer.php');?>