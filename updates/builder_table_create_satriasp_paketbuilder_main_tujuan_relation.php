<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderMainTujuanRelation extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_main_tujuan_relation', function($table)
        {
            $table->integer('tujuan_id');
            $table->integer('package_id');
            $table->primary(['tujuan_id','package_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_main_tujuan_relation');
    }
}
