</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= date('Y'); ?> ADYATMA LAKATJINDA F55116001 Tadulako University</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">â€”</span>
                </button>
            </div>
            <div class="modal-body">Silahkan Klik Tombol "Keluar" Dibawah Jika Anda Ingin Keluar Dari Aplikasi</div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="<?= base_url(); ?>/logout">Keluar-></a>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(function() {
        if ($("#server-side-table-ssp").length > 0) {

            $("#server-side-table-ssp").DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "<?php echo site_url('list-data') ?>",
            });
        }
    });
</script>

<?php
$db      = \Config\Database::connect();
$builder = $db->table('master_order');

for ($i = 1; $i < 13; $i++) {
    $builder->where('bulan =', $i);
    // $builder->where('id_outlet =', 53);
    $builder->where('tahun =', 2019);
    $builder->selectSum('order_55');
    $query = $builder->get();
    foreach ($query->getResult() as $row) {
        $d = ',';
        $json = $row->order_55;
    }
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>


<script type="text/javascript">
    const chartSiswa = document.getElementById('cshart5').getContext('2d');
    const chart = new Chart(chartSiswa, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            // data tahun sebagai label dari chart
            datasets: [{
                label: 'Jumlah Order 5,5 Kg',
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [<?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('master_order');$thn = date('Y');
                        for ($i = 1; $i < 13; $i++) {
                            $builder->where('bulan =', $i);
                            // $builder->where('id_outlet =', 53);
                            $builder->where('tahun =', $thn);
                            $builder->selectSum('order_55');
                            $query = $builder->get();
                            foreach ($query->getResultArray() as $row) {
                                $data = $row['order_55'];
                                echo $data . ',';
                            }
                        }
                        ?>],
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },

            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000,
                        maxTicksLimit: 5,
                        padding: 10,

                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


<script>
        $(function () {
            var ctx = document.getElementById("chart12").getContext('2d');
            var data = {
                datasets: [{
                    data: [<?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('master_order');$thn = date('Y');
                        for ($i = 1; $i < 13; $i++) {
                            $builder->where('bulan =', $i);
                            // $builder->where('id_outlet =', 53);
                            $builder->where('tahun =', $thn);
                            $builder->selectSum('order_12');
                            $query = $builder->get();
                            foreach ($query->getResultArray() as $row) {
                                $data = $row['order_12'];
                                echo $data . ',';
                            }
                        }
                        ?>],
                         label: 'Jumlah Transaksi 12 Kg',
                         backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                }],
                options: {
            responsive: false,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },

            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000,
                        maxTicksLimit: 5,
                        padding: 10,

                        beginAtZero: true
                    }
                }]
            }
        },
                labels: ["January", "February", "March", "April", "May", "June", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
           
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });

            var ctx_2 = document.getElementById("chart5").getContext('2d');
            var data_2 = {
                datasets: [{
                    data: [<?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('master_order');$thn = date('Y');
                        for ($i = 1; $i < 13; $i++) {
                            $builder->where('bulan =', $i);
                            // $builder->where('id_outlet =', 53);
                            $builder->where('tahun =', $thn);
                            $builder->selectSum('order_55');
                            $query = $builder->get();
                            foreach ($query->getResultArray() as $row) {
                                $data = $row['order_55'];
                                echo $data . ',';
                            }
                        }
                        ?>],
                         label: 'Jumlah Transaksi 5,5 Kg',
                         backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                }],
                options: {
            responsive: false,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },

            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000,
                        maxTicksLimit: 5,
                        padding: 10,

                        beginAtZero: true
                    }
                }]
            }
        },
                labels: ["January", "February", "March", "April", "May", "June", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
           
            };
            var myDoughnutChart_2 = new Chart(ctx_2, {
                type: 'bar',
                data: data_2,
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });
        });

    </script>


<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/vendor/chart.js/Chart.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script>


<script src="<?= base_url(); ?>/js/demo/chart-bar-demo.js"></script>
</body>

</html>