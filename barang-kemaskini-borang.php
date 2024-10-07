<?php 
# Memulakan fungsi session
session_start();

# Memanggil fail header
include('header.php');
include('connection.php');
include('guard-staff.php');

# Menyemak kewujudan data GET. Jika data GET empty, buka fail senarai-barang
if(empty($_GET)) {
    die("<script>window.location.href='senarai-barang.php';</script>");
}
?>

<h3>Kemaskini Data Barang</h3>

<form action='barang-kemaskini-proses.php?kod_barang_lama=
<?= $_GET['kod_barang'] ?>' method='POST'>

Nama Barang
<input type='text' name='nama'
value='<?= $_GET['nama_barang'] ?>' required><br>

Jenama
<select name='kod_jenama' required>
    <option value='<?= $_GET['kod_jenama'] ?>'>
    <?= $_GET['jenama_barang'] ?></option>
    <?php
        $sql_jenama = "select * from jenama order by jenama_barang";
        $laksana_carian = mysqli_query($condb,$sql_jenama);
        while($m=mysqli_fetch_array($laksana_carian)){
            if($m['kod_jenama'] != $_GET['kod_jenama'])
            {
    echo "<option value='".$m['kod_jenama']."'>".$m['jenama_barang']."</option>";
            }
        }
    ?>
</select><br>

Harga 
<input type='text' name='harga' value='<?= $_GET['harga']?>' required><br>

Gambar
<input type='text' name='gambar' value='<?= $_GET['gambar']?>' required><br>

ISO
<input type='text' name='ISO' value='<?= $_GET['ISO']?>' required><br>

Prosesor
<input type='text' name='Prosesor' value='<?= $_GET['Prosesor']?>' required><br>



<input type='submit' value='Kemaskini'>
</form>
<?php include ('footer.php'); ?>