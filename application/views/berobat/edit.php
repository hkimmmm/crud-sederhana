<div class="container">
    <div class="row justify-content">
        <div class="col-lg-8">
        <form action="<?php echo base_url('berobat/prosesEdit/' . $berobat->no_transaksi); ?>" method="POST">
                <div class="card border-0 rounded-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Form Edit</h4>
                    </div>
                    <div class="card-body shadow">
                        <div class="form-group">
                            <label for="no_transaksi" class="mb-1">Nomor Transaksi</label>
                            <input type="text" name="no_transaksi" class="form-control" id="no_transaksi" value="<?= $berobat->no_transaksi ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ID Pasien</label>
                            <select name="id_pasien" class="form-control" required>
                                <option value="">Pilih Id Pasien</option>
                                <?php foreach ($pasien as $row) : ?>
                                    <option value="<?= $row->id_pasien ?>" <?php if ($berobat->id_pasien == $row->id_pasien) echo "selected"; ?>>
                                        <?= $row->id_pasien ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Berobat</label>
                            <input type="date" name="tangggal_berobat" class="form-control" value="<?= $berobat->tangggal_berobat ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-1">ID Dokter</label>
                            <select class="form-control" name="id_dokter" required>
                                <option value="">Pilih ID Dokter</option>
                                <?php foreach ($dokter as $row) : ?>
                                    <option value="<?= $row->id_dokter ?>" <?php if ($berobat->id_dokter == $row->id_dokter) echo "selected"; ?>>
                                        <?= $row->id_dokter ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="no_transaksi" class="mb-1">Keluhan Pasien</label>
                            <input type="text" name="keluhan_pasien" class="form-control" value="<?= $berobat->keluhan_pasien ?>" placeholder="Berikan Keluhan Anda">
                        </div>

                        <div class="form-group">
                            <label for="biaya_admin" class="mb-1">Biaya Admin</label>
                            <input type="text" name="biaya_admin" class="form-control" value="<?= $berobat->biaya_admin ?>" placeholder="Masukkan Biaya Admin">
                        </div>
                        
                        <button type="submit" name="edit" class="btn btn-primary mt-3 btn-block">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
