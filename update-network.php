<?php 
include 'config.php';

// echo "<pre>";print_r($_FILES);
if(isset($_POST['edit'])){
    
	$id=$_POST['id'];
	$judul      = str_replace('"', '', $_POST['judul']);
	$kategori   = str_replace('"', '', $_POST['kategori']);
	$etalase    = str_replace('"', '', $_POST['etalase']);
	$jenis      = str_replace('"', '', $_POST['jenis']);
	$kondisi    = str_replace('"', '', $_POST['kondisi']);
	$nama       = str_replace('"', '', $_POST['nama']);
	$harga      = str_replace('"', '', $_POST['harga']);
	$berat      = str_replace('"', '', $_POST['berat']);
	$garansi    = str_replace('"', '', $_POST['garansi']);
	$keterangan = str_replace('"', '', $_POST['keterangan']);
	$promo      = str_replace('"', '', $_POST['promo']);
	$tags       = str_replace('"', '', $_POST['tags']);
	$youtube    = str_replace('"', '', $_POST['youtube']);
	$keyword    = str_replace('"', '', $_POST['keyword']);
	$description_tag        = str_replace('"', '', $_POST['description_tag']);
	$txt_gambar             = str_replace('"', '', $_POST['txt_gambar']);
	$txt_gambar_belakang    = str_replace('"', '', $_POST['txt_belakang']);

	$namafile1 = $_FILES['gambar']['name'];
	$file_tmp1 = $_FILES['gambar']['tmp_name'];	
	
	$namafile2 = $_FILES['gambar_belakang']['name'];
	$file_tmp2 = $_FILES['gambar_belakang']['tmp_name'];

	//jika foto dirubah
	if (!empty($file_tmp1))
	{
    		$det=mysql_query("SELECT * FROM network WHERE id='$id'")or die(mysql_error());
    		//menghapus gambar lama
    		while($d=mysql_fetch_array($det))
    		{
    			//nama field gambar
    			$foto=$d['gambar'];
     			// echo $foto;
    			//menghapus foto lama dari folder
    			if (file_exists("img/network/$foto")) 
    			{
    				unlink("img/network/$foto");
                    move_uploaded_file($file_tmp1, 'img/network/'.$namafile1);
    			}else{
    			    move_uploaded_file($file_tmp1, 'img/network/'.$namafile1);
    			}
		    }
		    
		    $query = mysql_query("UPDATE network SET 
    		            gambar='$namafile1'
    		            WHERE id='$id'");
		
	}
	
	
	if (!empty($file_tmp2))
	{
	        $det=mysql_query("SELECT * FROM network WHERE id='$id'")or die(mysql_error());
    		//menghapus gambar lama
    		while($d=mysql_fetch_array($det))
    		{
    			$belakang=$d['belakang'];
    			//menghapus foto lama dari folder
    			if (file_exists("img/network/real/$belakang")) 
    			{
    				unlink("img/network/real/$belakang");
                    move_uploaded_file($file_tmp2, 'img/network/real/'.$namafile2);
    			}else{
    			    move_uploaded_file($file_tmp2, 'img/network/real/'.$namafile2);
    			}
		    }
		    
		    $query = mysql_query("UPDATE network SET
    		            belakang='$namafile2'
    		            WHERE id='$id'");
	}
	
	$query = mysql_query("UPDATE 
    		            network SET 
    		            id_kategori='$kategori',
    		            id_jenis='$jenis',
    		            nama='$nama',
    		            harga='$harga',
    		            keterangan='$keterangan',
    		            promo='$promo',
    		            judul = '$judul',
    		            kondisi = '$kondisi',
    		            berat = '$berat',
    		            garansi = '$garansi',
    		            tags = '$tags',
    		            alt_gambar = '$txt_gambar',
    		            alt_belakang = '$txt_gambar_belakang',
    		            keyword = '$keyword',
    		            etalase = '$etalase',
    		            description = '$description_tag',
    		            youtube = '$youtube'
    		            WHERE id='$id'");

	header("location:network.php");
} 

?>