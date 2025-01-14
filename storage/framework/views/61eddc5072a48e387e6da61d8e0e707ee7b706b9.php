<div class="card">
    <div Style="font-family:calibri" class="card-header bg-warning text-md">Order Radiologi
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="" class="formradiologi">
            <table Style="font-family:calibri" class="table table-bordered table-sm text-md">
                <tr>
                    <td>Tanggal</td>
                    <td><input type="text" readonly class="form-control" id="tglmasuk" name="tglmasuk"
                            value="<?php echo e($tglmasuk); ?>"></td>
                    <td>Dokter</td>
                    <td><input type="text" readonly class="form-control" id="dokter" name="dokter"
                            value="123"></td>
                </tr>
                <tr>
                    <td>RM</td>
                    <td><input type="text" readonly class="form-control" id="rm" name="rm"
                            value="<?php echo e($rm); ?>"></td>
                    <td>PoliKlinik</td>
                    <td><input type="text" readonly class="form-control" id="unit" name="unit"
                            value="<?php echo e($unit); ?>"></td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td><input type="text" readonly class="form-control" id="nama" name="nama"
                            value="<?php echo e($nama); ?>"></td>
                    <td>Diagnosa</td>
                    <td><input type="text" readonly class="form-control" id="diagnosa" value="123"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" readonly class="form-control" id="umur" name="umur"
                            value="<?php echo e($umur); ?>"></td>
                    <td>Jenis kelamin</td>
                    <td><input type="text" readonly class="form-control" id="jk" name="jk"
                            value="L"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea type="text" readonly class="form-control" id="alamat" name="alamat"><?php echo e($alamat); ?></textarea>
                    </td>
                </tr>
            </table>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">RONTGEN</div>
                        <div class="card-body">
                            <p class="text-bold">Foto Polos</p>
                            <table Style="font-family:calibri" class="table table-bordered table-sm text-md">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="11"
                                                value="Thorax PA | 11" id="11">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax PA <a hidden class="text-right">(11)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thorax Lateral | 12"
                                                name="12" id="12">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax Lateral <a hidden class="text-right">(12)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Waters | 13"
                                                name="13" id="13">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Waters <a hidden class="text-right">(13)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="schuters | 14"
                                                id="14" name="14">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Schuters <a hidden class="text-right">(14)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="BNO / Abdomen | 15"
                                                id="15" name="15">
                                            <label class="form-check-label" for="defaultCheck1">
                                                BNO / Abdomen <a hidden class="text-right">(15)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Panoramic | 16"
                                                id="16" name="16">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Panoramic <a hidden class="text-right">(16)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas | 17"
                                                id="17" name="17">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas <a hidden class="text-right">(17)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="ketereangan_ekstremitas" id="ketereangan_ekstremitas"
                                            class="form-control" value="Tidak ada"  placeholder="Keterangan Ekstremitas">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Persendian | 18"
                                                id="18" name="18">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Persendian <a hidden class="text-right">(18)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="keterangan_sendi" id="keterangan_sendi" value="Tidak ada" class="form-control"  placeholder="Keterangan persendian">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vertebrae | 11-"
                                                id="110" name="110">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Vertebrae <a hidden class="text-right">(110)</a>
                                            </label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Cervical | 111"
                                                id="111" name="111">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cervical<a hidden class="text-right">(111)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Thoracalis | 112"
                                                id="112" name="112">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thoracalis<a hidden class="text-right">(112)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Lumbal | 113"
                                                id="113" name="113">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lumbal<a hidden class="text-right">(113)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Lumbosacral | 114"
                                                id="114" name="114">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lumbosacral<a hidden class="text-right">(114)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=" Schedel AP / Lat | 115"
                                                name="115" id=" 115">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Schedel AP / Lat<a hidden class="text-right">(115)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Pelvis | 116"
                                                id="116" name="116">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Pelvis<a hidden class="text-right">(116)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lainnya | 117"
                                                id="117" name="117">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain-lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="keterangan_rontgen" id="keterangan_rontgen"
                                            value="Tidak ada"></td>
                                </tr>
                            </table>
                            <p class="text-bold">Foto Kontras</p>
                            <table Style="font-family:calibri" class="table table-bordered table-sm text-md">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="BNO - IVP | 20"
                                                id="20" name="20">
                                            <label class="form-check-label" for="defaultCheck1">
                                                BNO - IVP<a hidden class="text-right">(20)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="OMD | 21"
                                                id="21" name="21">
                                            <label class="form-check-label" for="defaultCheck1">
                                                OMD<a hidden class="text-right">(21)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oeshophagus | 22"
                                                id="22" name="22">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Oeshophagus<a hidden class="text-right">(22)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Colon inloop | 23"
                                                id="23" name="23">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Colon inloop<a hidden class="text-right">(23)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Urethrography | 24"
                                                id="24" name="24">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Urethrography<a hidden class="text-right">(24)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Urethrocystography | 25" id="25" name="25">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Urethrocystography<a hidden class="text-right">(25)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Fistulography | 26"
                                                id="26" name="26">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Fistulography<a hidden class="text-right">(26)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Appendikogram | 27"
                                                id="27" name="27">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Appendikogram<a hidden class="text-right">(27)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="lain-lain | 28"
                                                id="28" name="28">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain ...
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><Input class="form-control" value="tidak ada" name="keterangan_foto_kontras" id="keterangan_foto_kontras"></Input></td>
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
                            <table Style="font-family:calibri" class="table table-bordered table-sm text-md">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kepala | 30"
                                                id="30" name="30">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Kepala<a hidden class="text-right">(30)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Abdomen | 31"
                                                id="31" name="31">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Abdomen<a hidden class="text-right">(31)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thorax | 32"
                                                id="32" name="32">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax<a hidden class="text-right">(32)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vertebrae | 33"
                                                id="33" name="33">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Vertebrae<a hidden class="text-right">(33)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Atas | 34"
                                                id="34" name="34">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Atas<a hidden class="text-right">(34)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Bawah | 35"
                                                id="35" name="35">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Bawah<a hidden class="text-right">(35)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lain - lain | 36"
                                                id="36" name="36">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="keterangan_ct_non" value="tidak ada"></td>
                                </tr>
                            </table>
                            <p class="text-bold mt-2">CT - Scan Dengan Kontras</p>
                            <table Style="font-family:calibri" class="table table-bordered table-sm text-md">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kepala | 37"
                                                id="37" name="37">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Kepala<a hidden class="text-right">(37)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Abdomen | 38"
                                                id="38" name="38">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Abdomen<a hidden class="text-right">(38)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thorax | 39"
                                                id="39" name="39">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax<a hidden class="text-right">(39)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vertebrae | 40"
                                                id="40" name="40">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Vertebrae<a hidden class="text-right">(40)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Atas | 41"
                                                id="41" name="41">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Atas<a hidden class="text-right">(41)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ekstremitas Bawah | 42"
                                                id="42">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ekstremitas Bawah<a hidden class="text-right">(42)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="lain-lain | 43" id="43" name="43">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><Input class="form-control" value="tidak ada" id="keterangan_ct_kon" name="keterangan_ct_kon"></Input></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">USG ( Ultra Gonography )</div>
                        <div class="card-body">
                            <table Style="font-family:calibri" class="table table-bordered table-sm text-md">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Whole Abdomen ( Upper & Lower Abdomen) | 41" id="41"
                                                name="41">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Whole Abdomen ( Upper & Lower Abdomen)<a hidden class="text-right">(41)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Upper Abdomen | 42"
                                                id="42" name="42">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Upper Abdomen<a hidden class="text-right">(42)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lower Abdomen | 43"
                                                id="43" name="43">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lower Abdomen<a hidden class="text-right">(43)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Pembagian ( Organ ) | 44" id="44" name="44">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Pembagian ( Organ )<a hidden class="text-right">(44)</a>
                                            </label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Mammae | 45"
                                                id="45" name="45">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Mammae<a hidden class="text-right">(45)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Testis | 46"
                                                id="46" name="46">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Testis<a hidden class="text-right">(46)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Thyroid | 47"
                                                id="47" name="47">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thyroid<a hidden class="text-right">(47)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Liver | 48"
                                                id="48" name="48">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Liver<a hidden class="text-right">(48)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Ginjal | 49"
                                                id="49" name="49">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ginjal<a hidden class="text-right">(49)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Prostat | 411"
                                                id="411" name="411">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Prostat<a hidden class="text-right">(411)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Soft Tissue | 412"
                                                id="412" name="412">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Soft Tissue<a hidden class="text-right">(412)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Doopler | 413"
                                                id="413" name="413">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Doopler<a hidden class="text-right">(413)</a>
                                            </label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Carotis | 414"
                                                id="414" name="414">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Carotis<a hidden class="text-right">(414)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Tungkai Artery | 415"
                                                id="415" name="415">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Tungkai Artery<a hidden class="text-right">(415)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Tungkai Vena | 416"
                                                id="416" name="416">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Tungkai Vena<a hidden class="text-right">(416)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Organ / Massa | 417"
                                                id="417" name="417">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Organ / Massa<a hidden class="text-right">(417)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox"
                                                value="Scrotum / Inguinal | 418" id="418" name="418">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Scrotum / Inguinal<a hidden class="text-right">(418)</a>
                                            </label>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Musculoskeletal | 419"
                                                id="419" name="419">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Musculoskeletal<a hidden class="text-right">(419)</a>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" id="keterangan_musc" name="keterangan_musc" placeholder="Keterangan Musculoskeletal" value="Tidak ada"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" value="Lain - lain | 420"
                                                id="420" name="420">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain - lain
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="keterangan_usg" id="keterangan_usg" value="tidak ada"  placeholder="Keterangan lain - lain"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 justify-content-end mb-2">
                <button type="button" class="btn btn-success float-right mr-2 tombol-radiologi">Simpan</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        tglkunjungan = $('#tglmasuk').val()
        $('#tgldanjamkunjungan').val(tglkunjungan)
    });
    $(document).ready(function() {
        $('.tombol-radiologi').click(function() {
            spinner = $('#loader2');
            spinner.show();
            var data = $('.formradiologi').serializeArray();
            kodekunjungan = $('#kodekunjungan').val()
            diagnosa = $('#diagnosa').val()
            rm = $('#nomorrm').val()
            tglmasuk = $('#tglmasuk').val()
            nama = $('#nama').val()
            unit = $('#unit').val()
            umur = $('#umur').val()
            alamat = $('#alamat').val()
            kelas = $('#kelas').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    data: JSON.stringify(data),
                    kodekunjungan,
                    diagnosa,
                    rm,
                    tglmasuk,
                    nama,
                    unit,
                    umur,
                    alamat,
                    kelas
                },
                url: '<?= route('simpanradiologi') ?>',
                error: function(data) {
                    spinner.hide()
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah......',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        spinner.hide()
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops.....',
                            text: data.message,
                            footer: ''
                        })
                    } else {
                        spinner.hide()
                        Swal.fire({
                            icon: 'success',
                            title: 'ok',
                            text: data.message,
                            footer: ''
                        })
                    }
                }
            });
        });
    });
</script><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm/formradiologi.blade.php ENDPATH**/ ?>