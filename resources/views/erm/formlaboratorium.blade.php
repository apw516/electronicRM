<div class="card scroll container">
    <div class="card-header bg-light">
        FORM LABORATORIUM
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <form action="" name="formlaboratorium">
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
                    <td colspan="3">
                        <textarea type="text" readonly rows="2" cols="30" class="form-control" id="alamat" name="alamat">{{ $alamat }}</textarea>

                    </td>
                </tr>
            </table>
            <div class="row mt-2">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">HEMATOLOGI</div>
                        <div class="card-body">
                            <p class="text-bold">RUTIN</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="10" id="10" value="Blood Cell Center">
                                            <label class="form-check-label" for="defaultCheck1">Blood Cell Center <a class="text-right">10</a></label>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="11" id="11" value="Hemoglobine">
                                            <label class="form-check-label" for="defaultCheck1">Hemoglobine</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="12" id="12" value="Lekosit">
                                            <label class="form-check-label" for="defaultCheck1">Lekosit<a class="text-right">12</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="13" id="13" value="Hitung Jenis">
                                            <label class="form-check-label" for="defaultCheck1">Hitung Jenis<a class="text-right">13</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="14" id="14" value="LED">
                                            <label class="form-check-label" for="defaultCheck1">LED <a class="text-right">14</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="15" id="15" value="Trombosit">
                                            <label class="form-check-label" for="defaultCheck1">Trombosit<a class="text-right">15</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="16" id="16" value="Hematokrit">
                                            <label class="form-check-label" for="defaultCheck1">Hematokrit<a class="text-right">16</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="17" id="17" value="Eritrosit">
                                            <label class="form-check-label" for="defaultCheck1">Eritrosit<a class="text-right">17</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="18" id="18" value="Eosinofil">
                                            <label class="form-check-label" for="defaultCheck1">Eosinofil<a class="text-right">18</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="19" id="19" value="Retikulosit">
                                            <label class="form-check-label" for="defaultCheck1">Retikulosit<a class="text-right">19</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="111" id="111" value="Hapusan Darah">
                                            <label class="form-check-label" for="defaultCheck1">Hapusan Darah<a class="text-right">111</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="112" id="112" value="Golongan Darah">
                                            <label class="form-check-label" for="defaultCheck1">Golongan Darah <a class="text-right">112</a></label>
                                        </div>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="113" id="113" value="Faal hemostatis">
                                            <label class="form-check-label" for="defaultCheck1">faal hemostatis <a class="text-right">113</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="114" id="114" value="Waktu Pendarahan (BT)">
                                            <label class="form-check-label" for="defaultCheck1">Waktu Pendarahan (BT)<a class="text-right">114</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="115" id="115" value="Waktu Pembekuan (CT)">
                                            <label class="form-check-label" for="defaultCheck1">Waktu Pembekuan (CT)<a class="text-right">115</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="116" id="116" value="PT">
                                            <label class="form-check-label" for="defaultCheck1">PT<a class="text-right">116</a></label>
                                        </div>
                                    </td>
                                </tr>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="117" id="117" value="APTT">
                                            <label class="form-check-label" for="defaultCheck1">APTT<a class="text-right">117</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="118" id="118" value="MCV">
                                            <label class="form-check-label" for="defaultCheck1">MCV<a class="text-right">118</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="119" id="119" value="MCH">
                                            <label class="form-check-label" for="defaultCheck1">MCH<a class="text-right">119</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="120" id="120" value="Serum Iron (FE)">
                                            <label class="form-check-label" for="defaultCheck1">Serun Iron (FE)<a class="text-right">120</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="121" id="121" value="TIBC">
                                            <label class="form-check-label" for="defaultCheck1">TIBC<a class="text-right">121</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="122" id="122" value="Fernitin">
                                            <label class="form-check-label" for="defaultCheck1">Fernitin<a class="text-right">122</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="123" id="123" value="Sel LE">
                                            <label class="form-check-label" for="defaultCheck1">Sel LE<a class="text-right">123</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="124" id="124" value="Malaria">
                                            <label class="form-check-label" for="defaultCheck1">Malaria<a class="text-right">124</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold">URINE</p>

                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="20" id="20" value="Urine Lengkap">
                                            <label class="form-check-label" for="defaultCheck1">Urine Lengkap <a class="text-right">20</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="21" id="21" value="Sedemen Urine">
                                            <label class="form-check-label" for="defaultCheck1">Sedimen Urine <a class="text-right">21</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="22" id="22" value="Protein/Albumin Urine">
                                            <label class="form-check-label" for="defaultCheck1">Protein/Albumin Urine<a class="text-right">22</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="23" id="23" value="Glukose Urine/Reduksi">
                                            <label class="form-check-label" for="defaultCheck1">Glukose Urine/Reduksi<a class="text-right">23</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="24" id="24" value="UroBilinogen">
                                            <label class="form-check-label" for="defaultCheck1">UroBilinogen<a class="text-right">24</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="25" id="25" value="Billirubin Urine">
                                            <label class="form-check-label" for="defaultCheck1">Billirubin Urine<a class="text-right">25</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="26" id="26" value="Katon/Aseton">
                                            <label class="form-check-label" for="defaultCheck1">Katon/Aseton <a class="text-right">26</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="27" id="27" value="Nitrit">
                                            <label class="form-check-label" for="defaultCheck1">Nitrit <a class="text-right">27</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="28" id="28" value="pH Urine">
                                            <label class="form-check-label" for="defaultCheck1">pH Urine <a class="text-right">28</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="29" id="29" value="Berat Jenis">
                                            <label class="form-check-label" for="defaultCheck1">Berat Jenis<a class="text-right">29</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="211" id="211" value="Mikro-Albumin">
                                            <label class="form-check-label" for="defaultCheck1">Mikro-Albumin<a class="text-right">211</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold">HEHAMILAN</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="31" id="31" value="Test Kehamilan">
                                            <label class="form-check-label" for="defaultCheck1">Test Kehamilan<a class="text-right">31</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="32" id="32" value="Beta HCG Kuant. Urine">
                                            <label class="form-check-label" for="defaultCheck1">Beta HCG Kuant. Urine <a class="text-right">32</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> BIOLOGI MOLEKULER</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="40" id="40" value="Swab SARS-COV-2">
                                            <label class="form-check-label" for="defaultCheck1">Swab SARS-COV-2<a class="text-right">40</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="41" id="41" value="Anti SARS-COV-2">
                                            <label class="form-check-label" for="defaultCheck1">Anti SARS-COV-2</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">KIMIA KLINIK</div>
                        <div class="card-body">
                            <p class="text-bold">FAAL HATI</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="50" id="50" value="SGOT">
                                            <label class="form-check-label" for="defaultCheck1">SGOT<a class="text-right">50</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="51" id="51" value="SGPT">
                                            <label class="form-check-label" for="defaultCheck1">SGPT<a class="text-right">51</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="52" id="52" value="GAMMA-GT">
                                            <label class="form-check-label" for="defaultCheck1">GAMMA-GT<a class="text-right">52</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="53" id="53" value="Billirubin Total, Direk, Indirek">
                                            <label class="form-check-label" for="defaultCheck1">Billirubin Total, Direk, Indirek<a class="text-right">53</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="54" id="54" value="Total Protein">
                                            <label class="form-check-label" for="defaultCheck1">Total Protein<a class="text-right">54</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="55" id="55" value="Albumin">
                                            <label class="form-check-label" for="defaultCheck1">Albumin<a class="text-right">55</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="56" id="56" value="Globulin">
                                            <label class="form-check-label" for="defaultCheck1">Globulin<a class="text-right">56</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="57" id="57" value="Alkalll Fosfatase">
                                            <label class="form-check-label" for="defaultCheck1">Alkalll Fosfatase<a class="text-right">57</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="58" id="58" value="Lypase">
                                            <label class="form-check-label" for="defaultCheck1">Lypase<a class="text-right">58</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold">LEMAK</p>

                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="60" id="60" value="Lemak Lengkap **">
                                            <label class="form-check-label" for="defaultCheck1">Lemak Lengkap **<a class="text-right">60</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="61" id="61" value="Cholesterol Total **">
                                            <label class="form-check-label" for="defaultCheck1">Cholesterol Total ** <a class="text-right">61</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="62" id="62" value="Trigliserida **">
                                            <label class="form-check-label" for="defaultCheck1">Trigliserida ** <a class="text-right">62</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="63" id="63" value="HDL-Cholesterol Direct **">
                                            <label class="form-check-label" for="defaultCheck1">HDL-Cholesterol **<a class="text-right">63</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="64" id="64" value="LDL-Cholesterol Direct **">
                                            <label class="form-check-label" for="defaultCheck1">LDL-Cholesterol **<a class="text-right">64</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold">FAAL GINJAL</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="70" id="70" value="Ureum/BUN">
                                            <label class="form-check-label" for="defaultCheck1">Ureum/BUN<a class="text-right">70</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="71" id="71" value="Creatinin">
                                            <label class="form-check-label" for="defaultCheck1">Creatinin<a class="text-right">71</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="72" id="72" value="Asam Urat/Uric-Acid">
                                            <label class="form-check-label" for="defaultCheck1">Asam Urat/Uric-Acid<a class="text-right">72</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="73" id="73" value="Creatinin Clearence #">
                                            <label class="form-check-label" for="defaultCheck1">Creatinin Clearence #<a class="text-right">73</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="74" id="74" value="Creatinin Urine #">
                                            <label class="form-check-label" for="defaultCheck1">Creatinin Urine #<a class="text-right">74</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="75" id="75" value="Urea Clearance">
                                            <label class="form-check-label" for="defaultCheck1">Urea Clearance<a class="text-right">75</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> GULA DARAH</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="80" id="80" value="Glukose Puasa">
                                            <label class="form-check-label" for="defaultCheck1">Glukose Puasa<a class="text-right">80</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="81" id="81" value="Glukose 2 jam PP">
                                            <label class="form-check-label" for="defaultCheck1">Glukose 2 jam PP<a class="text-right">81</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="82" id="82" value="Glukose Sewaktu">
                                            <label class="form-check-label" for="defaultCheck1">Glukose Sewaktu<a class="text-right">82</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="83" id="83" value="GTT">
                                            <label class="form-check-label" for="defaultCheck1">GTT<a class="text-right">83</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="84" id="84" value="HbA1C">
                                            <label class="form-check-label" for="defaultCheck1">HbA1C<a class="text-right">84</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> ELEKTROLIT</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="90" id="90" value="Elektrolit Paket">
                                            <label class="form-check-label" for="defaultCheck1">Elektrolit Paket<a class="text-right">90</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="91" id="91" value="Natrium">
                                            <label class="form-check-label" for="defaultCheck1">Natrium<a class="text-right">91</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="92" id="92" value="Kalium">
                                            <label class="form-check-label" for="defaultCheck1">Kalium<a class="text-right">92</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="93" id="93" value="Chlorida">
                                            <label class="form-check-label" for="defaultCheck1">Chlorida<a class="text-right">93</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="94" id="94" value="Calsium">
                                            <label class="form-check-label" for="defaultCheck1">Calsium<a class="text-right">94</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="95" id="95" value="Fosfor">
                                            <label class="form-check-label" for="defaultCheck1">Fosfor<a class="text-right">95</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="96" id="96" value="Magnesium">
                                            <label class="form-check-label" for="defaultCheck1">Magnesium<a class="text-right">96</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> PROFIL JANTUNG</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1000" id="1000" value="CPK/CK">
                                            <label class="form-check-label" for="defaultCheck1">CPK/CK<a class="text-right">1000</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1001" id="1001" value="CKMB">
                                            <label class="form-check-label" for="defaultCheck1">CKMB<a class="text-right">1001</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1002" id="1002" value="LDH">
                                            <label class="form-check-label" for="defaultCheck1">LDH<a class="text-right">1002</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1003" id="1003" value="Troponin T">
                                            <label class="form-check-label" for="defaultCheck1">Troponin T<a class="text-right">1003</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1004" id="1004" value="Pro BNP">
                                            <label class="form-check-label" for="defaultCheck1">Pro BNP<a class="text-right">1004</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">IMUNNOLOGI</div>
                        <div class="card-body">
                            <p class="text-bold">TORCH</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1010" id="1010" value="TORCH">
                                            <label class="form-check-label" for="defaultCheck1">TORCH<a class="text-right">1010</a>label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1011" id="1011" value="Toxoplasma IgM">
                                            <label class="form-check-label" for="defaultCheck1">Toxoplasma IgM<a class="text-right">1011</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1012" id="1012" value="Toxoplasma IgG">
                                            <label class="form-check-label" for="defaultCheck1">Toxoplasma IgG<a class="text-right">1012</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1013" id="1013" value="Rubella IgM">
                                            <label class="form-check-label" for="defaultCheck1">Rubella IgM<a class="text-right">1013</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1014" id="1014" value="Rubella IgG">
                                            <label class="form-check-label" for="defaultCheck1">Rubella IgG<a class="text-right">1014</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1015" id="1015" value="CMV IgM">
                                            <label class="form-check-label" for="defaultCheck1">CMV IgM <a class="text-right">1015</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1016" id="1016" value="CMV IgG">
                                            <label class="form-check-label" for="defaultCheck1">CMV IgG<a class="text-right">1016</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1017" id="1017" value="HSV I IgM">
                                            <label class="form-check-label" for="defaultCheck1">HSV I IgM<a class="text-right">1017</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1018" id="1018" value="HSV I IgG">
                                            <label class="form-check-label" for="defaultCheck1">HSV I IgG<a class="text-right">1018</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1019" id="1019" value="HSV II IgM">
                                            <label class="form-check-label" for="defaultCheck1">HSV II IgM<a class="text-right">1019</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="11111" id="1111" value="HSV II IgG">
                                            <label class="form-check-label" for="defaultCheck1">HSV II IgG<a class="text-right">1111</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold">PSM</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1020" id="1020" value="VDRL">
                                            <label class="form-check-label" for="defaultCheck1">VDRL<a class="text-right">1020</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1021" id="1021" value="TPHA">
                                            <label class="form-check-label" for="defaultCheck1">TPHA<a class="text-right">1021</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1022" id="1022" value="HIV">
                                            <label class="form-check-label" for="defaultCheck1">HIV<a class="text-right">1022</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1023" id="1023" value="HDL-Cholesterol Direct **">
                                            <label class="form-check-label" for="defaultCheck1">HDL-Cholesterol **<a class="text-right">1023</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> INFEKSI LAIN</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1024" id="1024" value="Widal">
                                            <label class="form-check-label" for="defaultCheck1">Widal<a class="text-right">1024</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1025" id="1025" value="Dengue IgG">
                                            <label class="form-check-label" for="defaultCheck1">Dengue IgG<a class="text-right">1025</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1026" id="1026" value="Dengue IgM">
                                            <label class="form-check-label" for="defaultCheck1">Dengue IgM<a class="text-right">1026</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1027" id="1027" value="TB PAP">
                                            <label class="form-check-label" for="defaultCheck1">TB PAP<a class="text-right">1027</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> RHEUMATIK</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1030" id="1030" value="RA/RF">
                                            <label class="form-check-label" for="defaultCheck1">RA/RF<a class="text-right">1030</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1031" id="1031" value="CRP">
                                            <label class="form-check-label" for="defaultCheck1">CRP<a class="text-right">1031</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1032" id="1032" value="ASTO">
                                            <label class="form-check-label" for="defaultCheck1">ASTO<a class="text-right">1032</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> PETANDA TUMOR</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1040" id="1040" value="AFP">
                                            <label class="form-check-label" for="defaultCheck1">AFP<a class="text-right">1040</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1041" id="1041" value="CEA">
                                            <label class="form-check-label" for="defaultCheck1">CEA<a class="text-right">1041</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1042" id="1042" value="PSA">
                                            <label class="form-check-label" for="defaultCheck1">PSA<a class="text-right">1042</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1043" id="1043" value="Ca. 125">
                                            <label class="form-check-label" for="defaultCheck1">Ca. 125<a class="text-right">1043</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1044" id="1044" value="Ca. 19-9">
                                            <label class="form-check-label" for="defaultCheck1">Ca. 19-9<a class="text-right">1044</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> ALERGI</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1050" id="1050" value="IgE Total">
                                            <label class="form-check-label" for="defaultCheck1">IgE Total<a class="text-right">1050</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> Hepatitis</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1060" id="1060" value="HBsAg">
                                            <label class="form-check-label" for="defaultCheck1">HBsAg<a class="text-right">1060</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1061" id="1061" value="Anti hbS">
                                            <label class="form-check-label" for="defaultCheck1">Anti hbS<a class="text-right">1061</a>/label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1062" id="1062" value="Anti HAV IgM">
                                            <label class="form-check-label" for="defaultCheck1">Anti HAV IgM<a class="text-right">1062</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1063" id="1063" value="Anti HCV">
                                            <label class="form-check-label" for="defaultCheck1">Anti HCV<a class="text-right">1063</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">MIKROBIOLOGI</div>
                        <div class="card-body">
                            <p class="text-bold">PREPARAT DIRECT</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1070" id="1070" value="Gram">
                                            <label class="form-check-label" for="defaultCheck1">Gram<a class="text-right">1070</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1071" id="1071" value="BTA">
                                            <label class="form-check-label" for="defaultCheck1">BTA<a class="text-right">1071</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1072" id="1072" value="Jamur">
                                            <label class="form-check-label" for="defaultCheck1">Jamur<a class="text-right">1072</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1073" id="1073" value="Diphteri">
                                            <label class="form-check-label" for="defaultCheck1">Diphteri<a class="text-right">1073</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1074" id="1074" value="GO">
                                            <label class="form-check-label" for="defaultCheck1">GO<a class="text-right">1074</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold">KULTUR</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1080" id="1080" value="Gall Culture">
                                            <label class="form-check-label" for="defaultCheck1">Gall Culture<a class="text-right">1080</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1081" id="1081" value="BTA Culture">
                                            <label class="form-check-label" for="defaultCheck1">BTA Culture<a class="text-right">1081</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1082" id="1082" value="Pus Culture">
                                            <label class="form-check-label" for="defaultCheck1">Pus Culture<a class="text-right">1082</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1083" id="1083" value="Urine Culture">
                                            <label class="form-check-label" for="defaultCheck1">Urine Culture<a class="text-right">1083</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1084" id="1084" value="Mikroorganisme">
                                            <label class="form-check-label" for="defaultCheck1">Mikroorganisme<a class="text-right">1084</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1085" id="1085" value="Culture">
                                            <label class="form-check-label" for="defaultCheck1">Culture<a class="text-right">1085</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1086" id="1086" value="Gall Culture">
                                            <label class="form-check-label" for="defaultCheck1">Gall Culture<a class="text-right">1086</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1087" id="1087" value="Resistensi">
                                            <label class="form-check-label" for="defaultCheck1">Resistensi<a class="text-right">1087</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> ANALISA LAIN</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1090" id="1090" value="Analisa Sperma">
                                            <label class="form-check-label" for="defaultCheck1">Analisa Sperma<a class="text-right">1090</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1091" id="1091" value="Analisa Liquor">
                                            <label class="form-check-label" for="defaultCheck1">Analisa Liquor<a class="text-right">1091</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1092" id="1092" value="Analisa Batu Ginjal">
                                            <label class="form-check-label" for="defaultCheck1">Analisa Batu Ginjal<a class="text-right">1092</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1093" id="1093" value="Analisa Transudat/Exudat">
                                            <label class="form-check-label" for="defaultCheck1">Analisa Transudat/Exudat<a class="text-right">1093</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1094" id="1094" value="Analisa Gas Darah (AGD)">
                                            <label class="form-check-label" for="defaultCheck1">Analisa Gas Darah (AGD)<a class="text-right">1094</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1095" id="1095" value="Rivalta Test">
                                            <label class="form-check-label" for="defaultCheck1">Rivalta Test<a class="text-right">1095</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1096" id="1096" value="Nonne ">
                                            <label class="form-check-label" for="defaultCheck1"> Nonne <a class="text-right">1096</a><label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1097" id="1097" value="Pandy">
                                            <label class="form-check-label" for="defaultCheck1">Pandy<a class="text-right">1097</a><label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> NARKOBA</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1200" id="1200" value="Ampethamin">
                                            <label class="form-check-label" for="defaultCheck1">Ampethamin<a class="text-right">1200</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1201" id="1201" value="Marijuana">
                                            <label class="form-check-label" for="defaultCheck1">Marijuana<a class="text-right">1201</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1202" id="1202" value="Morfin">
                                            <label class="form-check-label" for="defaultCheck1">Morfin<a class="text-right">1202</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1203" id="1203" value="Cocain">
                                            <label class="form-check-label" for="defaultCheck1">Cocain<a class="text-right">1203</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1204" id="1204" value="Metamphetamin">
                                            <label class="form-check-label" for="defaultCheck1">Metamphetamin<a class="text-right">1204</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> HORMON</p>
                            <table class="table table-bordered table-sm text-xs">

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1210" id="1210" value="T-3">
                                            <label class="form-check-label" for="defaultCheck1">T-3<a class="text-right">1210</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1211" id="1211" value="T-4">
                                            <label class="form-check-label" for="defaultCheck1">T-4 <a class="text-right">1211</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1212" id="1212" value="TsH">
                                            <label class="form-check-label" for="defaultCheck1">TsH <a class="text-right">1212</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1213" id="1213" value="FT4">
                                            <label class="form-check-label" for="defaultCheck1">FT4 <a class="text-right">1213</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1214" id="1214" value="Prolaktin">
                                            <label class="form-check-label" for="defaultCheck1">Prolaktin <a class="text-right">1214</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1215" id="1215" value="Testosteron">
                                            <label class="form-check-label" for="defaultCheck1">Testosteron <a class="text-right">1215</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1216" id="1216" value="Progesteron">
                                            <label class="form-check-label" for="defaultCheck1">Progesteron <a class="text-right">1216</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p class="text-bold"> FAECES</p>
                            <table class="table table-bordered table-sm text-xs">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1217" id="1217" value="Faeces rutin">
                                            <label class="form-check-label" for="defaultCheck1">Faeces rutin <a class="text-right">1217</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1218" id="1218" value="Benzidine/Darah Samar">
                                            <label class="form-check-label" for="defaultCheck1">Benzidine/Darah Samar <a class="text-right">1218</a></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="1219" id="1219" value="Pencernaan">
                                            <label class="form-check-label" for="defaultCheck1">Pencernaan <a class="text-right">1219</a></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-right-content-end mb-2">
                    <button type="button" class="btn btn-success float-right mr-2 tombol-simpanlab">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        tglkunjungan = $('#tglmasuk').val()
        $('#tgldanjamkunungan').val(tglkunjungan)
    });
    $(document).ready(function() {
        $('.tombol-simpanlab').click(function() {
            var data = $('.formlaboratorium').serializeArray();
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
                url: '<?= route('simpanformlab') ?>',
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops....',
                        text: 'Sepertinya ada masalah.......',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oopss...',
                            text: data.message,
                            footer: ''
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: 'Data berhasil disimpan!',
                            footer: ''
                        })
                    }
                }
            });
        });
    });
</script>
