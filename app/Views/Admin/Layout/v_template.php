<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        <?= $halaman; ?>
    </title>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/css/dashboard.css" />
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/fb6ebd8b45.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js">
        </script>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('admin'); ?>/css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="ml-10 sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user" aria-hidden="true"></i>
                </div>

                <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
            </a>

            <!-- Divider -->

            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= (isset($aktif_dashboard)) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= site_url('admin/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->

            <!-- Heading -->

            <li class="nav-item <?= (isset($aktif_dataAbsen)) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= site_url('admin/data-absen'); ?>">
                    <i class="fa-solid fa-file-pen" aria-hidden="true"></i>
                    <!-- <i class="fas fa-fw fa-tachometer-alt" aria-hidden="true"></i> -->
                    <span>Data Absensi</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= (isset($aktif_dataUser)) ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user" aria-hidden="true"></i>
                    <span>Data User</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">PILIHAN :</h6>
                        <a class="collapse-item" href="<?= site_url('admin/data-siswa'); ?>">Siswa</a>
                        <a class="collapse-item" href="<?= site_url('admin/data-mahasiswa'); ?>">Mahasiswa</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-school" aria-hidden="true"></i>
                    <span>Instansi Pendidikan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">PILIHAN:</h6>
                        <a class="collapse-item" href="instansiMhs.html">Sekolah</a>
                        <a class="collapse-item" href="instansiMhs.html">Universitas</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-user-tie" aria-hidden="true"></i>
                    <span>Rekap Absensi</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">PILIHAN:</h6>
                        <a class="collapse-item" href="rekapabsenSsw.html">Siswa</a>
                        <a class="collapse-item" href="rekapabsenMhs.html">Mahasiswa</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar sticky-top shadow h2">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center fs-3">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- Counter - Messages -->

                        <br />
                        <br /><br /><br />
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle rounded-circle fas fa-user" href="#" id="userDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                aria-hidden="true">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i href="" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                                        aria-hidden="true"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <nav class="navbar navbar-light bg-light">
                    <h5 class="">
                        <?= $title; ?>
                    </h5>
                </nav>
                <!-- End of Topbar -->

                <?= $this->renderSection('content'); ?>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                        <a class="btn btn-primary" href="<?= site_url('logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>





        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('admin'); ?>/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url('admin'); ?>/js/demo/datatables-demo.js"></script>

        <!-- js gue -->
        <script src="<?= base_url('admin'); ?>/js/modal-tambah.js"></script>
        <script src="<?= base_url('admin'); ?>/js/modal-edit.js"></script>

        <!-- <script src="<?= base_url('admin'); ?>/js/script-index.js">
        </script> -->
        <script>
            // untuk simpan data
            $("#tombolSimpan").on("click", function () {
                var $nama_lengkap = $("#inputNamaLengkap").val();
                var $nim_nis = $("#inputNimNis").val();
                var $username = $("#inputUsername").val();
                var $gender = $("#inputGender").val();
                var $no_hp = $("#inputNoHP").val();
                var $email = $("#inputEmail").val();
                var $instansi = $("#inputInstansi").val();
                var $nama_instansi = $("#inputNamaInstansi").val();

                $.ajax({
                    url: "<?= site_url('admin/admin/tambahUser'); ?>",
                    type: "POST",
                    data: {
                        nama_lengkap: $nama_lengkap,
                        nim_nis: $nim_nis,
                        username: $username,
                        gender: $gender,
                        no_hp: $no_hp,
                        email: $email,
                        instansi: $instansi,
                        nama_instansi: $nama_instansi,
                    },
                    success: function (hasil) {
                        var $obj = $.parseJSON(hasil);
                        // jika ada error
                        if ($obj.error) {
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

            // UNTUK EDIT DATA
            $("#tombolEdit").on("click", function () {
                var $id = $("#inputId").val();
                var $nama_lengkap = $("#editNamaLengkap").val();
                var $nim_nis = $("#editNimNis").val();
                var $username = $("#editUsername").val();
                var $gender = $("#editGender").val();
                var $no_hp = $("#editNoHP").val();
                var $email = $("#editEmail").val();
                var $instansi = $("#editInstansi").val();
                var $nama_instansi = $("#editNamaInstansi").val();

                $.ajax({
                    url: "<?= site_url('admin/admin/editUserModal'); ?>",
                    type: "POST",
                    data: {
                        id: $id,
                        edit_nama_lengkap: $nama_lengkap,
                        edit_nim_nis: $nim_nis,
                        edit_username: $username,
                        edit_gender: $gender,
                        edit_no_hp: $no_hp,
                        edit_email: $email,
                        edit_instansi: $instansi,
                        edit_nama_instansi: $nama_instansi,
                    },
                    dataType: "json",
                    success: function (response) {
                        // jika ada error
                        if (response.error) {
                            $(".sukses").hide();

                            if (response.error.edit_nama_lengkap) {
                                $("#editNamaLengkap").addClass("is-invalid");
                                $(".errorEdit_nama_lengkap").html(response.error.edit_nama_lengkap);
                            }
                            if (response.error.edit_nim_nis) {
                                $("#editNimNis").addClass("is-invalid");
                                $(".errorEdit_nim_nis").html(response.error.edit_nim_nis);
                            }
                            if (response.error.edit_username) {
                                $("#editUsername").addClass("is-invalid");
                                $(".errorEdit_username").html(response.error.edit_username);
                            }
                            if (response.error.edit_gender) {
                                $("#editGender").addClass("is-invalid");
                                $(".errorEdit_gender").html(response.error.edit_gender);
                            }
                            if (response.error.edit_no_hp) {
                                $("#editNoHP").addClass("is-invalid");
                                $(".errorEdit_no_hp").html(response.error.edit_no_hp);
                            }
                            if (response.error.edit_email) {
                                $("#editEmail").addClass("is-invalid");
                                $(".errorEdit_email").html(response.error.edit_email);
                            }
                            if (response.error.edit_instansi) {
                                $("#editInstansi").addClass("is-invalid");
                                $(".errorEdit_instansi").html(response.error.edit_instansi);
                            }
                            if (response.error.edit_nama_instansi) {
                                $("#editNamaInstansi").addClass("is-invalid");
                                $(".errorEdit_nama_instansi").html(response.error.edit_nama_instansi);
                            }
                            // value
                        } else if (response.sukses == true) {
                            /**  jika sukses */
                            refresh();
                        }
                    },
                });
                hapusValidasiEdit();
            });

            function hapus($id) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?= site_url('admin/admin/hapus') ?>/" + $id;
                    }
                });
            }

            function edit($id) {
                $.ajax({
                    url: "<?= site_url('admin/admin/editUser') ?>/" + $id,
                    type: "GET",
                    success: function (hasil) {
                        var $obj = $.parseJSON(hasil);
                        if ($obj.id != "") {
                            $("#inputId").val($obj.member_id);
                            $("#editNamaLengkap").val($obj.nama_lengkap);
                            $("#editNimNis").val($obj.nim_nis);
                            $("#editUsername").val($obj.username);
                            $("#editGender").val($obj.jenis_kelamin);
                            $("#editNoHP").val($obj.no_hp);
                            $("#editEmail").val($obj.email);
                            $("#editInstansi").val($obj.instansi_pendidikan);
                            $("#editNamaInstansi").val($obj.nama_instansi);
                        }
                    },
                });
            }
        </script>

</body>

</html>