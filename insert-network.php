<?php 
include 'config.php';

// echo '<pre>';print_r($_POST);echo'<br/>';print_r($_FILES);
		
if($_POST['save']){
	
	$judul      = $_POST['judul'];
	$lower      = strtolower($judul);
	$modif      = str_replace(' ', '-', $lower);
	$slug       = 'zapplerepair-indonesia-'.$modif;
	$kategori   = $_POST['kategori'];
	$etalase    = $_POST['etalase'];
	$jenis      = $_POST['jenis'];
	$kondisi    = $_POST['kondisi'];
	$nama       = $_POST['nama'];
	$harga      = $_POST['harga'];
	$berat      = $_POST['berat'];
	$garansi    = $_POST['garansi'];
	$keterangan = $_POST['keterangan'];
	$promo      = $_POST['promo'];
	$tags       = $_POST['tags'];
	$youtube    = $_POST['youtube'];
	$keyword    = $_POST['keyword'];
	$description_tag        = $_POST['description_tag'];
	$txt_gambar             = $_POST['txt_gambar'];
	$txt_gambar_belakang    = $_POST['txt_gambar_belakang'];

	$namafile1 = $_FILES['gambar']['name'];
	$file_tmp1 = $_FILES['gambar']['tmp_name'];	

	move_uploaded_file($file_tmp1, 'img/network/'.$namafile1);
	
	$namafile2 = $_FILES['gambar_belakang']['name'];
	$file_tmp2 = $_FILES['gambar_belakang']['tmp_name'];	

	move_uploaded_file($file_tmp2, 'img/network/real/'.$namafile2);

	$query = mysql_query("INSERT INTO network 
	        VALUES(
	        '',
	        '$kategori',
	        '$jenis',
	        '$nama',
	        '$harga',
	        '$keterangan',
	        '$promo',
	        '$namafile1', 
	        '$judul', 
	        '$kondisi', 
	        '$namafile2',
	        '$berat', 
	        '$garansi', 
	        '$slug',
	        '$etalase',
	        '$tags',
	        '$keyword',
	        '$description_tag',
	        '$txt_gambar',
	        '$txt_gambar_belakang',
	        '$youtube')");
	       // mysql_query(
	       //)
// 	 echo $query;exit();

	header("location:network.php");
	

}

 ?>