 <!-- Berita  -->
 <section class="page-section">
 	<div class="container p-5">
 		<div class="row d-flex justify-content-center">
 			<div class="col-lg-8">
 				<div class="title text-center text-black">
 					<h1 class="mb-10">Berita Terbaru</h1>
 					<p>Ikuti terus informasi dan berita-berita terbaru tentang <b>SMA NEGERI 7 WAJO</b>.</p>
 				</div>
 			</div>
 		</div>
 		<div class="row gy-5">
 			<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
 				<?php
					foreach ($berita as $br) {
						echo '
				<div class="col">
					<div class="card"><img class="card-img-top d-block fit-cover img-fluid" width="317" src="' . base_url() . 'assets/img/berita/' . $br['foto'] . '">
						<div class="card-body p-4">
							<p class="text-primary card-text mb-0">Berita</p>
							<h4 class="card-title">' . $br['judul'] . '</h4>
							<p class="card-text">' . substr($br['isi_berita'], 0, 80) . '...<br><a href="informasi/berita?id_berita=' . $br['id_berita'] . '" class="text-black">
							Baca Selengkapnya</a>' . '</p>
							
							<div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
								<div>
									<p class="fw-bold mb-0">John Smith</p>
									<p class="text-muted mb-0">Erat netus</p>
								</div>
							</div>
						</div>
					</div>
				
			</div>';
					}
					?>
<<<<<<< Updated upstream
        </div>
    </div>
</section>
<section class="page-section bg-smanet">
    <div class="container p-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="title text-center text-white">
                    <h1 class="mb-10">Agenda</h1>
                    <p>Agenda terkini seputar <b>SMA NEGERI 7 WAJO</b>.</p>
                </div>
            </div>
        </div>
        <div class="row gy-5">
           <?php
            foreach ($agenda as $ag){
                echo '<div class="col-lg-4 col-md-6 text-bg-dark text-start"> 
                <div>
                        <img class="img-fluid" loading="lazy" src="'.base_url().'assets/img/agenda/' . $ag['foto'] . '" width="317" alt="SMANET">
                        </div>
                        <p class="text-center">3 October 2022 | By Admin</p>
                    <a href="#" >
                        <h5 class="text-black">' . $ag['judul'] . '</h5>
                    </a>
                    <a href="informasi/agenda?id_agenda='.$ag['id_agenda'].'" class="text-black">
                    Baca Selengkapnya
                    </a>
                    </div>';
                }
            ?>
        </div>
</section>
</body>
=======
 			</div>
 		</div>

 </section>
 <section class="page-section bg-smanet">
 	<div class="container p-5">
 		<div class="row d-flex justify-content-center">
 			<div class="col-lg-8">
 				<div class="title text-center text-white">
 					<h1 class="mb-10">Pengumuman</h1>
 					<p>Berikut Pengumuman Terbaru</b>.</p>
 				</div>
 			</div>
 		</div>
 		<div class="row gy-5">
 			<!---->
 			<div class="col-lg-4 col-md-6 text-bg-dark text-start">
 				<div>
 					<img class="img-fluid" loading="lazy" src="assets/img/berita/batik2.jpeg" width="317" alt="SMANET">
 				</div>
 				<p class="text-center text-white">3 October 2022 | By Admin</p>
 				<a href="#">
 					<h5 class="text-white">Pelaksanaan Hari batik dan Fashion Show Batik</h5>
 				</a>
 				<a href="#" class="text-white">
 					Baca Selengkapnya
 				</a>
 			</div>
 		</div>
 </section>

 </section>
 </body>
>>>>>>> Stashed changes

 </html>
