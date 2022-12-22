.<div class="container-fluid m-3">
	
	<table class="table table-bordered">
		<a href="tambah_agenda"><button class="btn btn-dark">Tambah Agenda</button></a>
		<br><br>
		<tr>
			<td> No</td>
			<td> Judul</td>
			<td> Isi</td>
		<!-- <td> Sampul</td> -->
		<td> Aksi </td>
	</tr>
	<?php
	foreach ($agenda as $ag) {
	echo '
	<tr>
	<td>' . $ag['id_agenda'] . '</td>
	<td>' . $ag['judul'] . '</td>
	<td>' . $ag['isi_agenda'] . '</td>
	
	<td>
	<a class="text-black" href="edit_agenda?id_agenda=' . $ag['id_agenda'] . '">Edit</a>
	|  <a class="text-black" href="hapus_agenda?id_agenda=' . $ag['id_agenda'].'">Hapus</a>
	</td>
	</tr>
	';
}
?>

</table>
</div>
<!-- <td>
                        <img src="' . $ag['foto'] . '" alt="" height=75 width=60>
                    </td> -->
