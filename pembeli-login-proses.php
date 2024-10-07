<?php 
# memulakan fungsi session
session_start();

# Menyemak kewujudan data post yang dihantar dari pembeli-login-borang.php 
if(!empty($_POST['nokp']) and !empty($_POST['katalaluan']))
{
    # Memanggil fail connection.php
    include ('connection.php');

    # Arahan SQL (query) untuk membandingkan data yang dimasukkan
    # wujud di pangkalan data atau tidak
    $query_login = "select * from pembeli
    where
           nokp_pembeli         = '".$_POST['nokp']."'
    and    katalaluan_pembeli   = '".$_POST['katalaluan']."' Limit 1";

    # melaksanakan arahan membandingkan data
    $laksana_query = mysqli_query($condb, $query_login);

    # jika terdapat 1 data yang sepadan, login berjaya
    if(mysqli_num_rows($laksana_query)==1)
    {
         # mengambil data yang ditemui
         $m = mysqli_fetch_array($laksana_query);

         # mengumpukkan kepada pembolehubah session tahap
         $_SESSION['tahap'] = "pembeli";

          # membuka laman index.php
          echo "<script>window.location.href='index.php';</script>";
    }
    else 
    {
        # login gagal. kembali ke laman pembeli-login-borang.php 
        echo"<script>alert('Login Gagal');
        window.location.href='pembeli-login-borang.php';</script>";
    }
}
else
{
    # jika tiada data yang dihantar dari laman pembeli-login-borang.php
    echo"<script>alert('Sila masukkan NoKp dan Katalaluan');
    window.location.href='pembeli-login-borang.php';</script>";
}

?>