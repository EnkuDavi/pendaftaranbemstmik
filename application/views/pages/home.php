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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
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
                    Pemilihan Calon Anggota BEM STMIK Pamitran Karawang
                </div>
                <br>
                <h6 class="text-center">Kandidat Calon Anggota BEM Periode 2020-2021</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Motivasi</th>
                            <th scope="col">Pandangan</th>
                            <th scope="col">Pendapat</th>
                            <th scope="col">Kepribadian</th>
                            <th scope="col">Visi & Misi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kandidat as $kandidats) : ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $kandidats['nama']; ?></td>
                                <td><?php echo $kandidats['kelas']; ?></td>
                                <td><?php echo $kandidats['motivasi']; ?></td>
                                <td><?php echo $kandidats['pandangan']; ?></td>
                                <td><?php echo $kandidats['pendapat']; ?></td>
                                <td><?php echo $kandidats['self']; ?></td>
                                <td><?php echo $kandidats['visi_misi']; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="<?php echo base_url('login/registration'); ?>">
                    <button type="button" class="btn btn-primary mx-auto">Klik untuk mendaftar sebagai Kandidat Anggota BEM</button>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- akhir section -->
<br>
<hr>