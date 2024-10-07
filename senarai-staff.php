<?php
# memulakan fungsi session
session_start();

# memanggil fail header.php, connection.php dan guard-staff.php 
include('header.php');
include('connection.php');
include('guard-staff.php');
?>

<h3 >Senarai Staff</h3>

| <a href='staff-signup-borang.php'>Daftar Staff Baru</a>
| <a href='staff-upload-borang.php'>Muat Naik Staff</a>
|
<!-- Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan --> 
<table width='100%' border='1' id='saiz'>
    <tr>
        <td>Nama</td>
        <td>NoKp</td>
        <td>Katalaluan</td>
        <td>Tindakan</td>
    </tr>

<?php

# arahan query untuk mencari senarai nama stuff
$arahan_papar="select* from staff ";

# laksanakan arahan mencari data stuff
$laksana =mysqli_query($condb,$arahan_papar);

# Mengambil data yang ditemui
    while($m = mysqli_fetch_array($laksana))
    {
        # umpukkan data kepada tatasusunan bagi tujuan kemaskini staff
        $data_get=array(
             'nama'          =>  $m['nama_staff'],
             'nokp'          =>  $m['nokp_staff'],
             'katalaluan'    =>  $m['katalaluan_staff']
        );

        # memaparkan senarai nama dalam jadual
        echo"<tr>
        <td>".$m['nama_staff']."</td>
        <td>".$m['nokp_staff']."</td>
        <td>".$m['katalaluan_staff']."</td> ";

        # memaparkan navigasi untuk kemaskini dan hapus data staff
         echo"<td>
         <a class='w3-button w3-round-medium w3-blue' href='staff-kemaskini-borang.php?".http_build_query($data_get)."'>
         <i class=\"fa fa-wrench w3-xlarge\"></i></a>

         <a class='w3-button w3-round-medium w3-red' href='staff-padam-proses.php?nokp=".$m['nokp_staff']."'
         onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\"><i class=\"fa fa-trash w3-xlarge\"></i></a>

         </td>
         </tr>";
    }
?>
</table>
<?php include ('footer.php'); ?>