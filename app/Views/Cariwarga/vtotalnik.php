<div class="col-md-6">
    <div class="card-body">
        <div class="row">
            <table class="table ">
                <tbody>
                    <?php
                    foreach ($sumnik as $row) : ?>
                        <tr>
                            <td colspan="2">Total NIK</td>
                            <td><?= $row->TOTAL_NIK; ?></td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>