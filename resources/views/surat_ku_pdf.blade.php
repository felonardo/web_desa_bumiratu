
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
<hr style="margin-top: -15px;"/>
<p style="text-align: center;"><strong><u>SURAT KETERANGAN USAHA</u></strong></p>
<p style="text-align: center;">Nomor : 140 /........../ SKU / <?php  date_default_timezone_set("Asia/Jakarta");
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
            <td style="padding-left: 30px;">
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
<p style="text-align: justify; ">Yang Namanya tersebut di atas memang benar Penduduk Pekon Bumi Ratu Kecamatan Ngambur Kabupaten
Pesisir Barat, selama ini mempunyai Usaha {{$surat_usaha->jenis_usaha}} di Pekon Bumi Ratu Kecamatan
Ngambur sejak Tahun {{$surat_usaha->sejak_tahun}}.</p>
<p style="text-align: justify;">Demikian Surat Keterangan Usaha ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagai mana
mestinya</p>
<table style="margin-left: auto; margin-right: auto;">

<tbody>
<tr>
<td width="281">&nbsp;</td>
<td>
<p>Bumi Ratu,  <?php
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
    ?> <br> Peratin Bumi Ratu </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>ZAINI PIRDAUS, S.Pd.I</u></strong></p>
</td>
</tr>
</tbody>
</table>
<br><br>
<br><br>
<br>
<br>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Prihal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong><u>Permohonan Pinjaman</u></strong></p>
<p>&nbsp;</p>
<p>Kepada</p>
<p>Yth. Ka. Unit Bank BRI Pasar Minggu</p>
<p>di-</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>Pasar Minggu</u></p>

<p>Dengan Hormat,</p>
<p>Saya yang bertanda tangan dibawah ini :</p>
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
            <td style="padding-left: 30px;">
                {{$table_warga->alamat}}
            </td>
        </tr>
    </tbody>
</table>
<p>Dengan ini mengajukan permohonan Pinjaman &nbsp;&nbsp;sesuai dengan prihal surat diatas sebesar :</p>
<p><strong><?php
//membuat format rupiah dengan PHP
//tutorial www.malasngoding.com

function rupiah($angka){

	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}

echo rupiah($surat_usaha->nominal);
?></strong>,-&nbsp;(
<?php

	// FUNGSI TERBILANG OLEH : MALASNGODING.COM
	// WEBSITE : WWW.MALASNGODING.COM
	// AUTHOR : https://www.malasngoding.com/author/admin


	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " Belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " Seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " Seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
		}
		return $temp;
	}

	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}
		return $hasil;
	}


	$angka = $surat_usaha->nominal;
	echo terbilang($angka);
	?> Rupiah)&nbsp; angsuran Selama {{$surat_usaha->lama_pinjam}} Bulan. Adapun pinjaman kredit tersebut untuk &nbsp;menambah Modal Usaha yang sedang berjalan pada saat ini. Saya bersedia memenuhi atau mematuhi segala ketentuan dan persyaratan&nbsp; yang berlaku pada Bank&nbsp; BRI Unit Pasar Minggu.</p>

<p>Sebagai bahan pertimbangan Bapak berikut saya lampirkan :</p>
<ol>
<li>Photo copy KTP ( Suami/Istri )</li>
<li>Pas photo ukuran 4 x 6 cm&nbsp; masing &ndash; masing satu lembar,</li>
<li>Photo lokasi tempat usaha dan &nbsp;photo lokasi jaminan/ Agunan,</li>
<li>Surat Keterangan Usaha dari Peratin,</li>
<li>Tanda &nbsp;lunas PBB tahun berjalan/ terakhir atau keterangan Lunas PBB dari Peratin Tahun berjalan,</li>
</ol>
<p>Demikian permohonan pinjaman &nbsp;ini saya sampaikan, semoga dapat dikabulkan dan sebelumnya di haturkan terima kasih.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bumi Ratu , <?php echo tgl_indo(date("Y-m-d")) ?></p>
<table>
<tbody>
<tr>
<td width="272">
<p>Mengetahui,</p>
<p>Peratin Bumi Ratu</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>ZAINI PIRDAUS, S.Pd.I</u></strong></p>
</td>
<td width="56">
<p>&nbsp;</p>
</td>
<td width="267">
<p>&nbsp;</p>
<p>Hormat Saya</p>
<p>Pemohon</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>{{$table_warga->nama}}</u></strong></p>
</td>
</tr>
</tbody>
</table>

{{-- @endforeach --}}
