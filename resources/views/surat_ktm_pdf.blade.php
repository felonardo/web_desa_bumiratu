
{{--  @foreach($warga as $w)

<h3 style="text-align: center;"><strong>PEMERINTAHAN KABUPATEN PESISIR BARAT</strong><br /><strong>KECAMATAN NGAMBUR</strong><br /><strong>PEKON BUMI RATU</strong></h3>
<p style="text-align: center;"><em>&nbsp;</em><em>Alamat : </em><em>Jln Proklamator No. 07&nbsp; Pekon Bumi <u>Ratu</u>&nbsp; Ke</em><em>camatan </em><em>&nbsp;Ngambur Kode Post 34891</em></p>
<hr />
<p style="text-align: center;"><strong><u>SURAT KETERANGAN DOMISILI</u></strong></p>
<p style="text-align: center;">Nomor : 140 /........../ SKD / XII/ 2019</p>
<p style="text-align: left;">Yang bertanda tangan di bawah ini, Peratin Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir &nbsp;Barat menerangkan dengan sebenar-benarnya bahwa :</p>
<p style="text-align: left; padding-left: 120px;">Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; {{$w->warga_nama}}</p>
<p style="text-align: left; padding-left: 120px;">Tempat dan tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$w->warga_ttl}}</p>
<p style="text-align: left; padding-left: 120px;">NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$w->warga_nik}}</p>
<p style="text-align: left; padding-left: 120px;">Jenis Kelamin&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$w->warga_jeniskelamin}}.</p>
<p style="text-align: left; padding-left: 120px;">Agama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$w->warga_agama}}</p>
<p style="text-align: left; padding-left: 120px;">Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$w->warga_pekerjaan}}</p>
<p style="text-align: left; padding-left: 120px; ">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$w->warga_alamat}}</p>
<p style="text-align: left;">&nbsp;<br />Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan seperlunya&nbsp;<br />Bahwa yang namanya tersebut di atas adalah benar Bertempat tinggal / <strong><u>Berdomisili</u></strong> di Pemangku Sinar Banten Pekon Bumi Ratu&nbsp; Kecamatan Ngambur Kabupaten Pesisir Barat Propinsi Lampung.</p>
<table style="margin-left: auto; margin-right: auto;">

<tbody>
<tr>
<td width="281">&nbsp;</td>
<td>
<p>Bumi Ratu, 17 Desember 2019 <br> Peratin Bumi Ratu </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>ZAINI PIRDAUS, S.Pd.I</u></strong></p>
</td>
</tr>
</tbody>
</table>
<br>
<br>
@endforeach  --}}

{{--  <style>
    @page{
        size: 21cm 29.7cm;
        margin: 30mm 45mm 30mm 45mm;
    }
</style>  --}}

@foreach($warga as $w)

<h3 style="text-align: center;"><strong>PEMERINTAHAN KABUPATEN PESISIR BARAT</strong><br /><strong>KECAMATAN NGAMBUR</strong><br /><strong>PEKON BUMI RATU</strong></h3>
<p style="text-align: center;"><em>&nbsp;</em><em>Alamat : </em><em>Jln Proklamator No. 07&nbsp; Pekon Bumi <u>Ratu</u>&nbsp; Ke</em><em>camatan </em><em>&nbsp;Ngambur Kode Post 34891</em></p>
<hr />
<p style="text-align: center;"><strong><u>SURAT KETERANGAN TIDAK MAMPU</u></strong></p>
<p style="text-align: center;">Nomor : 140 /........../ SKTM-BR / X/ 2019</p>
<p style="text-align: left; justify;">Yang bertanda tangan di bawah ini, Peratin Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir &nbsp;Barat menerangkan dengan sesungguhnya bahwa :</p>

<table style="width: 700px">
    <tbody>
        <tr>
            <td style="padding-left: 50px;">
                Nama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$w->warga_nama}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Tempat dan tanggal lahir
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$w->warga_ttl}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                NIK
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$w->warga_nik}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Jenis Kelamin
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$w->warga_jeniskelamin}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Agama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$w->warga_agama}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Pekerjaan
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$w->warga_pekerjaan}}
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">
                Alamat
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px; margin-top: 0px">
                {{$w->warga_alamat}}
            </td>
        </tr>
    </tbody>
</table>

{{--  <p style="text-align: left; padding-left: 120px;">Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; {{$w->warga_nama}}</p>
<p style="text-align: left; padding-left: 120px;">Tempat dan tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$w->warga_ttl}}</p>
<p style="text-align: left; padding-left: 120px;">NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$w->warga_nik}}</p>
<p style="text-align: left; padding-left: 120px;">Jenis Kelamin&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$w->warga_jeniskelamin}}.</p>
<p style="text-align: left; padding-left: 120px;">Agama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$w->warga_agama}}</p>
<p style="text-align: left; padding-left: 120px;">Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$w->warga_pekerjaan}}</p>
<p style="text-align: left; padding-left: 120px; ">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$w->warga_alamat}}</p>  --}}
<p style="text-align: justify; ">Bahwa yang namanya tersebut di atas adalah benar berdomisili dan bertempat tinggal di Pemangku {{$w->warga_dusun}} Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir Barat, dan benar orang tersebut bekerja sebagai {{$w->warga_pekerjaan}} dan berpenghasilan rendah ( kurang  mampu/miskin ).</p>
<p></p>
<p style="text-align: justify;">Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan seperlunya.</p>
<table style="margin-left: auto; margin-right: auto;">

<tbody>
<tr>
<td width="281">&nbsp;</td>
<td>
<p>Bumi Ratu, 17 Desember 2019 <br> Peratin Bumi Ratu </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>ZAINI PIRDAUS, S.Pd.I</u></strong></p>
</td>
</tr>
</tbody>
</table>
<br>
<br>
@endforeach
