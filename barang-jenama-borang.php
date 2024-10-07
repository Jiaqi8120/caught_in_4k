<?php
# memulakan fungsi SESSION
session_start();

#Memanggil fail header.php 
include('header.php');
include('guard-staff.php');
?>

<!-- Tajuk antaramuka-->
<h3> Pendaftaran Jenama Baru </h3>

<!-- Borang Pendaftaran Jenama Baru--> 
<form action = 'barang-jenama-proses.php' method = 'POST'>

   Kod Jenama   <input type ='text'    name ='kod_jenama' required> <br>
   Jenama Barang<input type ='text'    name ='jenama_barang' required> <br>
                <input type ='submit'  value='Daftar'>

</form>
<?php include ('footer.php');?>