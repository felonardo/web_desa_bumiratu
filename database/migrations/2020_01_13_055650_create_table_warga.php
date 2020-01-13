<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_warga', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('nik', 16);
            $table->string('nama');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('dusun');
            $table->timestamps();
            $table->primary('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_warga');
    }
}
