<?php
# Memulakan fungsi session
session_start();

# memanggil fail header.php 
include('header.php');
?>

<!-- Tajuk antaramuka log masuk staff --> 
<h3>Login Staff</h3>

<!-- borang daftar masuk (log in/sign in) staff--> 
<form action='staff-login-proses.php'  method='POST'>

    NoKp Staff      <input placeholder="NoKp Staff" input type='text'   name='nokp'><br>
    Katalaluan      <input placeholder="Katalaluan" input type='password'  name='katalaluan' ><br>
                    <input type='submit'  value='Login'>
</form>
<?php include ('footer.php'); ?>
