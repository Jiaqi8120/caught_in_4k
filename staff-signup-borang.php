<?php
# memulakan fungsi SESSION
session_start();

# Memanggil fail header.php dan guard-staff.php 
include('header.php');
include('guard-staff.php');
?>

<!-- Tajuk antaramuka--> 
<h3> Pendaftaran Staff Baru </h3>

<!-- Borang Pendaftaran Staff Baru--> 
<form action = 'staff-signup-proses.php' method = 'POST'>

    Nama Staff    <input type ='text'     name ='nama'       required>  <br>
    NoKp Staff    <input type ='text'     name ='nokp'       required>  <br>
    Katalaluan    <input type ='password' name ='katalaluan' required>  <br>
                  <input type ='submit'   value='Daftar'>

</form>
<?php include ('footer.php');?>