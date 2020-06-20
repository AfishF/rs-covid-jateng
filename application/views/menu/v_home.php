<?php $this->load->view('templates/_partials/header.php') ?>

<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom: 30px">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: right"> Sistem Informasi</h1>
                <p style="text-align: right; color: #808080 ">Lokasi Rumah Sakit Rujukan COVID-19 di Jawa Tengah</p>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Home</li>
                </ol>
                <div class="card" style="width: 18rem">
                    <img src="<?= base_url('assets/img/thumbnail2.jpg') ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Lokasi Rumah Sakit</h5>
                        <p class="card-text">Ini merupakan titik Lokasi Rumah Sakit rujukan COVID-19 yang tersebar di Jawa Tengah</p>
                        <a href="<?= base_url('map'); ?>" class="btn btn-secondary">Go to Locations</a>
                    </div>
                </div>
            </div>

        </main>
        <?php $this->load->view('templates/_partials/footer'); ?>
    </div>
</div>
</body>

</html>