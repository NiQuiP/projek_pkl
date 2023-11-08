<div class="modal fade" id="modalAbsen" tabindex="-1" role="dialog" aria-labelledby="modalAbsenLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAbsenLabel">Tambah Absen User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="tombol-tutup-absen">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="identitas">
                    <label for="tanggal">Tanggal : </label>
                    <input type="text" name="tanggal" class="date form-control" data-toggle="datepicker"
                        autocomplete="none" />
                    <div class="invalid-feedback">

                    </div>
                </div>
                <div class="identitas">
                    <label for="inputNamaLengkap">Nama Lengkap : </label>
                    <input type="text" name="nama_lengkap" class="form-control" id="inputNamaLengkap" />
                    <div class="invalid-feedback errorNama_lengkap">

                    </div>
                </div>
                <div class="identitas">
                    <label for="inputJenisUser">SSW / MHS : </label>
                    <select class="custom-select" id="inputJenisUser" name="jenis_user">
                        <option selected hidden></option>
                        <option value="Siswa">SSW</option>
                        <option value="Mahasiswa">MHS</option>
                    </select>
                    <div class="invalid-feedback errorJenis_user">

                    </div>
                </div>
                <div class="identitas">
                    <label for="inputStatus">Status : </label>
                    <input type="text" name="status" class="form-control" id="inputStatus" />
                    <div class="invalid-feedback errorStatus">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    id="tombol-tutup-absen">Close</button>
                <button type="button" class="btn btn-danger bg-gradient-danger" id="tombol-checkin">Check-Out</button>
                <button type="button" class="btn btn-info bg-gradient-info" id="tombol-checkout">Check-In</button>
            </div>
        </div>
    </div>
</div>