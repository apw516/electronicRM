<div class="card card-info card-outline scroll">
    <div class="card-header">
        <h3 class="card-title">RM.02.01-RJ / Rev.02 / 19 Pasien Lama</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <table class="table table-sm text-xs">
        <tr>
            <td>Tanggal & Jam Kunjungan</td>
            <td><input type="date" id="kunjungan" class="form-control form-control-sm"></td>
        </tr>
        <tr>
            <td>Tanggal & Jam Pengkajian</td>
            <td><input type="date" id="pengkajian" class="form-control form-control-sm"></td>
        </tr>
        <tr>
            <td>Keluhan Utama</td>
            <td>
                <textarea class="form-control form-control-sm" id="keluhanutama_px"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="text-center bg-secondary"><h5>Tanda tanda Vital</h5></td>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td>
                <div class="input-group date" id="tekanandarah" data-target-input="nearest">
                    <input type="text" id="tekanandarah1" class="form-control form-control-sm" />
                    <div class="input-group-append">
                        <div class="input-group-text text-xs">mmHg</div>
                    </div>
                </div>
            </td>
            <td>Frekuensi Nadi</td>
            <td>
                <div class="input-group date" id="frekuensinadi" data-target-input="nearest">
                    <input type="text" id="frekuensinadi1" class="form-control form-control-sm" />
                    <div class="input-group-append">
                        <div class="input-group-text text-xs">X / Menit</div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>Frekuensi Napas</td>
            <td>
                <div class="input-group date" id="frekuensinapas" data-target-input="nearest">
                    <input type="text" id="frekuensinapas1" name="frekuensinapas1" class="form-control form-control-sm" />
                    <div class="input-group-append">
                        <div class="input-group-text text-xs">X / Menit</div>
                    </div>
                </div>
            </td>
            <td>Suhu</td>
            <td>
                <div class="input-group date" id="suhu" data-target-input="nearest">
                    <input type="text" id="suhu1" name="suhu1" class="form-control form-control-sm" />
                    <div class="input-group-append">
                        <div class="input-group-text text-xs">C</div>
                    </div>
                </div>
            </td>
        </tr>
        <TR>
            <td colspan="4" class="text-center bg-secondary mt-3"><h5>Assesmen
                Psikologi</h5></td>
        </TR>

        <tr>
            <td>Riwayat Psikologis</td>
            <td colspan="4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input ml-2 mr-3" type="radio" name="rp" id="rp" value="Cemas">
                    <label class="form-check-label" for="inlineRadio1">Cemas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input mr-3" type="radio" name="rp" id="rp" value="Takut">
                    <label class="form-check-label" for="inlineRadio2">Takut</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input ml-2 mr-3" type="radio" name="rp" id="rp" value="Sedih">
                    <label class="form-check-label" for="inlineRadio1">Sedih</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input mr-3" type="radio" name="rp" id="rp" value="Lain-lain">
                    <label class="form-check-label" for="inlineRadio2">Lain -
                        lain</label>
                </div>
            </td>
        </tr>
        <TR>
            <td colspan="4" class="text-center bg-secondary mt-3"><h5>Assement Nyeri</h5></td>
        </TR>
        <tr>
            <td>Apakah Pasien Mengeluh Nyeri</td>
            <td colspan="4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input ml-2 mr-3" type="radio" name="keluh" id="keluh" value="Tidak">
                    <label class="form-check-label" for="inlineRadio1">Tidak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input mr-3" type="radio" name="keluh" id="keluh" value="Ya">
                    <label class="form-check-label" for="inlineRadio2">Ya</label>
                </div>
                <input type="text" class="form-control form-control-sm" placeholder="skala nyeri ...">
            </td>
        </tr>
        <TR>
            <td colspan="4" class="text-center bg-secondary mt-3"><h5>Diagnosa Keperawatan</h5></td>
        </TR>
        <tr>
            <td>Apa keluhan Pasien</td>
            <td colspan="4">
                <textarea class="form-control form-control-sm" id="diagnosa"></textarea>
            </td>
        </tr>
        <TR>
            <td colspan="4" class="text-center bg-secondary mt-3"><h5>Rencana Keperawatan</h5></td>
        </TR>
        <tr>
            <td>Rencana Keperawatan</td>
            <td colspan="4">
                <textarea class="form-control form-control-sm" id="rencana"></textarea>
            </td>
        </tr>
        <TR>
            <td colspan="4" class="text-center bg-secondary mt-3"><h5>Tindakan Keperawatan</h5></td>
        </TR>
        <tr>
            <td>Tindakan</td>
            <td colspan="4">
                <textarea class="form-control form-control-sm" id="tindakan"></textarea>
            </td>
        </tr>
        <TR>
            <td colspan="4" class="text-center bg-secondary mt-3"><h5>Evaluasi Keperawatan</h5></td>
        </TR>
        <tr>
            <td>Evaluasi</td>
            <td colspan="4">
                <textarea class="form-control form-control-sm" id="evaluasi2"></textarea>
            </td>
        </tr>
        <tr>
            <td>Tanggal & jam selesai assesmen</td>
            <td colspan="2">Nama perawat</td>
            <td>Tanda tangan</td>
        </tr>
        <tr>
            <td><textarea class="form-control"></textarea></td>
            <td colspan="2"><textarea class="form-control"></textarea></td>
            <td>
                <form method="POST" action="">
                    @csrf        
                    <div class="col-md-12">
                        <label>Signature:</label>
                        <br/>
                        <div id="sig"></div>
                        <br/><br/>
                        <button id="clear" class="btn btn-danger btn-sm">Clear</button>


                        <textarea id="signature" name="signed" style="display: none"></textarea>
                    </div>
                    <br/>
                 
                </form>
            </td>
        </tr>
    </table>
    <center>
        <button class="btn btn-success col-md-1 text-center" onclick="pasienlama()">Simpan</button>
    </center>

</div>

<script>
    function pasienlama() {
        kunjungan = $('#kunjungan').val()
        pengkajian = $('#pengkajian').val()
        keluhanutama = $('#keluhanutama_px').val()
        tekanandarah = $('#tekanandarah1').val()
        frekuensinadi = $('#frekuensinadi1').val()
        frekuensinapas = $('#frekuensinapas1').val()
        suhu =$('#suhu1').val()
        keluh = $('#keluh:Checked').val()
        diagnosa = $('#diagnosa').val()
        rencana = $('#rencana').val()
        tindakan = $('#tindakan').val()
        evaluasi = $('#evaluasi2').val()

        $.ajax({
            type: 'post',
            async: true,
            dataType: 'Json',
            data: {
                _token: "{{ csrf_token() }}",
                kunjungan,
                pengkajian, 
                keluhanutama,
                tekanandarah,
                frekuensinadi,
                frekuensinapas,
                suhu,
                keluh,
                diagnosa,
                rencana,
                tindakan,
                evaluasi,

            },
            url: '<?= route('dewasalama') ?>',
            error: function(data) {
                alert('error')
            },
            success: function(data) {}
        });

    }
</script>