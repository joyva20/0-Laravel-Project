<?php 
include 'header.php';
$addk=mysql_query("SELECT * from kategori");
$addj=mysql_query("SELECT * from jenis");
$addkn=mysql_query("SELECT * from kondisi");
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Tambah Network</h3>
<a class="btn" href="network.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
					
	<form action="insert-network.php" method="POST" enctype="multipart/form-data" id="form1">
		<table class="table">
		    <tr>
				<td>Judul</td>
				<td><input required type="text" class="form-control" name="judul" placeholder="contoh : Termurah! Original Battery A1321 For Macbook Pro 15 inch A1286 2009-2010"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><select required name="kategori" class="form-control">
				    <option value=""> Pilih Kategori </option>
				<?php while($k=mysql_fetch_array($addk)){ ?>
						<option value="<?= $k['id_kategori']?>"><?= $k['nama_kategori']?></option>
				<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td><select required name="jenis" class="form-control">
				    <option value=""> Pilih Jenis </option>
				<?php while($j=mysql_fetch_array($addj)){ ?>
						<option value="<?= $j['id_jenis']?>"><?= $j['nama_jenis']?></option>
				<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Etalase</td>
				<td><input required type="text" class="form-control" name="etalase" placeholder="Baterai A1321"></td>
			</tr>
			<tr>
				<td>Kondisi</td>
				<td><select required name="kondisi" class="form-control">
				    <option value=""> Pilih Kondisi </option>
				<?php while($j=mysql_fetch_array($addkn)){ ?>
						<option value="<?= $j['kondisi']?>"><?= $j['kondisi']?></option>
				<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Sparepart</td>
				<td><input required type="text" class="form-control" name="nama" placeholder="contoh : Battery A1321 For Macbook Pro 15 inch A1286 2009-2010"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input required type="text" class="form-control" placeholder="contoh : Rp. 500,000" name="harga"></td>
			</tr>
			<tr>
				<td>Berat<sup>*dalam gram</sup></td>
				<td><input required min="0" oninput="this.value = Math.abs(this.value)" type="number" class="form-control" placeholder="contoh : 100" name="berat"></td>
			</tr>
			<tr>
				<td>Garansi<sup>*dalam hari</sup></td>
				<td><input required min="0" oninput="this.value = Math.abs(this.value)" type="number" class="form-control" placeholder="contoh : 30" name="garansi"></td>
			</tr>
			<tr>
				<td>Deskripsi Singkat</td>
				<td><textarea required class="ckeditor" name="keterangan" cols="120" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Promo</td>
				<td><select required name="promo" class="form-control">
				        <option value=""> - Pilih untuk dipromosikan -</option>
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Link Embed Video Youtube</td>
				<td>
				    <input required type="text" class="form-control" placeholder="contoh : https://www.youtube.com/embed/zw7UAHEeuFw" name="youtube">
				</td>
			</tr>
			<tr>
				<td>Tags</td>
				<td>
				    <input required type="text" class="form-control" placeholder="contoh : Baterai, Macbook, Apple" name="tags">
				</td>
			</tr>
			<tr>
				<td>Keyword</td>
				<td><input required type="text" class="form-control" placeholder="contoh : Baterai MacBook Pro Murah Semarang, Baterai Apple Murah Semarang, Baterai MacBook Bergaransi Semarang" name="keyword">
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input required type="text" class="form-control" placeholder="contoh : Original Battery A1618 For Macbook Pro Retina 15 inch A1398 2014-2015 Murah Bergaransi Semarang" name="description_tag">
				</td>
			</tr>
			<tr>
				<td>Gambar Tampak Depan</td>
				<td><input required type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input required class="form-control" type="text" name="txt_gambar" placeholder="Keterangan Gambar Tampak Depan"></td>
			</tr>
			<tr>
				<td>Gambar Tampak Belakang</td>
				<td><input required type="file" name="gambar_belakang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input required class="form-control" type="text" name="txt_gambar_belakang" placeholder="Keterangan Gambar Tampak Belakang"></td>
			</tr>

		</table>
        <div class="row">
        <div class="col-sm-10 text-right">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
        <div class="col-sm-2">
            <input type="submit" class="btn btn-primary" name="save" value="Simpan">
        </div>
    </div>
	</form>
    
    
<?php include 'footer.php'; ?>