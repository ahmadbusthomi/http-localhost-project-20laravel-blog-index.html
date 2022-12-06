<?php
extract ($_POST);
extract ($_GET);
include"koneksi.php";
$hapus_data="DELETE FROM menu WHERE id ='$sales'";
$jalan_hapus=mysql_query($hapus_data);
header("location:tampildata.php");
?>
<a href="hapusdata.php?&id=<?php echo "$array[0]"; ?>">hapus</a>
$hapus_data="DELETE FROM menu WHERE id ='$id'";
