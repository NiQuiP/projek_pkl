<?= $this->extend('admin/layout/v_template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->

<div class="container-fluid">
    <h3 class="mt-3 text-dark font-weight-bold">Data Absensi</h3>
    <div class="card">
        <div class="card-body m-auto" style="width: 95%">
            <div class="row justify-content-around">
                <div class="col-sm-4 col-md-4">
                    <div class="form-group basic mb-0 my-2">
                        <div class="input-wrapper">
                            <div class="input-group date">
                                <input type="text" class="form-control start_date" id="Fdatepicker" name="start_date"
                                    placeholder="Tanggal Awal" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 my-2">
                    <div class="form-group basic mb-0">
                        <div class="input-wrapper">
                            <div class="input-group date">
                                <input type="text" class="form-control end_date" id="Ldatepicker" name="end_date"
                                    placeholder="Tanggal Akhir" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 my-2 d-flex justify-content-around">
                    <button type="button" class="but-gap btn btn-warning bg-gradient-warning col-4"><i
                            class="fa-solid fa-print"></i>Cetak</button>
                    <button type="button" class="but-gap btn btn-primary bg-gradient-primary col-6" data-toggle="modal"
                        data-target="#modalAbsen"><i class="fa-solid fa-pen"></i>Tambah Absen</button>
                    <?php include(APPPATH . 'Views/admin/modal/modalAbsen.php') ?>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="title text-dark px-1 rounded-top mt-5 pl-3">Data Absensi</div>
    <div class="card shadow mb-2">
        <div class="card-body border-bottom">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No .</th>
                            <th>Tanggal</th>
                            <th>Nama Lengkap</th>
                            <th>SSW / MHS</th>
                            <th>Check-In</th>
                            <th>Status</th>
                            <th>Longitude / Latitude</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataAbsen as $v) { ?>
                            <tr>
                                <td class="text-center">
                                    <?= $nomor; ?>
                                </td>
                                <td>
                                    <?= tanggal_indo($v['waktu_absen']); ?>
                                </td>
                                <td>
                                    <?= $v['nama_lengkap']; ?>
                                </td>
                                <td>
                                    <?= $v['jenis_user']; ?>
                                </td>
                                <td>
                                    <?= $v['checkin_time']; ?>
                                </td>
                                <td>
                                    <?= $v['status']; ?>
                                </td>
                                <td>

                                    <?= $v['lokasi']; ?>
                                </td>
                                <td>
                                    <?= $v['checkout_time']; ?>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $("#tombolCheckin").on("click", function () {
        var $nama_lengkap = $("#inputNamaLengkap").val();
        var $jenis_user = $("#inputJenisUser").val();
        var $status = $("#inputStatus").val();

        $.ajax({
            url: "<?= site_url('admin/admin/tambahAbsen'); ?>",
            type: "POST",
            data: {
                nama_lengkap: $nama_lengkap,
                $jenis_user: $jenis_user,
                status: $status
            },
            success: function (response) {
                // jika ada error
                if (response.error) {
                    $(".sukses").hide();

                    if ($obj.error.nama_lengkap) {
                        $("#inputNamaLengkap").addClass("is-invalid");
                        $(".errornama_lengkap").html($obj.error.nama_lengkap);
                    }
                    if ($obj.error.nim_nis) {
                        $("#inputNimNis").addClass("is-invalid");
                        $(".errornim_nis").html($obj.error.nim_nis);
                    }
                    if ($obj.error.username) {
                        $("#inputUsername").addClass("is-invalid");
                        $(".errorusername").html($obj.error.username);
                    }
                    if ($obj.error.gender) {
                        $("#inputGender").addClass("is-invalid");
                        $(".errorgender").html($obj.error.gender);
                    }
                    if ($obj.error.no_hp) {
                        $("#inputNoHP").addClass("is-invalid");
                        $(".errorno_hp").html($obj.error.no_hp);
                    }
                    if ($obj.error.email) {
                        $("#inputEmail").addClass("is-invalid");
                        $(".erroremail").html($obj.error.email);
                    }
                    if ($obj.error.instansi) {
                        $("#inputInstansi").addClass("is-invalid");
                        $(".errorinstansi").html($obj.error.instansi);
                    }
                    if ($obj.error.nama_instansi) {
                        $("#inputNamaInstansi").addClass("is-invalid");
                        $(".errornama_instansi").html($obj.error.nama_instansi);
                    }

                    // value
                } else if ($obj.sukses == true) {
                    /**  jika sukses */
                    refresh();
                }
            },
        });
        hapusValidasi();
    });
</script>
<!-- End of Main Content -->
<?= $this->endSection(); ?>