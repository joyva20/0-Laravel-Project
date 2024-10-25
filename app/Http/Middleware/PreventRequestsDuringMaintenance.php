<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}

<?php 
$no = 1;
$brg = mysql_query("SELECT id,nama_kategori, slug, nama_jenis,nama,harga,gambar from network JOIN kategori USING(id_kategori) JOIN jenis USING(id_jenis)");

$totalRows = mysql_num_rows($brg); // Menghitung jumlah baris yang diambil

while($b = mysql_fetch_array($brg)) {
    // Kode untuk mencetak data ke dalam baris tabel

    $no++;

    // ...
}

// Menghentikan perulangan jika sudah semua data diambil dan diproses
if ($no > $totalRows) {
    // Tidak ada kode di sini, perulangan akan berakhir
}
?>






<tbody>
		<?php $no=1; ?>
		<?php $brg=mysql_query("SELECT id,nama_kategori, slug, nama_jenis,nama,harga,gambar from network JOIN kategori USING(id_kategori) JOIN jenis USING(id_jenis)") ?>
        <?php $totalRows = mysql_num_rows($brg){?>
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
            <?php if ($no > $totalRows) ?> 
    // Tidak ada kode di sini, perulangan akan berakhir

			<td>
				<a target="_blank" href="http://indonesia.zapplerepair.com/detail-network?id=<?=$b['id']?>&slug=<?=$b['slug']?>" class="btn btn-success">See</a>
				<a href="edit-network.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delete-network.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
        }
    }
		?>
	</tbody>