<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php 
include('header.php');
?>

<!-- Tajuk antaramuka log masuk pembeli -->
<h3>Login Pembeli</h3>

<!-- Borang daftar masuk (login/sign in) pembeli-->
<form action='pembeli-login-proses.php' method='POST'>

   NoKp Pembeli         <input placeholder="NoKp Pengguna" input type='text' name='nokp' required><br>

   Katalaluan           <input placeholder="Katalaluan" input type='password' name='katalaluan' required><br>
                  
                  <input type='submit' value='Login'> <br>

</form>

<?php include ('footer.php'); ?>
