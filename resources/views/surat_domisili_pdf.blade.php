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
<p style="text-align: center; padding-top: 15px;"><strong><u>SURAT KETERANGAN DOMISILI</u></strong></p>
<p style="text-align: center; padding-top: -15px;">Nomor : 140 /........../ SKD / XII/ <?php echo date("Y") ?></p>
<!-- <h3 style="text-align: center;"><strong>PEMERINTAHAN KABUPATEN PESISIR BARAT</strong><br /><strong>KECAMATAN NGAMBUR</strong><br /><strong>PEKON BUMI RATU</strong></h3>
<p style="text-align: center;"><em>&nbsp;</em><em>Alamat : </em><em>Jln Proklamator No. 07&nbsp; Pekon Bumi <u>Ratu</u>&nbsp; Ke</em><em>camatan </em><em>&nbsp;Ngambur Kode Post 34891</em></p>
<hr />
<p style="text-align: center;"><strong><u>SURAT KETERANGAN DOMISILI</u></strong></p>
<p style="text-align: center;">Nomor : 140 /........../ SKD / XII/ 2019</p> -->
<p style="text-align: left; justify;">Yang bertanda tangan di bawah ini, Peratin Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir &nbsp;Barat menerangkan dengan sebenar-benarnya bahwa :</p>

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
                NIK
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->nik}}
            </td>
        </tr>
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
                Agama
            </td>
            <td style="padding-left: 10px;">:</td>
            <td style="padding-left: 30px;">
                {{$table_warga->agama}}
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

{{--  <p style="text-align: left; padding-left: 120px;">Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; {{$post->warga_nama}}</p>
<p style="text-align: left; padding-left: 120px;">Tempat dan tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$post->warga_ttl}}</p>
<p style="text-align: left; padding-left: 120px;">NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$post->warga_nik}}</p>
<p style="text-align: left; padding-left: 120px;">Jenis Kelamin&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$post->warga_jeniskelamin}}.</p>
<p style="text-align: left; padding-left: 120px;">Agama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$post->warga_agama}}</p>
<p style="text-align: left; padding-left: 120px;">Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$post->warga_pekerjaan}}</p>
<p style="text-align: left; padding-left: 120px; ">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$post->warga_alamat}}</p>  --}}
<p style="text-align: justify; ">Bahwa yang namanya tersebut di atas adalah benar Bertempat tinggal/Berdomisili di Pemangku {{$table_warga->dusun}} Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir Barat Propinsi Lampung.</p>
<p></p>
<p style="text-align: justify;">Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan seperlunya.</p>
<table style="margin-left: auto; margin-right: auto;">

<tbody>
<tr>
<td width="281">&nbsp;</td>
<td>
<p>Bumi Ratu,&nbsp;
    <?php
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
    ?>
    <br> Peratin Bumi Ratu </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>ZAINI PIRDAUS, S.Pd.I</u></strong></p>
</td>
</tr>
</tbody>
</table>
<br>
<br>
