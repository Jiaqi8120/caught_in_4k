<?php
# memulakan fungsi SESSION 
session_start();

# menyemak kewujudan data post 
if(!empty($_POST))
{
    include ('connection.php');

    # data validation
    if($_POST['harga'] <= 0)
    {
        die ("<script>alert ('Ralat Pada Harga');
        window.history.back(); </script>");
    }

    #arahan query untuk menyimpan data barang baru 
    $sql_simpan = "insert into barang
    (nama_barang, kod_jenama, harga, nokp_staff, gambar, ISO, Prosesor)
    values
    ('".$_POST['nama']."', '".$_POST['kod_jenama']."', 
    '".$_POST['harga']."', '".$_SESSION['nokp']."', '".$_POST['gambar']."', '".$_POST['ISO']."', '".$_POST['Prosesor']."'
    )
    ";

    # melaksanakan proses menyimpan data barang baru
    $laksana_sql = mysqli_query($condb,$sql_simpan);

    # menguji jika proses menyimpan data berjaya 
    if($laksana_sql)
    {
        # jika proses menyimpan data berjaya
        die("<script>alert('Pendaftaran Berjaya.');
        window.location.href='senarai-barang.php'; </script>");
    }
    else
    {
        # jika proses menyimpan data gagal
        die("<script>alert('Pendaftaran Gagal');
        window.history.back(); </script>");
    }
}
else
{
    # jika data yang dihantar dari barang-daftar-borang.php tidak lengkap
    die("<script>alert('Sila lengkapkan maklumat');
    window.location.href='barang-signup-borang.php'; </script>");
}
?>



