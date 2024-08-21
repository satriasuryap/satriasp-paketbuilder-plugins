<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderTujuan extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_tujuan', function($table)
        {
            $table->increments('id');
            $table->string('tujuan');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_tujuan');
    }
}
