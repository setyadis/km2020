<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <b>FORM TAMBAH DATA WARGA</b>
                </div>
                <div class="card-body">

                    <form action="/warga/save" method="post">
                        <div class="form-group">
                            <label for="nik">NOMOR INDUK KEPENDUDUKAN (NIK)</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>
                        <div class="form-group">
                            <label for="kk">NOMOR KARTU KELUARGA (KK)</label>
                            <input type="text" class="form-control" id="kk" name="kk">
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="agama">AGAMA</label>
                            <select class="form-control" id="agama" name="agama">
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN">KRISTEN</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                        </div>
                        <button class="btn btn-success float-right" type="submit" name="tambah" onclick="window.location.replace('/warga');">TAMBAH DATA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>