<div class="col-md-12 mt-3">

    <div class="text-center">
        <h4>Informasi Data Penduduk</h4>
    </div>
    <div class="col-md-6 mt-3">
        <form class="user">
            <div class="form-group">
                <table>
                    <tr>
                        <form action="Cariwarga/getDataWarga" method="post">
                            <div class="form-group">
                                <td><input type="text" class="form-control form-control-user" name="keyword" placeholder="CARI NIK/KK" id="keyword"></td>
                                <td><button class="btn btn-success float-right" type="submit" name="cari" value="Cari" onclick="window.location.replace('Cariwarga/vrcariwarga');">CARI</button></td>
                            </div>
                        </form>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>