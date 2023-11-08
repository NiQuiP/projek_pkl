<?= $this->extend('user/Layout/v_template'); ?>

<?= $this->section('content'); ?>
<main class="wrapper-content-profile">
    <div class="kontainer-profile">
        <div class="wrapper-profile">
            <div class="profile-body">
                <img src="<?= base_url('uploadFoto' . '/' . $namaFile) ?>" alt="" />
            </div>
        </div>
    </div>
    <div class="wrapper-identity-profile">
        <form action="">
            <div class="identitas-profile">
                <label for="nama">Nama Lengkap : </label>
                <input type="text" name="nama_lengkap" id="nama" readonly
                    value="<?= session()->get('member_nama_lengkap') ?>" />
            </div>
            <div class="identitas-profile">
                <label for="nis">NIS/NIM : </label>
                <input type="text" name="" id="" value="<?= session()->get('member_nim_nis') ?>" readonly />
            </div>
            <div class="identitas-profile">
                <label for="username">Username : </label>
                <input type="text" name="" id="" value="<?= session()->get('member_username') ?>" readonly />
            </div>
            <div class="identitas-profile">
                <label for="jenis-kelamin">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelamin" value="<?= session()->get('member_jenis_kelamin') ?>" readonly>
            </div>
            <div class="identitas-profile">
                <label for="telepon">No. Telepon :</label>
                <input type="tel" name="no_hp" id="" value="<?= session()->get('member_no_hp') ?>" readonly />
            </div>
            <div class="identitas-profile">
                <label for="email">Email :</label>
                <input type="email" name="" id="" value="<?= session()->get('member_email') ?>" readonly />
            </div>
            <div class="identitas-profileInstansi" id="instansi">
                <div class="instansiAsal">
                    <label for="Instansi">Instansi Pendidikan :</label>
                    <input type="text" name="instansi" value="<?= session()->get('member_instansi') ?>" readonly>
                </div>
                <div class="instansiNama">
                    <label for="namaInstansi">Nama Instansi :</label>
                    <input type="text" name="nama_instansi" id="" value="<?= session()->get('member_nama_instansi') ?>"
                        readonly />
                </div>
            </div>
        </form>
    </div>
    <script src="<?= base_url('admin') ?>/js/script-pr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php if (session()->getFlashdata('swal_icon')): ?>
            Swal.fire({
                icon: '<?= session()->getFlashdata('swal_icon'); ?>',
                title: '<?= session()->getFlashdata('swal_title'); ?>',
            })
        <?php endif; ?>
    </script>
</main>

<?= $this->endSection(); ?>