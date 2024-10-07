<?php
# memulakan fungsi session
session_start();

# Memanggil fail header.php 
include('header.php');

?>

<!-- Tajuk antaramuka-->
<h3> Pendaftaran Pembeli Baru </h3>

<!-- Borang Pendaftaran pembeli Baru--> 
<form action = 'pembeli-signup-proses.php' method = 'POST'>

    Nama Pembeli    <input placeholder="Nama Pengguna" input type ='text' name ='nama' required> <br>
    NoKp Pembeli    <input placeholder="NoKp Pengguna" input type ='text' name ='nokp' required> <br>
    Katalaluan      <input placeholder="Katalaluan Baru" input type ='password' name ='katalaluan' required> <br>
                    <input type ='submit' value='Daftar'>
</form>
<?php include ('footer.php');?>
