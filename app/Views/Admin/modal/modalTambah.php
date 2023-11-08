<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">+ Tambah User Baru</h5>
                <button type="button" class="close tombol-tutup" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Input ID -->
                <!-- <input name="id" type="hidden" id="inputId"> -->
                <?= form_open("admin/tambahUser"); ?>
                <!-- FOTM INPUT DATA -->
                <div class="mb-3">
                    <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="inputNamaLengkap" placeholder="">
                    <div class=" invalid-feedback errornama_lengkap">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputNimNis" class="form-label">NIM / NIS</label>
                    <input type="text" class="form-control" name="nim_nis" id="inputNimNis" placeholder="">
                    <div class="invalid-feedback errornim_nis">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" name="Username" id="inputUsername" placeholder="">
                    <div class="invalid-feedback errorusername">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputGender" class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-control" id="inputGender" onchange="updateValueG()">
                        <option value="" hidden></option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                    <div class="invalid-feedback errorgender">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputNoHP" class="form-label">No Telepon</label>
                    <input type="number" class="form-control" name="no_hp" id="inputNoHP" placeholder="">
                    <div class="invalid-feedback errorno_hp">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="">
                    <div class="invalid-feedback erroremail">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputInstansi" class="form-label">Instansi Pendidikan</label>
                    <select name="instansi" class="form-control" id="inputInstansi" onchange="updateValueI()">
                        <option value="" hidden></option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="Universitas">Universitas</option>
                    </select>
                    <div class="invalid-feedback errorinstansi">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputNamaInstansi" class="form-label">Nama Instansi</label>
                    <input type="text" class="form-control" name="nama_instansi" id="inputNamaInstansi" placeholder="">
                    <div class="invalid-feedback errornama_instansi">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary btn-simpan" id="tombolSimpan">Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>