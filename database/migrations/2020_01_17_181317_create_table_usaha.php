<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_usaha', function(Blueprint $table) {
            $table->increments('id');   
            $table->string('nik');
            $table->string('jenis_usaha');
            $table->integer('sejak_tahun');
            $table->integer('nominal');
            $table->integer('lama_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_usaha');
    }
}
