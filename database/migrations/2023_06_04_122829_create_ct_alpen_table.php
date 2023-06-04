<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtAlpenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_alpen', function (Blueprint $table) {
            $table->id('id_surat');
            $table->string('jns_ct');
            $table->integer('nip');
            $table->string('nama');
            $table->string('golongan');
            $table->string('jabatan');
            $table->date('tgl_mul');
            $table->date('tgl_sls');
            $table->string('durasi');
            $table->string('alamat');
            $table->string('keterangan');
            $table->string('status');
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
        Schema::dropIfExists('ct_alpen');
    }
}
