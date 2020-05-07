<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <b>FORM TAMBAH DATA WARGA</b>
                </div>
                <div class="card-body">

                    <form action="/warga/update" method="post">
                        <div class="form-group">
                            <label for="nik">NOMOR INDUK KEPENDUDUKAN (NIK)</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $tdata->NIK; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kk">NOMOR KARTU KELUARGA (KK)</label>
                            <input type="text" class="form-control" id="kk" name="kk" value="<?php echo $tdata->KK; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $tdata->NAMA; ?>">
                        </div>
                        <div class="form-group">
                            <label for="klmn">JENIS KELAMIN</label>
                            <select class="form-control" id="klmn" name="klmn">
                                <option value="-">-</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dsn">DUSUN</label>
                            <select class="form-control" id="dsn" name="dsn">
                                <option value="DUSUN I">DUSUN I</option>
                                <option value="DUSUN II">DUSUN II</option>
                                <option value="DUSUN III">DUSUN III</option>
                                <option value="DUSUN IV">DUSUN IV</option>
                                <option value="DUSUN V">DUSUN V</option>
                                <option value="DUSUN VI">DUSUN VI</option>
                                <option value="DUSUN VII">DUSUN VII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <select class="form-control" id="rt" name="rt">
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                                <option value="004">004</option>
                                <option value="005">005</option>
                                <option value="006">006</option>
                                <option value="007">007</option>
                                <option value="008">008</option>
                                <option value="009">009</option>
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="012">012</option>
                            </select>
                            <label for="dsn">RW</label>
                            <select class="form-control" id="rw" name="rw">
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                                <option value="004">004</option>
                                <option value="005">005</option>
                                <option value="006">006</option>
                                <option value="007">007</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rm">NO. RUMAH</label>
                            <input type="text" class="form-control" id="rm" name="rm" value="<?php echo $tdata->NO_RM; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tl">TEMPAT LAHIR</label>
                            <input type="text" class="form-control" id="tl" name="tl" value="<?php echo $tdata->TPT_LAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl">TANGGAL LAHIR</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="tgl" name="tgl" value="<?php echo $tdata->TGL_LAHIR; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama">AGAMA</label>
                            <select class="form-control" id="agama" name="agama">
                                <option value="ISLAM">ISLAM</option>
                                <option value="PROTESTAN">PROTESTAN</option>
                                <option value="KATOLIK">KATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDDHA">BUDDHA</option>
                                <option value="KONG HU CU">KONG HU CU</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">PENDIDIKAN TERAKHIR</label>
                            <select class="form-control" id="pendidikan" name="pendidikan">
                                <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                                <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                <option value="SLTP/SEDARAJAT">SLTP/SEDARAJAT</option>
                                <option value="SLTA/SEDARAJAT">SLTA/SEDARAJAT</option>
                                <option value="DII/DIII/SEDARAJAT">DII/DIII/SEDARAJAT</option>
                                <option value="SI/SII/SIII/SEDARAJAT">SI/SII/SIII/SEDARAJAT</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">PEKERJAAN</label>
                            <select class="form-control" id="pekerjaan" name="pekerjaan">
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="PNS">PNS</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="goldar">GOLONGAN DARAH</label>
                            <select class="form-control" id="goldar" name="goldar">
                                <option value="-">-</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">STATUS PERKAWINAN</label>
                            <select class="form-control" id="status" name="status">
                                <option value="BELUM KAWIN">BELUM KAWIN</option>
                                <option value="KAWIN">KAWIN</option>
                                <option value="KAWIN BELUM TERCATAT">KAWIN BELUM TERCATAT</option>
                                <option value="CERAI HIDUP">CERAI HIDUP</option>
                                <option value="CERAI MATI">CERAI MATI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tpk">TANGGAL PERKAWINAN</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="<?php echo $tdata->TGL_PERKAWINAN; ?>" id="tpk" name="tpk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shdk">STATUS HIBUNGAN DALAM KELUARGA</label>
                            <select class="form-control" id="shdk" name="shdk">
                                <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                                <option value="ISTRI">ISTERI</option>
                                <option value="ANAK">ANAK</option>
                                <option value="MENANTU">MENANTU</option>
                                <option value="CUCU">CUCU</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kwg">KEWARGANEGARAAN</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kwg" id="wni" value="WNI">
                                <label class="form-check-label" for="wni">WNI</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kwg" id="wna" value="WNA">
                                <label class="form-check-label" for="wna">WNA</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paspor">No. PASPOR</label>
                            <input type="text" class="form-control" id="paspor" name="paspor" value="<?php echo $tdata->PASPOR; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kitap">No. KITAP</label>
                            <input type="text" class="form-control" id="kitap" name="kitap" value="<?php echo $tdata->KITAP; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ayah">NAMA AYAH</label>
                            <input type="text" class="form-control" id="ayah" name="ayah" value="<?php echo $tdata->AYAH; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ibu">NAMA IBU</label>
                            <input type="text" class="form-control" id="ibu" name="ibu" value="<?php echo $tdata->IBU; ?>">
                        </div>
                        <button class="btn btn-success float-right" type="submit" name="ubah" onclick="window.location.replace('/warga');">UBAH DATA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>