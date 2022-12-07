.<div class="container-fluid m-3">
	
	<table class="table table-bordered">
		<a href="tambah_berita"><button class="btn btn-dark">Tambah Berita</button></a>
		<br><br>
		<tr>
			<td> No</td>
			<td> Judul</td>
			<td> Isi</td>
		<!-- <td> Sampul</td> -->
		<td> Aksi </td>
	</tr>
	<?php

foreach ($berita as $br) {
	echo '
	<tr>
	<td>' . $br['id_berita'] . '</td>
	<td>' . $br['judul'] . '</td>
	<td>' . $br['isi_berita'] . '</td>
	
	<td>
	<a class="text-black" href="edit_berita?id_berita=' . $br['id_berita'] . '">Edit</a>
	|  <a class="text-black" href="hapus_berita?id_berita=' . $br['id_berita'].'">Hapus</a>
	</td>
	</tr>
	';
}
?>

</table>
</div>
<!-- <td>
                        <img src="' . $br['foto'] . '" alt="" height=75 width=60>
                    </td> -->
