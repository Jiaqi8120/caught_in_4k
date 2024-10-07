<?php
# Menyemak nilai pembolehubah session['tahap']
if($_SESSION['tahap'] != "pembeli")
{
   # jika nilainya tidak sama dengan pembeli. aturcara akan dihentikan
   die("<script>alert('Sila Login');
   window.location.href='logout.php';</script>");
}
?>