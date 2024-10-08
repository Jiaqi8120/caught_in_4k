<?php
# Memulakan fungsi SESSION
session_start();
# Memanggil fail header.php, connection.php dan guard-pembeli.php 
include('header.php');
include('connection.php');
include('guard-pembeli.php');
?>
<!--
    Memaparkan perkara yang boleh digunakan untuk
    membandingkan telefon bimbit sama ada harga, jenama

--> 
<p>Carian Kamera</p>
<!-- borang pemilihan --> 
<form action="" method="POST">
<table>
    <tr>
        <td>Julat Harga</td>
        <td><input type='text' name='harga'> <i>dan</i></td>
</tr>
<tr>
    <td>Jenama</td>
    <td>
        <select name='jenama'>
            <option selected disabled>Sila pilih jenama</option>
            <?php
                # proses memaparkan senarai jenama yang ada di jadual jenama
                # dalam bentuk drop down list
                $sql_jenama = "select * from jenama order by jenama_barang";
                $laksana_carian = mysqli_query($condb,$sql_jenama);
                while($m=mysqli_fetch_array($laksana_carian)){
                   echo "<option value='".$m['jenama_barang']."'>
                   ".$m['jenama_barang']."</option>";
                }
            ?>
        </select>
        <i>dan</i>
     </td>
   </tr>

   <tr>
       <td></td>
       <td><input type='submit' value='cari'></td>
    </tr>
</table>
</form>
<hr>

<?php 
    # memeriksa jika terdapat carian
    if(!empty($_POST['jenama']) or !empty($_POST['harga'])){
        $tambahan=" ";
        $carian=" ";
       
        #jika carian harga tidak kosong 
        if(!empty($_POST['harga'])){
            # umpukan syarat SQL tambahan harga barang
            $tambahan = $tambahan." "." AND barang.harga < ".$_POST['harga']."";
            $carian = $carian. "Harga : RM ".$_POST['harga']." ke bawah<br>";
        }
    
        if(!empty($_POST['jenama'])){
        # umpukan syarat SQL tambahan jenama barang
        $tambahan = $tambahan." "." AND jenama.jenama_barang = '".$_POST['jenama']."'";
        $carian = $carian. "Jenama : ".$_POST['jenama']."<br>";
        }

        echo "Carian mengikut<br>".$carian;

        # arahan SQL (query) untuk memilih barang berdasarkan syarat2 
        # telah ditetapkan
        $sql_pilihan = "
        SELECT* FROM barang, jenama 
        WHERE barang.kod_jenama = jenama.kod_jenama
        $tambahan
        GROUP BY barang.nama_barang
        ORDER BY barang.harga ";

        # Melaksanakan proses carian berdasarkan arahan SQL di atas 
        $laksana_pilihan = mysqli_query($condb,$sql_pilihan);

        # jika proses carian tidak menemui data yang sepadan 
        if(mysqli_num_rows($laksana_pilihan)==0){
            # papar Carian tidak ditemui
            echo "Carian tidak ditemui";
        }

else{
             # jika proses carian menemui data yang sepadan
             # papar data barangan tersebut dalam bentuk jadual
             echo"<hr>";
             include('butang-saiz.php');
             echo "<table border='1' id='saiz'>
                        <tr>
                             <td>Gambar</td>
                             <td>Jenama </td>
                             <td>Nama Barang</td>
                             <td>Harga</td>
                             <td>ISO</td>
                             <td>Prosesor</td>
                        </tr>";     
             # pembolehubah $n mengambil data yang ditemui
             while($n=mysqli_fetch_array($laksana_pilihan)){

                 # dan memaparkan dalam bentuk jadual
                 echo " <tr>
                 <td><img src=' ".$n['gambar']."' style='width:200px'> </td>
                             <td>".$n['jenama_barang']."</td>
                             <td>".$n['nama_barang']."</td>
                             <td>".$n['harga']."</td>
                             <td>".$n['ISO']."</td>
                             <td>".$n['Prosesor']."</td>
                        </tr>";
            }
            echo"</table>";
         }
    }
    else {
       echo "Sila masukkan maklumat carian";
    }

include ('footer.php');
?>