<div class="col-md-6">
    <div class="card-body">
        <div class="row">
            <table class="table ">
                <tbody>
                    <?php
                    foreach ($sumkk as $row) : ?>
                        <tr>
                            <td colspan="">Total KK</td>
                            <td><?= $row->SUM_KK; ?></td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>