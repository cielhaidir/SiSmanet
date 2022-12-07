
    <!--Main-->
    <section class="page-section">


        <div class="container p-0 mt-5">
        
            <h1 class="section-heading text-uppercase text-center mt-5">Lapor Pelanggaran Siswa</h1>
            <br>
            <div class="container">
                <div class="col-lg-5 mx-auto p-2">
                    <form>
                        <div class="text-left">Nama :</div>
                        <select class="form-select">
                            <?php
                                    foreach($siswa as $sw){
                                        echo '
                                        <option>
                                        '.$sw['nama_siswa'].'
                                        </option>
                                        ';
                                    }
                                ?>
                        </select><br>
                        <br><br>
                        <input type="submit" class="btn btn-secondary">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/baru.js"></script>

</body>


</html>
