<div class="text-center">
    <h1>Data Berobat</h1>
    <hr>
    <a href="<?= base_url('berobat/tambah') ?>" class="btn btn-success">Tambah Data</a>
</div>

<div class="table-responsive mt-3">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Transaksi</th>
                <th scope="col">Tanggal Berobat</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Usia</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Nama Poli</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Biaya Administrasi</th>
                <th scope="col" class="aksi-column">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($berobat as $bt) : ?>
               
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $bt->no_transaksi; ?></td>
                <td><?= $bt->tangggal_berobat; ?></td>
                <td><?= $bt->nama_pasien; ?></td>
                <td><?= $bt->usia; ?></td>
                <td><?= $bt->jenis_kelamin; ?></td>
                <td><?= $bt->keluhan_pasien; ?></td>
                <td>
                    <?php foreach ($poli as $p) : ?>
                        <?php if ($p->id_poli == $bt->id_poli) : ?>
                            <?= $p->nama_poli ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td><?= $bt->nama_dokter; ?></td>
                <td><?= $bt->biaya_admin; ?></td>
                <td>
                    <a href="<?= base_url('berobat/edit/'. $bt->no_transaksi) ?>" class="btn btn-success">Ubah</a>
                    <a href="<?= base_url('berobat/hapus/'. $bt->no_transaksi) ?>" class="btn btn-danger" onclick="return confirm('Yakin?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
