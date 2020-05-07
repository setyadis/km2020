<div class="container">
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('warga/vtambah_warga'); ?>" class="btn btn-primary">Tambah Data</a>
                            <div class="row mt-3">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">J. KELAMIN</th>
                                            <th scope="col">AGAMA</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">DUSSUN</th>
                                            <th scope="col">PEKERJAAN</th>
                                            <th scope="col"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tdata as $key) : ?>
                                            <tr>
                                                <td><?= $key['NAMA']; ?></td>
                                                <td><?= $key['KELAMIN']; ?></td>
                                                <td><?= $key['AGAMA']; ?></td>
                                                <td><?= $key['STS_PERKAWINAN']; ?></td>
                                                <td><?= $key['DUSUN']; ?></td>
                                                <td><?= $key['PEKERJAAN']; ?></td>
                                                <td>
                                                    <a class="badge badge-primary" href="/warga/vedit_warga/<?php echo $key['NIK']; ?>">Detail
                                                        <a class="badge badge-success" href="/warga/vedit_warga/<?php echo $key['NIK']; ?>">Ubah
                                                            <a class="badge badge-danger" onclick="return confirm('Yakin akan dihapus?');" href="/warga/hapus/<?php echo $key['NIK']; ?>">Hapus

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>