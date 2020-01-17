<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    protected $table = 'surat_usaha';
    protected $fillable = ['nik', 'jenis_usaha', 'sejak_tahun', 'nominal', 'lama_pinjam'];
}
