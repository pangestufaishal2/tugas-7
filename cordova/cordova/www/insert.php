<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nohp=$_POST['nohp'];
 $jenis=$_POST['jenis'];
 $warna=$_POST['warna'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"INSERT INTO `tbl_transaksi` (`nama`,`nohp`,`jenis`,`warna`,`jumlah`) VALUES ('$nama','$nohp','$jenis','$warna','$jumlah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>