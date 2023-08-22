<?php include 'header.php'; 
	   
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Network</h3>
<a class="btn btn-info col-md-2" href="tambah-network.php" role="button" style="margin-bottom:20px"><span class="glyphicon glyphicon-plus"></span>Tambah Network</a>
<!-- <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Item</button> -->
<br/>
<br/>

<?php 
$jumlah_record=mysql_query("SELECT * from network");
$jum=mysql_num_rows($jumlah_record);
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
	</table>
</div>
<br/>
<table id="table_id" class="table table-bordered dissplay">
	<thead>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Jenis</th>
			<th>Nama Network</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		<?php $brg=mysql_query("SELECT id,nama_kategori, slug, nama_jenis,nama,harga,gambar from aksesoris JOIN kategori USING(id_kategori) JOIN jenis USING(id_jenis)") ?>
		<?php while($b=mysql_fetch_array($brg)){ ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nama_kategori'] ?></td>
			<td><?php echo $b['nama_jenis'] ?></td>
			<td><?php echo $b['nama'] ?></td>
			<td><?php echo $b['harga'] ?></td>
			<td>
				<img src="img/network/<?php echo $b['gambar'] ?>" width=100>
			</td>
			<td>
				<a target="_blank" href="http://indonesia.zapplerepair.com/detail-network?id=<?=$b['id']?>&slug=<?=$b['slug']?>" class="btn btn-success">See</a>
				<a href="edit-network.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delete-aksesoris.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
		}
		?>
	</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
                    $('#table_id').DataTable();
                } );
</script>
<!-- modal input -->
<!-- <div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Item</h4>
			</div>
			<div class="modal-body">
				<form action="insert.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control">
						<option value="Macbook">Macbook</option>
						<option value="iMac">iMac</option>
						<option value="iPhone">iPhone</option>
						<option value="iPad">iPad</option>
						<option value="iPod">iPod</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jenis</label>
						<select name="jenis" class="form-control">
						<option value="Casing">Casing</option>
						<option value="Baterai">Baterai</option>
						<option value="Keyboard">Keyboard</option>
						<option value="Kipas">Kipas</option>
						<option value="LCD">LCD</option>
						<option value="Speaker">Speaker</option>
						<option value="Camera">Camera</option>
						<option value="Chipset">Chipset</option>
						<option value="Back-Cover">Back Cover</option>
						<option value="Antena">Antena</option>
						<option value="Touchpanel">Touchpanel</option>
						<option value="Lainnya">Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Sparepart</label>
						<input name="nama" type="text" class="form-control">
					</div>	
					<div class="form-group">
						<label>Harga (Rp)</label>
						<input name="harga" type="number" class="form-control">
					</div>																		
					<div class="form-group">
						<label>Keterangan</label><br>
						<textarea name="keterangan" id="" cols="75" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label>Promo</label><br>
						<select name="promo" class="form-control">
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
						</select>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input name="gambar" type="file">
					</div>		
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" name="save" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div> -->



<?php 
include 'footer.php';

?>