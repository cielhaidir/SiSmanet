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
			<?php
			foreach ($berita as $br){
	            echo '<div class="col-lg-4 col-md-6 text-bg-dark text-start"> 
                <div>
						<img class="img-fluid" loading="lazy" src="'.base_url().'assets/img/berita/' . $br['foto'] . '" width="317" alt="SMANET">
						</div>
						<p class="text-center">3 October 2022 | By Admin</p>
                    <a href="#" >
                        <h5 class="text-black">' . $br['judul'] . '</h5>
                    </a>
                    <a href="informasi/berita?id_berita='.$br['id_berita'].'" class="text-black">
					Baca Selengkapnya
                    </a>
					</div>';
				}
					?>
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

</html>
