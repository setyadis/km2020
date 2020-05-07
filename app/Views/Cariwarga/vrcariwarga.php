<div class="container">
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 ">
                    <div class="col-md-6 mt-3">
                        <form class="user">
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <form action="Cariwarga/vcari" method="post">
                                            <div class="form-group">
                                                <td><input type="text" class="form-control form-control-user" name="keyword" placeholder="CARI NIK/KK" id="keyword"></td>
                                                <td><button class="btn btn-success float-right" type="submit" name="cari" value="Cari" onclick="window.location.replace('Cariwarga/vcari');">CARI</button></td>
                                            </div>
                                        </form>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-3">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">NIK</th>
                                            <th scope="col">KK</th>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">J. KELAMIN</th>
                                            <th scope="col">AGAMA</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">DUSSUN</th>
                                            <th scope="col">PEKERJAAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tdata as $key) : ?>
                                            <tr>
                                                <td><?= $key['NIK']; ?></td>
                                                <td><?= $key['KK']; ?></td>
                                                <td><?= $key['NAMA']; ?></td>
                                                <td><?= $key['KELAMIN']; ?></td>
                                                <td><?= $key['AGAMA']; ?></td>
                                                <td><?= $key['STS_PERKAWINAN']; ?></td>
                                                <td><?= $key['DUSUN']; ?></td>
                                                <td><?= $key['PEKERJAAN']; ?></td>
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