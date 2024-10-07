<?php
# memulakan fungsi session
session_start();

# memanggil fail header, guard-staff, connection
include('header.php');
include('guard-staff.php');
include('connection.php');

?>
<h3 >Senarai Barang</h3>
<!-- Bahagian 1 : memaparkan borang untuk memilih jenama --> 
<form action='' method='POST'>

       <select name='jenama'>
           <option selected disabled>Sila pilih jenama</option>
           <?php
               $sql_jenama = "select * from jenama order by jenama_barang";
               $laksana_carian = mysqli_query($condb,$sql_jenama);
               while($m=mysqli_fetch_array($laksana_carian)){
                   echo "<option
value='".$m['jenama_barang']."'>".$m['jenama_barang']."</option>";
               }
            ?>
        </select>

    </select> <input type='submit' value='Papar'>

</form>
|<a href='barang-daftar-borang.php'>Daftar Barang Baru</a>|
<!-- Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan -->
<?php include('butang-saiz.php'); ?>
<!-- Header bagi jadual untuk memaparkan senarai barang -->
<table width='100%' border='1' id='saiz'>
    <tr>
        <td>Gambar</td>
        <td>Nama Barang</td>
        <td>Jenama Barang</td>
        <td>Harga(RM)</td>
        <td>ISO</td>
        <td>Prosesor</td>
        <td>Staff yang rekod</td>
        <td></td>
    </tr>

<?php

# syarat tambahan yang akan dimasukkan dalam arahan(query) senarai barang
$tambahan="";
if(!empty($_POST['jenama']))
{
    $tambahan= "and jenama.jenama_barang = '".$_POST['jenama']."'";
}

# arahan query untuk mencari senarai nama barang 
$arahan_papar="SELECT* FROM barang, jenama, staff
WHERE barang.kod_jenama = jenama.kod_jenama
and barang.nokp_staff = staff.nokp_staff
$tambahan
ORDER BY barang.harga ";

# laksanakan arahan mencari data barang
$laksana = mysqli_query($condb,$arahan_papar);

# mengambil data yang ditemui
    while($m = mysqli_fetch_array($laksana))
    {
        # umpukkan data kepada tatasusunan bagi tujuan kemaskini barang
        $data_get=array(
            'gambar'         =>  $m['gambar'],
            'kod_barang'     =>  $m['kod_barang'],
            'nama_barang'    =>  $m['nama_barang'],
            'kod_jenama'     =>  $m['kod_jenama'],        
            'jenama_barang'  =>  $m['jenama_barang'],
            'harga'          =>  $m['harga'],
            'ISO'            =>  $m['ISO'],
            'Prosesor'       =>  $m['Prosesor']

        );

        # memaparkan senarai nama dalam jadual
        echo"<tr>
        <td><img src=' ".$m['gambar']."' style='width:200px'> </td>
        <td>".$m['nama_barang']."</td>
        <td>".$m['jenama_barang']."</td>
        <td>".$m['harga']."</td>
        <td>".$m['ISO']."</td>
        <td>".$m['Prosesor']."</td>
        <td>".$m['nama_staff']."</td>
        ";


        # memaparkan navigasi untuk kemaskini dan hapus data barang
        echo"<td>
        <a class='w3-button w3-circle-small w3-blue' href='barang-kemaskini-borang.php?".http_build_query($data_get)."'><i class=\"fa fa-wrench w3-xsmall\"></i></a> 

        <a class='w3-button w3-circle-small w3-red' href='barang-padam-proses.php?kod=".$m['kod_barang']."'
        onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\"><i class=\"fa fa-trash w3-xsmall\"></i></a> 
        
        



        </td>
        </tr>";
    }
?>
</table>
<?php include ('footer.php'); ?>