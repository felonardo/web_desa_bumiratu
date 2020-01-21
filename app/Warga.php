<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'table_warga';
    protected $fillable = ['id', 'nama', 'ttl', 'jenis_kelamin', 'agama', 'pekerjaan', 'alamat', 'dusun'];
}
