<?= $this->extend('user/layout/v_template'); ?>

<?= $this->section('content'); ?>

<main class="wrapper-content-setting">
    <?php $namaFile = session()->get('member_foto') ?>
    <div class="kontainer-profile">
        <div class="wrapper-profile-setting">
            <div class="profile-body">
                <div class="display_image">
                    <div class="tampil" id="display_image"></div>
                </div>
            </div>
            <div class="text">
                <label for="upload" class="uploud-image">Pilih Gambar</label>
            </div>
        </div>
    </div>
    <div class="wrapper-identity-setting">
        <?php $validation = \Config\Services::validation() ?>
        <form action="<?= route_to('/setting'); ?>" method="post" enctype="multipart/form-data">
            <!-- input file foto -->
            <input name="foto_profile" type="file" id="upload" accept=".png, .jpg, .jpeg" style="visibility: hidden" />
            <div class="identitas-setting">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email"
                    class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                    value="<?= (isset($email)) ? $email : '', set_value('email') ?>" />
                <div class="invalid-feedbak">
                    <h3>
                        <?= ($validation->getError('email')); ?>
                    </h3>
                </div>
            </div>

            <div class="identitas-setting">
                <label for="username">Username : </label>
                <input type="text" name="username" id="username"
                    class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>"
                    value="<?= (isset($username)) ? $username : '', set_value('username') ?>" />
                <div class="invalid-feedbak">
                    <h3>
                        <?= ($validation->getError('username')); ?>
                    </h3>
                </div>
            </div>
            <div class="identitas-setting">
                <label for="password_old">Current Password : </label>
                <input type="password"
                    placeholder="Masukkan Current Password untuk mengganti email atau password baru :"
                    name="password_old" id="password_old"
                    class="form-control <?= ($validation->hasError('password_old')) ?>" />
                <div class="invalid-feedbak">
                    <h3>
                        <?= ($validation->getError('password_old')); ?>
                    </h3>
                </div>
            </div>
            <div class="identitas-setting">
                <label for="password_new">New Password : </label>
                <input type="password" name="password_new" id="password_new"
                    class="form-control <?= ($validation->hasError('password_new')) ?>"
                    value="<?= set_value('password_new'); ?>" />
                <div class="invalid-feedbak">
                    <h3>
                        <?= ($validation->getError('password_new')); ?>
                    </h3>
                </div>
            </div>
            <div class="identitas-setting">
                <label for="konfirmasi_password_new ">Repeat New Password:</label>
                <input type="password" name="konfirmasi_password_new" id="konfirmasi_password_new"
                    class="form-control <?= ($validation->hasError('konfirmasi_password_new')) ?>" />
                <div class="invalid-feedbak">
                    <h3>
                        <?= ($validation->getError('konfirmasi_password_new')); ?>
                    </h3>
                </div>
            </div>
            <input type="submit" name="submit" value="Save" class="button">
    </div>
    </form>
    </div>
    <script src="<?= base_url('admin') ?>/js/script-prvcy.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php if (session()->getFlashdata('swal_icon')): ?>
            Swal.fire({
                icon: '<?= session()->getFlashdata('swal_icon'); ?>',
                title: '<?= session()->getFlashdata('swal_title'); ?>',
            })
        <?php endif; ?>

        // Choese image
        let display = document.getElementById("display_image");
        let display_h = document.getElementById("display_image_h");
        let input = document.querySelector("#upload");
        let submit = document.getElementsByClassName("submit");
        let display_c = document.querySelector("#display_c");

        input.addEventListener("change", () => {
            let reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.addEventListener("load", () => {
                display.innerHTML = `<img src=${reader.result} alt='' width="200px"" id="display_c"/>`;
            });
        });
    </script>
</main>
<?= $this->endSection(); ?>