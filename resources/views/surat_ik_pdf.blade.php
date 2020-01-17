{{--  @foreach($table_warga as $table_warga)  --}} 
<p style="text-align: center; "><strong><u>SURAT PERNYATAAN<br /><br /></u></strong></p>
<p>Yang bertanda tangan dibawah ini, &nbsp;Saya :&nbsp;</p>
<p>&nbsp;</p>
<table style="width: 700px;">
<tbody>
<tr>
<td style="padding-left: 50px;">Nama</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$table_warga->nama}}</td>
</tr>
<tr>
<td style="padding-left: 50px;">Umur</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;"><?php
    function hitung_umur($tanggal_lahir) {
        list($tempat,$hari,$bulan,$tahun) = explode(" ",$tanggal_lahir);
        
        if($bulan == "Januari"){
            $bulan = 1;
        }else if($bulan == "Februari"){
            $bulan = 2;
        }else if($bulan == "Maret"){
            $bulan = 3;
        }else if($bulan == "April"){
            $bulan = 4;
        }else if($bulan == "Mei"){
            $bulan = 5;
        }else if($bulan == "Juni"){
            $bulan = 6;
        }else if($bulan == "Juli"){
            $bulan = 7;
        }else if($bulan == "Agustus"){
            $bulan = 8;
        }else if($bulan == "September"){
            $bulan = 9;
        }else if($bulan == "Oktober"){
            $bulan = 10;
        }else if($bulan == "November"){
            $bulan = 11;
        }else if($bulan == "Desember"){
            $bulan = 12;
        }else{
            $bulan = "TIDAK ADA";
        }

        $year_diff  = date("Y") - $tahun;
        $month_diff = date("m") - $bulan;
        $day_diff   = date("d") - $hari;
        if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
        return $year_diff;
    }
    
    echo hitung_umur($table_warga->ttl);?>
</td>
</tr>
<tr>
<td style="padding-left: 50px;">Pekerjaan</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$table_warga->pekerjaan}}</td>
</tr>
<tr>
<td style="padding-left: 50px;">Alamat</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$table_warga->alamat}}</td>
</tr>
</tbody>
</table>
<p><br />Sehubungan dengan permohonan kami pada <?php
     $hari = date("D");
  
     switch($hari){
         case 'Sun':
             $hari_ini = "Minggu";
         break;
  
         case 'Mon':			
             $hari_ini = "Senin";
         break;
  
         case 'Tue':
             $hari_ini = "Selasa";
         break;
  
         case 'Wed':
             $hari_ini = "Rabu";
         break;
  
         case 'Thu':
             $hari_ini = "Kamis";
         break;
  
         case 'Fri':
             $hari_ini = "Jumat";
         break;
  
         case 'Sat':
             $hari_ini = "Sabtu";
         break;
         
         default:
             $hari_ini = "Tidak di ketahui";		
         break;
     }
  
     echo $hari_ini;  ?>,&nbsp;{{tgl_indo(date("Y-m-d"))}}&nbsp; Kepada Bapak Kapolsek Bengkunat tentang permohonan Surat Izin Keramaian yang akan dilaksanakan pada hari : <?php
     $pecahkan = explode('-', $surat_keramaian->tanggal);
     $hariDariTanggal = mktime(0, 0, 0, $pecahkan[1], $pecahkan[0], $pecahkan[0]);
     $hari = date("D", $hariDariTanggal);
  
     switch($hari){
         case 'Sun':
             $hari_ini = "Minggu";
         break;
  
         case 'Mon':			
             $hari_ini = "Senin";
         break;
  
         case 'Tue':
             $hari_ini = "Selasa";
         break;
  
         case 'Wed':
             $hari_ini = "Rabu";
         break;
  
         case 'Thu':
             $hari_ini = "Kamis";
         break;
  
         case 'Fri':
             $hari_ini = "Jumat";
         break;
  
         case 'Sat':
             $hari_ini = "Sabtu";
         break;
         
         default:
             $hari_ini = "Tidak di ketahui";		
         break;
     }
  
     echo $hari_ini;  ?>,&nbsp;{{tgl_indo($surat_keramaian->tanggal)}} Dengan Hiburan : <strong>{{$surat_keramaian->hiburan}}</strong></p>
<p>&nbsp;Yang bertempat di Pekon Bumi Ratu Kecamatan Ngambur Kabupaten Pesisir Barat, dengan ketentuan sebagai berikut :</p>
<ol>
<li>Saya Sahibul Hajat berserta Panitia dan Masyarakat setempat bertanggung jawab dalam hal keamanan dan ketertiban dalam rangka pesta tersebut.</li>
<li>Saya dan segenap Panitia membantu sepenuhnya Kebijaksanaan Polisi dalam rangka pengamanan dan ketertiban dalam Rangka Pesta tersebut.</li>
</ol>
<p>Demikian Surat Pernyataan ini kami buat dengan sebenarnya dan dapat kami pertanggung jawabkan sepenuhnya.</p>
<p>&nbsp;</p>
<table width="586">
<tbody>
<tr>
<td width="217">
<p>&nbsp;</p>
</td>
<td width="161">
<p><strong><u>&nbsp;</u></strong></p>
</td>
<td width="208">
<p>Bumi Ratu, {{tgl_indo(date("Y-m-d"))}}</p>
</td>
</tr>
<tr>
<td width="217">
<p>Mengetahui,</p>
<p>Peratin Bumi Ratu</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>ZAINI PIRDAUS,S.Pd.I</u></strong></p>
</td>
<td width="161">&nbsp;</td>
<td width="208">
<p>Yang membuat pernyataan</p>
<p><strong>&nbsp;</strong></p>
<table>
<tbody>
<tr>
<td width="64">
<table width="100%">
<tbody>
<tr>
<td>
<p><em>Materai</em></p>
<p><em>6000</em></p>
</td>
</tr>
</tbody>
</table>
&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;<strong>{{$table_warga->nama}}</strong></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
{{--</p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
<p>--}}
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
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
<p>Nomor&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; 140 / &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ RIK-BR / <?php  date_default_timezone_set("Asia/Jakarta");
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
        
        echo tgl_romawi(date("-m-")); ?>/{{date("Y")}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kepada Yth :<br>
Lampiran&nbsp; &nbsp; :&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bapak Kapolsek Bengkunat<br>
Prihal&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; Permohonan Mendapatkan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;di -<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rekomendasi Izin Keramaian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bengkunat</p>
{{--  <p>&nbsp;</p>  --}}
<p>Dengan Hormat,</p>
<p>Yang bertanda tangan dibawah ini Peratin Pekon Bumi Ratu &nbsp;Kecamatan Ngambur Kabupaten Pesisir Barat, dengan ini mengajukan Permohonan kepada Bapak Kapolsek Bengkunat sesuai dengan permohonan Shohibul Hajat pada tanggal <?php
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
    ?>. Besar harapan kami kiranya bapak dapat mengeluarkan izin keramaian yang atas nama tersebut dibawah ini :</p>
{{--  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>  --}}
<table style="width: 700px;">
<tbody>
<tr>
<td style="padding-left: 50px;">Nama</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$table_warga->nama}}</td>
</tr>
<tr>
<td style="padding-left: 50px;">Umur</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;"><?php
        list($tempat,$hari,$bulan,$tahun) = explode(" ",$table_warga->ttl);
        
        if($bulan == "Januari"){
            $bulan = 1;
        }else if($bulan == "Februari"){
            $bulan = 2;
        }else if($bulan == "Maret"){
            $bulan = 3;
        }else if($bulan == "April"){
            $bulan = 4;
        }else if($bulan == "Mei"){
            $bulan = 5;
        }else if($bulan == "Juni"){
            $bulan = 6;
        }else if($bulan == "Juli"){
            $bulan = 7;
        }else if($bulan == "Agustus"){
            $bulan = 8;
        }else if($bulan == "September"){
            $bulan = 9;
        }else if($bulan == "Oktober"){
            $bulan = 10;
        }else if($bulan == "November"){
            $bulan = 11;
        }else if($bulan == "Desember"){
            $bulan = 12;
        }else{
            $bulan = "TIDAK ADA";
        }

        $year_diff  = date("Y") - $tahun;
        $month_diff = date("m") - $bulan;
        $day_diff   = date("d") - $hari;
        if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
        echo $year_diff;
    ?>
</td>
</tr>
<tr>
<td style="padding-left: 50px;">Pekerjaan</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$table_warga->pekerjaan}}</td>
</tr>
<tr>
<td style="padding-left: 50px;">Alamat</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$table_warga->alamat}}</td>
</tr>
</tbody>
</table>
<p>Orang tersebut di atas bermaksud akan mengadakan acara Resepsi Pernikahan {{$surat_keramaian->pria}} dengan {{$surat_keramaian->perempuan}}. Adapun rencana acara tersebut akan dilaksanakan pada :</p>
{{--  <p>&nbsp;</p>  --}}
{{--  <table>
<tbody>
<tr>
<td width="94">
<p>Hari</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p><strong>Kamis</strong></p>
</td>
</tr>
<tr>
<td width="94">
<p>Tanggal</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p>17 Oktober &nbsp;2019</p>
</td>
</tr>
<tr>
<td width="94">
<p>Waktu</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p>08.00 s.d Selesai</p>
</td>
</tr>
<tr>
<td width="94">
<p>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p>Pekon Bumi Ratu Kecamatan Ngambur</p>
</td>
</tr>
<tr>
<td width="94">
<p>Hiburan</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p><strong>Kuda Kepang</strong></p>
</td>
</tr>
</tbody>
</table>  --}}
{{--  <p>&nbsp;</p>  --}}
<table style="width: 700px;">
<tbody>
<tr>
<td style="padding-left: 50px;">Hari</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;"><?php
     $pecahkan = explode('-', $surat_keramaian->tanggal);
     $hariDariTanggal = mktime(0, 0, 0, $pecahkan[1], $pecahkan[0], $pecahkan[0]);
     $hari = date("D", $hariDariTanggal);
  
     switch($hari){
         case 'Sun':
             $hari_ini = "Minggu";
         break;
  
         case 'Mon':			
             $hari_ini = "Senin";
         break;
  
         case 'Tue':
             $hari_ini = "Selasa";
         break;
  
         case 'Wed':
             $hari_ini = "Rabu";
         break;
  
         case 'Thu':
             $hari_ini = "Kamis";
         break;
  
         case 'Fri':
             $hari_ini = "Jumat";
         break;
  
         case 'Sat':
             $hari_ini = "Sabtu";
         break;
         
         default:
             $hari_ini = "Tidak di ketahui";		
         break;
     }
  
     echo $hari_ini;  ?>
</td>
</tr>
<tr>
<td style="padding-left: 50px;">Tanggal</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{tgl_indo($surat_keramaian->tanggal)}}</td>
</tr>
<tr>
<td style="padding-left: 50px;">Waktu</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">08.00 - Selesai</td>
</tr>
<tr>
<td style="padding-left: 50px;">Tempat</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">Pekon Bumi Ratu Kecamatan Ngambur</td>
</tr>
<tr>
<td style="padding-left: 50px;">Hiburan</td>
<td style="padding-left: 10px;">:</td>
<td style="padding-left: 30px;">{{$surat_keramaian->hiburan}}</td>
</tr>
</tbody>
</table>
<p>Demikian Surat Permohonan ini kami buat dengan sebenarnya sesuai dengan Permohonan yang bersangkutan dan atas bantuannya di ucapkan terima kasih.</p>
{{--  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>  --}}
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
    <p> Bumi Ratu, {{tgl_indo(date("Y-m-d"))}}</p>
</td>
</tr>
<tr>
<td width="236">
{{--  <p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>  --}}
<p>BABINKAMTIBMAS</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td width="128">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mengetahui,</p>
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
<p><strong><u>RAMA ANDIKA</u></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NRP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
{{--  <p>@endforeach</p>  --}}
