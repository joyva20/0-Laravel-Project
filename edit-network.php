<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Item</h3>
<a class="btn" href="network.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysql_real_escape_string($_GET['id']);
$addk=mysql_query("SELECT * from kategori");
$addj=mysql_query("SELECT * from jenis");
$addkn=mysql_query("SELECT * from kondisi");
$det=mysql_query("SELECT * from network JOIN kategori USING(id_kategori) JOIN jenis USING(id_jenis) WHERE id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update-network.php" method="POST" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
		    <tr>
				<td>Judul</td>
				<td><input required type="text" class="form-control" name="judul" value="<?php echo $d['judul'] ?>" placeholder="contoh : Termurah! Original Battery A1321 For Macbook Pro 15 inch A1286 2009-2010"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><select required name="kategori" class="form-control">
				    <option value=""> Pilih Kategori </option>
    				<?php while($k=mysql_fetch_array($addk)){ 
    				        if ($k['id_kategori'] == $d['id_kategori']){ $selected = 'selected';}else{ $selected='';}?>
    						<option value="<?= $k['id_kategori']?>" <?= $selected?>>
    						    <?= $k['nama_kategori']?>
    						</option>
    				<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td><select required name="jenis" class="form-control">
				    <option value=""> Pilih Jenis </option>
				<?php while($j=mysql_fetch_array($addj)){ 
    				        if ($j['id_jenis'] == $d['id_jenis']){ $selected = 'selected';}else{ $selected='';}?>
    						<option value="<?= $j['id_jenis']?>" <?= $selected?>>
    						    <?= $j['nama_jenis']?>
    						</option>
    				<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Etalase</td>
				<td><input required value="<?php echo $d['etalase'] ?>" type="text" class="form-control" name="etalase" placeholder="Baterai A1321"></td>
			</tr>
			<tr>
				<td>Kondisi</td>
				<td><select required name="kondisi" class="form-control">
				    <option value=""> Pilih Kondisi </option>
				<?php while($h=mysql_fetch_array($addkn)){ 
    				        if ($h['kondisi'] == $d['kondisi']){ $selected = 'selected';}else{ $selected='';}?>
    						<option value="<?= $h['kondisi']?>" <?= $selected?>>
    						    <?= $h['kondisi']?>
    						</option>
    				<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Part</td>
				<td><input required type="text" value="<?php echo $d['nama'] ?>" class="form-control" name="nama" placeholder="contoh : Battery A1321 For Macbook Pro 15 inch A1286 2009-2010"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input required type="text" value="<?php echo $d['harga'] ?>" class="form-control" placeholder="contoh : Rp. 500,000" name="harga"></td>
			</tr>
			<tr>
				<td>Berat<sup>*dalam gram</sup></td>
				<td><input required min="0" value="<?php echo $d['berat'] ?>" oninput="this.value = Math.abs(this.value)" type="number" class="form-control" placeholder="contoh : 100" name="berat"></td>
			</tr>
			<tr>
				<td>Garansi<sup>*dalam hari</sup></td>
				<td><input required min="0" value="<?php echo $d['garansi'] ?>" oninput="this.value = Math.abs(this.value)" type="number" class="form-control" placeholder="contoh : 30" name="garansi"></td>
			</tr>
			<tr>
				<td>Deskripsi Singkat</td>
				<td><textarea required class="ckeditor" name="keterangan" cols="120" rows="5"><?php echo $d['keterangan'] ?></textarea></td>
			</tr>
			<tr>
				<td>Promo</td>
				<td><select required name="promo" class="form-control">
				        <?php if ($d['promo'] == 'Ya'){ ?>
				        <option value=""> - Pilih untuk dipromosikan -</option>
				        <option value="Ya" selected >Ya</option>
						<option value="Tidak" >Tidak</option>
				        <?php }else if ($d['promo'] == 'Tidak'){?>
				        <option value=""> - Pilih untuk dipromosikan -</option>
				        <option value="Ya">Ya</option>
						<option value="Tidak" selected >Tidak</option>
				        <?php }else{ ?> 
				        <option value=""> - Pilih untuk dipromosikan -</option>
				        <option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
				        <?php }?>
					</select>
				</td>
			</tr>
			<tr>
			    <td>Link Embed Video Youtube</td>
				<td>
				    <input required type="text" value="<?php echo $d['youtube'] ?>" class="form-control" placeholder="contoh : https://www.youtube.com/embed/zw7UAHEeuFw" name="youtube">
				</td>
			</tr>
			<tr>
				<td>Tags</td>
				<td>
				    <input required type="text" value="<?php echo $d['tags'] ?>" class="form-control" placeholder="contoh : Baterai, Macbook, Apple" name="tags">
				</td>
			</tr>
			<tr>
				<td>Keyword</td>
				<td><input required type="text" value="<?php echo $d['keyword'] ?>" class="form-control" placeholder="contoh : Baterai MacBook Pro Murah Semarang, Baterai Apple Murah Semarang, Baterai MacBook Bergaransi Semarang" name="keyword">
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input required type="text" value="<?php echo $d['description'] ?>" class="form-control" placeholder="contoh : Original Battery A1618 For Macbook Pro Retina 15 inch A1398 2014-2015 Murah Bergaransi Semarang" name="description_tag">
				</td>
			</tr>
			<tr>
				<td>Gambar Tampak Depan</td>
				<td><img src="img/network/<?php echo $d['gambar']?>" width=200><br>
				<input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input required class="form-control" type="text" name="txt_gambar" value="<?php echo $d['alt_gambar'] ?>" placeholder="Keterangan Gambar Tampak Depan"></td>
			</tr>
			<tr>
				<td>Gambar Tampak Belakang</td>
				<td><img src="img/network/real/<?php echo $d['belakang']?>" width=200><br>
				<input type="file" name="gambar_belakang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input required class="form-control" type="text" name="txt_belakang" value="<?php echo $d['alt_belakang'] ?>" placeholder="Keterangan Gambar Tampak Belakang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="edit" value="Edit"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>