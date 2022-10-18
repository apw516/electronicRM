<div class="card scroll container">
    <div class="card-header bg-light">Order Radiologi
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <form action="" name="formradiologi">
        <div class="card-body">
            <table class="table table-bordered table-sm text-xs">
                <tr>
                    <td>Tanggal</td>
                    <td><input type="text" readonly class="form-control" id="tglmasuk" name="tglmasuk" value="{{ $tglmasuk }}"></td>
                    <td>Dokter</td>
                    <td><input type="text" readonly class="form-control" id="dokter" name="dokter" value=""></td>
                </tr>
                <tr>
                    <td>RM</td>
                    <td><input type="text" readonly class="form-control" id="rm" name="rm" value="{{ $rm }}"></td>
                    <td>PoliKlinik</td>
                    <td><input type="text" readonly class="form-control" id="unit" name="unit" value="{{ $unit }}"></td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td><input type="text" readonly class="form-control" id="nama" name="nama" value="{{ $nama }}"></td>
                    <td>Diagnosa</td>
                    <td><input type="text" readonly class="form-control"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" readonly class="form-control" id="umur" name="umur" value="{{ $umur }}"></td>
                    <td>Jenis kelamin</td>
                    <td><input type="text" readonly class="form-control" id="jk" name="jk" value=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea type="text" readonly class="form-control" id="alamat" name="alamat" >{{ $alamat }}</textarea>
                    </td>
                </tr>
            </table>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">RONTGEN</div>
                        <div class="card-body">
                            <p class="text-bold">Foto Polos</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="11" value="Thorax PA" id="11">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax PA <a class="text-right">(11)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=" Thorax Lateral" name="12" id="12">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax Lateral <a class="text-right">(12)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Waters" name="13" id="13">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Waters <a class="text-right">(13)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="schuters" id="14" name="14">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Schuters <a class="text-right">(14)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="BNO / Abdomen" id="15" name="15">
                                            <label class="form-check-label" for="defaultCheck1">
                                                BNO / Abdomen <a class="text-right">(15)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Panoramic" id="16" name="16">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Panoramic <a class="text-right">(16)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas" id="17" name="17">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas <a class="text-right">(17)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="rontgen_lain" id="rontgen_lain" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Persendian" id="18" name="18">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Persendian <a class="text-right">(18)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="19" id="19" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vertebrae" id="110" name="110">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Vertebrae <a class="text-right">(110)</a>
                                            </label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Cervical" id="111" name="111">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cervical<a class="text-right">(111)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Thoracalis" id="112" name="112">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thoracalis<a class="text-right">(112)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Lumbal" id="113" name="113">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lumbal<a class="text-right">(113)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Lumbosacral" id="114" name="114">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lumbosacral<a class="text-right">(114)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=" Schedel AP / Lat" name="115" id=" 115">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Schedel AP / Lat<a class="text-right">(115)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Pelvis" id="116" name="116">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Pelvis<a class="text-right">(116)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lainya" id="117" name="117" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain-lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="118" id="118"></td>
                                </tr>
                            </table>
                            <p class="text-bold">Foto Kontras</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="BNO - IVP" id="20" name="20">
                                            <label class="form-check-label" for="defaultCheck1">
                                                BNO - IVP<a class="text-right">(20)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="OMD" id="21" name="21">
                                            <label class="form-check-label" for="defaultCheck1">
                                                OMD<a class="text-right">(21)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oeshophagus" id="22" name="22">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Oeshophagus<a class="text-right">(22)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Colon inloop" id="23" name="23">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Colon inloop<a class="text-right">(23)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Urethrography" id="24" name="24">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Urethrography<a class="text-right">(24)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Urethrocystography" id="25" name="25">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Urethrocystography<a class="text-right">(25)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Fistulography" id="26" name="26">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Fistulography<a class="text-right">(26)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Appendikogram" id="27" name="27">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Appendikogram<a class="text-right">(27)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="lain-lain" id="28" name="28" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain ...
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><Input class="form-control"></Input></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">CT-SCAN</div>
                        <div class="card-body">
                            <p class="text-bold">CT - Scan Non Kontras</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kepala" id="30" name="30">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Kepala<a class="text-right">(30)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Abdomen" id="31" name="31">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Abdomen<a class="text-right">(31)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thorax" id="32" name="32">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax<a class="text-right">(32)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vertebrae" id="33" name="33">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Vertebrae<a class="text-right">(33)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Atas" id="34" name="34">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Atas<a class="text-right">(34)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Bawah" id="35" name="35">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Bawah<a class="text-right">(35)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lain - lain" id="36" name="36" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                            </table>
                            <p class="text-bold mt-2">CT - Scan Dengan Kontras</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kepala" id="37" name="37">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Kepala<a class="text-right">(37)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Abdomen" id="38" name="38">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Abdomen<a class="text-right">(38)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thorax" id="39" name="39">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax<a class="text-right">(39)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vertebrae" id="40" name="40">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Vertebrae<a class="text-right">(40)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Atas" id="41" name="41">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Atas<a class="text-right">(41)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="42" id="42">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Bawah<a class="text-right">(42)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lain - lain" id="43" name="43" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><Input class="form-control"></Input></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">USG ( Ultra Gonography )</div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Whole Abdomen ( Upper & Lower Abdomen)" id="41" name="41">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Whole Abdomen ( Upper & Lower Abdomen)<a class="text-right">(41)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Upper Abdomen" id="42" name="42">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Upper Abdomen<a class="text-right">(42)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lower Abdomen" id="43" name="43">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lower Abdomen<a class="text-right">(43)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Pembagian ( Organ )" id="44" name="44">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Pembagian ( Organ )<a class="text-right">(44)</a>
                                            </label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Mammae" id="45" name="45">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Mammae<a class="text-right">(45)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Testis" id="46" name="46">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Testis<a class="text-right">(46)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Thyroid" id="47" name="47">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thyroid<a class="text-right">(47)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Liver" id="48" name="48">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Liver<a class="text-right">(48)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Ginjal" id="49" name="49">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ginjal<a class="text-right">(49)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Prostat" id="411" name="411">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Prostat<a class="text-right">(411)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Soft Tissue" id="412" name="412">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Soft Tissue<a class="text-right">(412)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Doopler" id="413" name="413">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Doopler<a class="text-right">(413)</a>
                                            </label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Carotis" id="414" name="414">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Carotis<a class="text-right">(414)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Tungkai Artery" id="415" name="415">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Tungkai Artery<a class="text-right">(415)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Tungkai Vena" id="416" name="416">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Tungkai Vena<a class="text-right">(416)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Organ / Massa" id="417" name="417">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Organ / Massa<a class="text-right">(417)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Scrotum / Inguinal" id="418" name="418">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Scrotum / Inguinal<a class="text-right">(418)</a>
                                            </label>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Musculoskeletal" id="419" name="419">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Musculoskeletal<a class="text-right">(419)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Lain - lain" id="420" name="420" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-md-12 justify-content-end mb-2">
                <button type="button" class="btn btn-success float-right mr-2 tombol-radiologi">Simpan</button>
            </div>
        </div>
</div>
</form>
</div>





<script>
    $(document).ready(function() {
        tglkunjungan = $('#tglmasuk').val()
        $('#tgldanjamkunjungan').val(tglkunjungan)
    });
    $(document).ready(function() {
        $('.tombol-radiologi').click(function() {
            var data = $('.formradiologi').serializeArray();
            kodekunjungan = $('#kodekunjungan').val()
            rm = $('#nomorrm').val()
            tglmasuk = $('#tglmasuk').val()
            nama = $('#nama').val()
            unit = $('#unit').val()
            umur = $('#umur').val()
            alamat = $('#alamat').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    data: JSON.stringify(data),
                    kodekunjungan,
                    rm,
                    tglmasuk,
                    nama,
                    unit,
                    umur,
                    alamat,
                },
                url: '<?= route('simpanradiologi') ?>',
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah......',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops.....',
                            text: data.message,
                            footer: ''
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'ok',
                            text: 'Data berhasil disimpan!',
                            footer: ''
                        })
                    }
                }
            });
        });
    });
</script>