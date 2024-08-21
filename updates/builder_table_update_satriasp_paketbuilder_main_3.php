<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderMain3 extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_main', function($table)
        {
            $table->boolean('spotlight')->nullable();
            $table->string('judul', 255)->nullable()->change();
            $table->text('deskripsi')->nullable()->change();
            $table->date('tanggal')->nullable()->change();
            $table->integer('bintang_hotel')->nullable()->change();
            $table->string('durasi_hari', 255)->nullable()->change();
            $table->string('keberangkatan', 255)->nullable()->change();
            $table->string('masa_tunggu', 255)->nullable()->change();
            $table->string('kursi_tersedia', 255)->nullable()->change();
            $table->string('maskapai', 255)->nullable()->change();
            $table->string('total_harga', 255)->nullable()->change();
            $table->boolean('promo')->nullable()->change();
            $table->string('slug', 255)->nullable()->change();
            $table->string('status', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_main', function($table)
        {
            $table->dropColumn('spotlight');
            $table->string('judul', 255)->nullable(false)->change();
            $table->text('deskripsi')->nullable(false)->change();
            $table->date('tanggal')->nullable(false)->change();
            $table->integer('bintang_hotel')->nullable(false)->change();
            $table->string('durasi_hari', 255)->nullable(false)->change();
            $table->string('keberangkatan', 255)->nullable(false)->change();
            $table->string('masa_tunggu', 255)->nullable(false)->change();
            $table->string('kursi_tersedia', 255)->nullable(false)->change();
            $table->string('maskapai', 255)->nullable(false)->change();
            $table->string('total_harga', 255)->nullable(false)->change();
            $table->boolean('promo')->nullable(false)->change();
            $table->string('slug', 255)->nullable(false)->change();
            $table->string('status', 255)->nullable(false)->change();
        });
    }
}
