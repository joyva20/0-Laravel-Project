<?php 
include 'config.php';

$id_brg=mysql_real_escape_string($_GET['id']);
$det=mysql_query("SELECT * FROM network WHERE id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	$gambar=$d['gambar'];
	if (file_exists("img/network/$gambar"))
	{
		unlink("img/network/$gambar");
	}

	mysql_query("DELETE FROM network WHERE id='$id_brg'") or die(mysql_error());

	header("location:network.php");
}
?>
