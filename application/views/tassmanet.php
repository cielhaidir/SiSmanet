    <!--Main-->
    <section class="page-section">
        <div class="container p-0 mt-5">
        
            <h1 class="section-heading text-uppercase text-center mt-5">Lapor Pelanggaran Siswa</h1>
            <br>
            <div class="container">
                <div class="col-lg-5 mx-auto p-2">
                    <form action="tassmanet/pilih" method="POST">
                        <div class="text-left">Tingkatan :</div>
                        <select class="form-select" id="tingkatan">
                            <option value="12">Kelas 12</option>
                            <option value="11">Kelas 11</option>
                            <option value="10">Kelas 10</option>
                        </select><br>
                        <div class="text-left">Jurusan :</div>
                        <select class="form-select" id="jurusan" onchange="populate(this.id, 'kelas')">
                            <option value="">Pilih Jurusan</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="BAHASA">BAHASA</option>
                        </select><br>
                        <div class="text-left">Kelas :</div>
                        <select class="form-select" name="kelas" id="kelas">
                        </select><br>
                        <input type="submit" class="btn btn-secondary">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/baru.js"></script>

</body>


</html>
