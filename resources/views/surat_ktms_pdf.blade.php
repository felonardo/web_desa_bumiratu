

{{-- @foreach($table_wargaarga as $table_warga) --}}


 <table>
    <tbody>
        <tr>
            <td><div class="illustration"><img src="assets/img/logo.png" style="height:90px" ></div></td>
            <td><h3 style="text-align: center;"><strong>PEMERINTAHAN KABUPATEN PESISIR BARAT</strong><br/><strong>KECAMATAN NGAMBUR</strong><br /><strong>PEKON BUMI RATU</strong></h3>
                <p style="text-align: center; padding-top: -15px;"><em>&nbsp;</em><em>Alamat : </em><em>Jln Proklamator No. 07&nbsp; Pekon Bumi <u>Ratu</u>&nbsp; Ke</em><em>camatan </em><em>&nbsp;Ngambur Kode Post 34891</em></p>
            </td>
            <!-- <p style="text-align: left; justify;">Yang bertanda tangan di bawah ini, Peratin Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir &nbsp;Barat menerangkan dengan sebenar-benarnya bahwa :</p></td> -->
        </tr>
    </tbody>
</table>
<p style="text-align: center;"><strong><u>SURAT KETERANGAN PENGHASILAN ORANG TUA</u></strong></p>
{{-- <p style="text-align: center;">Nomor : 140 /........../ SKTM-BR / X/ 2019</p> --}}
<p style="text-align: left; justify;">Yang bertanda tangan di bawah ini,</p>

<table style="width: 700px">
    <tbody>
        <tr>
            <td style="padding-left: 50px;">
                Nama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->nama}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Tempat dan tanggal lahir
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->ttl}}
            </td>
        </tr>
        {{-- <tr>
            <td style="padding-left: 50px;">
                NIK
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->nik}}
            </td>
        </tr> --}}
        <tr>
            <td style="padding-left: 50px;">
                Jenis Kelamin
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->jenis_kelamin}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Pekerjaan
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->pekerjaan}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Alamat
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px; margin-top: 0px">
                {{$table_warga->alamat}}
            </td>
        </tr>
    </tbody>
</table>
<p style="padding-top=-15px;">Adalah Orang Tua dari:</p>


<table style="width: 700px">
    <tbody>
        <tr>
            <td style="padding-left: 50px;">
                Nama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{-- {{$table_warga->nama}} --}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Tempat dan tanggal lahir
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
            </td>
        </tr>
        {{-- <tr>
            <td style="padding-left: 50px;">
                NIK
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->nik}}
            </td>
        </tr> --}}
        <tr>
            <td style="padding-left: 50px;">
                Jenis Kelamin
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Pekerjaan
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                Pelajar
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Alamat
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px; margin-top: 0px">
                {{$table_warga->alamat}}
            </td>
        </tr>
    </tbody>
</table>
{{--  <p style="text-align: left; padding-left: 120px;">Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; {{$table_warga->nama}}</p>
<p style="text-align: left; padding-left: 120px;">Tempat dan tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$table_warga->ttl}}</p>
<p style="text-align: left; padding-left: 120px;">NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$table_warga->nik}}</p>
<p style="text-align: left; padding-left: 120px;">Jenis Kelamin&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$table_warga->jeniskelamin}}.</p>
<p style="text-align: left; padding-left: 120px;">Agama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$table_warga->agama}}</p>
<p style="text-align: left; padding-left: 120px;">Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$table_warga->pekerjaan}}</p>
<p style="text-align: left; padding-left: 120px; ">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$table_warga->alamat}}</p>  --}}
<p style="text-align: justify; ">Menyatakan bahwa saat ini,kami selaku orang tua mempunyai penghasilan total keluarga sebesar Rp1.500.000,- / bulan.</p>

<p style="text-align: justify;">Demikian pernyataan ini kami buat dengan sebenar-benarnya dan penuh rasa tanggung jawab.
Apabila pernyataan ini tidak benar/menyimpang dengan keadaan yang sebenarnya, kami bersedia menerima sanksi sesuai dengan peraturan perundang-undangan.
<p>&nbsp;Mengetahui,</p>
<table style="width: 846px; padding-top: -15px; margin-top: -15px;">
<tbody>
<tr>
<td style="width: 541px;">
<p>&nbsp;</p>
</td>
<td style="width: 576px;">
<p style="padding-top: -8px; margin-top: -8px;">Bumi Ratu , <?php
        date_default_timezone_set("Asia/Jakarta");
        function tgl_indo($tanggal){
            $bulan = array(
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );

            $pecahkan = explode('-', $tanggal);

            return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
        }

        echo tgl_indo(date("Y-m-d"));
    ?></p>
</td>
</tr>
<tr>
<td style="width: 541px;">&nbsp;
<p style="padding-top: -15px; margin-top: -15px;">Pemangku dusun</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><?php
    if($table_warga->dusun == "bumi asri" || $table_warga->dusun == "bumiasri" || $table_warga->dusun == "Bumi Asri" || $table_warga->dusun == "BUMI ASRI"){
        echo "HERI KUSMANTO";
    }elseif($table_warga->dusun == "bumi ratu I" || $table_warga->dusun == "bumiratuI" || $table_warga->dusun == "Bumi Ratu I" || $table_warga->dusun == "BUMI RATU I"){
        echo "MEDI.S";
    }elseif($table_warga->dusun == "bumi ratu II" || $table_warga->dusun == "bumiratuII" || $table_warga->dusun == "Bumi Ratu II" || $table_warga->dusun == "BUMI RATU II"){
        echo "INDRA.J";
    }elseif($table_warga->dusun == "sinar banten" || $table_warga->dusun == "sinarbanten" || $table_warga->dusun == "Sinar Banten" || $table_warga->dusun == "SINAR BANTEN"){
        echo "ROHIM";
    }elseif($table_warga->dusun == "suka jaya" || $table_warga->dusun == "sukajaya" || $table_warga->dusun == "Suka Jaya"  || $table_warga->dusun == "SUKA JAYA"){
        echo "ZAINAL ABIDIN";
    }elseif($table_warga->dusun == "negeri gading" || $table_warga->dusun == "negerigading" || $table_warga->dusun == "Negeri Gading" || $table_warga->dusun == "NEGERI GADING"){
        echo "ZAINAL ARIFIN";
    }
    ?></strong></p>
</td>
<td style="width: 576px;">
<p>Yang membuat pernyataan</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>{{$table_warga->nama}}</strong></p>
</td>
</tr>
</tbody>
</table>
{{-- <p>&nbsp;</p> --}}
{{-- <p>&nbsp;&nbsp;</p> --}}
{{-- <p style="text-align: center;">Mengetahui,</p> --}}
<p style="text-align: center;">Peratin Bumi Ratu</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center; font-weight: bold">ZAINI PIRDAUS, S.Pd.I</p></div>
<p style="text-align: center;">&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


 <table>
    <tbody>
        <tr>
            <td><div class="illustration"><img src="assets/img/logo.png" style="height:90px" ></div></td>
            <td><h3 style="text-align: center;"><strong>PEMERINTAHAN KABUPATEN PESISIR BARAT</strong><br/><strong>KECAMATAN NGAMBUR</strong><br /><strong>PEKON BUMI RATU</strong></h3>
                <p style="text-align: center; padding-top: -15px;"><em>&nbsp;</em><em>Alamat : </em><em>Jln Proklamator No. 07&nbsp; Pekon Bumi <u>Ratu</u>&nbsp; Ke</em><em>camatan </em><em>&nbsp;Ngambur Kode Post 34891</em></p>
            </td>
            <!-- <p style="text-align: left; justify;">Yang bertanda tangan di bawah ini, Peratin Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir &nbsp;Barat menerangkan dengan sebenar-benarnya bahwa :</p></td> -->
        </tr>
    </tbody>
</table>
<hr style="margin-top: -15px;"/>
<p style="text-align: center;"><strong><u>SURAT KETERANGAN TIDAK MAMPU</u></strong></p>
<p style="text-align: center;">Nomor : 140 /........../ SKTM-BR / <?php  date_default_timezone_set("Asia/Jakarta");
        function tgl_romawi($tanggal){
            $bulan = array(
                1 => 'I',
                'II',
                'III',
                'IV',
                'V',
                'VI',
                'VII',
                'VIII',
                'IX',
                'X',
                'XI',
                'XII'
            );

            $pecahkan = explode('-', $tanggal);

            return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
        }

        echo tgl_romawi(date("-m-")); ?>/{{date("Y")}}</p>
<p style="text-align: left; justify;">Yang bertanda tangan di bawah ini, Peratin Bumi Ratu  Kecamatan Ngambur Kabupaten Pesisir  Barat menerangkan bahwa :</p>

<table style="width: 700px">
    <tbody>
        <tr>
            <td style="padding-left: 50px;">
                Nama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->nama}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Tempat dan tanggal lahir
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->ttl}}
            </td>
        </tr>

        <tr>
            <td style="padding-left: 50px;">
                Jenis Kelamin
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->jeniskelamin}}
            </td>
        </tr>

        <tr>
            <td style="padding-left: 50px;">
                Pekerjaan
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->pekerjaan}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Alamat
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px; margin-top: 0px">
                {{$table_warga->alamat}}
            </td>
        </tr>
    </tbody>
</table>

{{--  <p style="text-align: left; padding-left: 120px;">Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; {{$table_warga->nama}}</p>
<p style="text-align: left; padding-left: 120px;">Tempat dan tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$table_warga->ttl}}</p>
<p style="text-align: left; padding-left: 120px;">NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$table_warga->nik}}</p>
<p style="text-align: left; padding-left: 120px;">Jenis Kelamin&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$table_warga->jeniskelamin}}.</p>
<p style="text-align: left; padding-left: 120px;">Agama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$table_warga->agama}}</p>
<p style="text-align: left; padding-left: 120px;">Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$table_warga->pekerjaan}}</p>
<p style="text-align: left; padding-left: 120px; ">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$table_warga->alamat}}</p>  --}}
<p style="text-align: justify; ">Warga Yang tersebut di atas adalah benar penduduk Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir Barat yang bertempat tinggal di alamat tersebut diatas.
</p><p>Berdasarkan keterangan dari Ketua RT / RW setempat yang menurut sepengetahuan kami,bahwa benar yang bersangkutan tergolong orang yang tidak mampu/miskin.
Surat keterangan ini kami berikan atas permintaan yang bersangkutan untuk dipergunakan sebagai Persyaratan  ............................................................................................................................................
</p><p>Atas Istrinya yang tersebut disebut di bawah ini :
</p>

<table style="width: 700px">
    <tbody>
        <tr>
            <td style="padding-left: 50px;">
                Nama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{-- {{$table_warga->nama}} --}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Umur
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{-- {{$table_warga->ttl}} --}}
            </td>
        </tr>

        <tr>
            <td style="padding-left: 50px;">
                Pekerjaan
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                Pelajar
                {{-- {{$table_warga->pekerjaan}} --}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Alamat
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px; margin-top: 0px">
                {{$table_warga->alamat}}
            </td>
        </tr>
    </tbody>
</table>
<p>Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan sebagaimana mestinya.	</p>

{{-- <p style="text-align: justify;">Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan seperlunya.</p> --}}
<table>
<tbody>
<tr>
<td width="236">
<p>&nbsp;</p>
</td>
<td width="128">
<p>&nbsp;</p>
</td>
<td width="269">
{{--  <p>&nbsp;&nbsp;&nbsp;  --}}
    <p> Bumi Ratu, <?php echo tgl_indo(date("Y-m-d"));
    ?></p>
</td>
</tr>
<tr>
<td width="236">
{{--  <p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>  --}}
<p>Mengetahui</p>
<p>CAMAT NGAMBUR</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td width="128">
{{-- <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mengetahui,</p> --}}
<p>&nbsp;</p>
</td>
<td width="269">
<p>&nbsp;</p>
<p>Peratin Bumi Ratu</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><u>&nbsp;</u></p>
</td>
</tr>
<tr>
<td width="236">
<p><strong><u>...................................................</u></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NIP:............................................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</td>
<td width="128">
<p>&nbsp;</p>
</td>
<td width="269">
<p><strong><u>ZAINI PIRDAUS,S.Pd.I</u></strong></p>
</td>
</tr>
</tbody>
</table>

{{-- @endforeach --}}
