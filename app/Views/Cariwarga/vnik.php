<div class="col-md-6 mt-3">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h5>DATA JUMLAH PENDUDUK</h5>
            </div>
            <div class="row mt-3">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">DUSUN</th>
                            <th scope="col">JUMLAH NIK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($totalnik as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row->DUSUN; ?></td>
                                <td><?= $row->TOTAL_NIK; ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>