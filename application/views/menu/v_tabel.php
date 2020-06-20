<?php $this->load->view('templates/_partials/header.php') ?>


<!-- memuat sidebar -->
<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom:80px">
            <div class="container-fluid">
                <h1 class="mt-2">Rumah Sakit Rujukan Covid-19 di Jawa Tengah</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Rumah Sakit</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Rumah Sakit</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Rumah Sakit</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($d as $key => $d) { ?>
                                        <tr>
                                            <td data-field="user"><?php echo $no++ ?></td>
                                            <td data-field="nama"><?php echo $d->nama_rs ?></td>
                                            <td data-field="alamat"><?php echo $d->alamat ?></td>
                                            <td data-field="telp"><?php echo $d->telp ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php $this->load->view('templates/_partials/footer.php'); ?>

<!-- JS untuk tooltip -->
<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


<!-- Modal Delete Confirmation-->
</body>

</html>