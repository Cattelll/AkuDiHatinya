<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laporan Hipertensi</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/login/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/login/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/login/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('partials/sidebar') ?>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?= $this->include('partials/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Laporan Diabetes</h1>
                    <p class="mb-4">Berikut adalah data laporan pemantauan pasien dengan diabetes.</p>

                    <!-- DataTables Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Laporan Diabetes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Laporan</th>
                                            <th>Nama Pasien</th>
                                            <th>Puskesmas</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Kunjungan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($laporan_dm as $row): ?>
                                            <tr>
                                                <td><?= $row->id_laporan ?></td>
                                                <td><?= $row->nama_pasien ?></td>
                                                <td><?= $row->id_puskesmas ?></td>
                                                <td><?= $row->bulan ?></td>
                                                <td><?= $row->tahun ?></td>
                                                <td><?= $row->kunjungan_ceklist ? 'Ya' : 'Tidak' ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?= $this->include('partials/footer') ?>
            <!-- End of Footer -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/login/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/login/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript -->
    <script src="<?= base_url('assets/login/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?= base_url('assets/login/js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/login/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/login/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>