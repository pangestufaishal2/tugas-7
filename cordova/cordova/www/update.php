<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];    
 $nama=$_POST['nama'];
 $nohp=$_POST['nohp'];
 $jenis=$_POST['jenis'];
 $warna=$_POST['warna'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"UPDATE `tbl_transaksi` SET `nama`='$nama',`nohp`='$nohp',`jenis`='$jenis',`warna`='$warna',`jumlah`='$jumlah' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>