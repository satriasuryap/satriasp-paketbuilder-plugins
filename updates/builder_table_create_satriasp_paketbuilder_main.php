<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderMain extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_main', function($table)
        {
            $table->increments('id');
            $table->string('judul');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->integer('bintang_hotel');
            $table->string('durasi_hari');
            $table->string('keberangkatan');
            $table->string('masa_tunggu');
            $table->string('kursi_tersedia');
            $table->string('maskapai');
            $table->string('total_harga');
            $table->string('gambar');
            $table->boolean('promo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_main');
    }
}
