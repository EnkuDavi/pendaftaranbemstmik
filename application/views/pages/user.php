<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">BEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- akhir navbar -->


<!-- Jumbotron -->
<div class="jumbotron-fluid">
    <div class="row">
        <div class="col-sm-12">
            <center>
                </br><img alt="STMIK Pamitran Karawang" src="assets/img/logo.png">
            </center>

        </div>
    </div>

    <div class="container text-center">
        <b>
            <h1 class="mt-5">STMIK<br> <span>Pamitran Karawang</span></h1>
        </b>
    </div>
</div>
<!-- akhir jumbotron -->

<!-- akhir section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="alert alert-warning text-center" role="alert">
                    Pendaftaran Calon Ketua BEM STMIK Pamitran Karawang
                </div>
                <br>
                <!-- awal section -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="text-center">Form Pendaftaran Calon Anggota BEM</h6>
                                <hr>
                                <form action="<?php echo base_url('user'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group">
                                        <label for="exampleFormControlSelect1">Kelas</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                                            <option value="Manajemen Informatika">MANAJEMEN INFORMATIKA</option>
                                            <option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
                                            <option value="Komputerisasi Akuntansi">KOMPUTERISASI AKUNTANSI</option>
                                            <option value="Informatika Rekam Medis">INFORMATIKA REKAM MEDIS</option>
                                        </select>
                                    </div>
                                    <?php echo form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Ceritakan niat dan motivasi anda ingin menjadi pengurus BEM STMIK PAMITRAN Karawang!</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="motivasi" rows="3" value="<?= set_value('motivasi'); ?>"></textarea>
                                    </div>
                                    <?php echo form_error('motivasi', '<small class="text-danger pl-3">', '</small>'); ?>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsikan dengan sederhana dan menarik tentang BEM STMIK PAMITRAN !</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pandangan" rows="3" value="<?= set_value('motivasi'); ?>"></textarea>
                                    </div>
                                    <?php echo form_error('pandangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Apa pendapat anda mengenai kekurangan BEM STMIK PAMITRAN ? Dan Berikan Solusi terbaik ! </label>
                                        <textarea class="form-control" name="pendapat" id="exampleFormControlTextarea1" rows="3" value="<?= set_value('pendapat'); ?>"></textarea>
                                    </div>
                                    <?php echo form_error('pendapat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Sebutkan kelebihan dan kekurangan pada diri Anda !</label>
                                        <textarea class="form-control" name="self" id="exampleFormControlTextarea1" value="<?= set_value('self'); ?>" rows="3"></textarea>
                                    </div>
                                    <?php echo form_error('self', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Sebutkan Visi dan Misi Anda jika terpilih menjadi Ketua BEM !</label>
                                        <textarea class="form-control" name="visi" id="exampleFormControlTextarea1" value="<?= set_value('visi'); ?>" rows="3"></textarea>
                                    </div>
                                    <?php echo form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- akhir section -->
                <hr>
            </div>
        </div>
    </div>
</section>
<div class="alert alert-primary text-center mb-0" role="alert">
    &copy;Copyright BEM STMIK Karawang 2019
</div>