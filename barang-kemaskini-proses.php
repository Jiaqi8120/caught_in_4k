<?php
# memulakan fungsi session
session_start();

# memanggil fail guard-staff.php 
include('guard-staff.php');

# menyemak kewujudan data POST
if(!empty($_POST))
{
    # memanggil fail connection.php 
    include('connection.php');

    # pengesahan data (validation)
    if($_POST['harga'] <= 0)
    {
        die("<script>alert('Ralat Maklumat');
        window.history.back();</script>");
    }

    #arahan SQL (query) untuk kemaskini maklumat barang
    $arahan     =  "update barang set
    nama_barang   =  '".$_POST['nama']."',
    kod_jenama    =  '".$_POST['kod_jenama']."',
    harga         =  '".$_POST['harga']."',
    nokp_staff    =  '".$_SESSION['nokp']."',
    gambar        =  '".$_POST['gambar']."',
    ISO           =  '".$_POST['ISO']."',
    Prosesor      =  '".$_POST['Prosesor']."'

    where  
    kod_barang    =  '".$_GET['kod_barang_lama']."' ";

    # Melaksanakan dan menyemak proses kemaskini
    if(mysqli_query($condb,$arahan))
    {
        #Kemaskini berjaya
        echo "<script>alert('Kemaskini Berjaya');
        window.location.href='senarai-barang.php';</script>";
    }
    else
    {
        # kemaskini gagal
        echo "<script>alert('Kemaskini Gagal');
        window.history.back();</script>";
    }
}
else
{
    #data POST empty
    die("<script>alert('Sila lengkapkan data');
    window.location.href='senarai-barang.php';</script>");
}
?>