<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSatriaspPaketbuilderMainIncludesRelation extends Migration
{
    public function up()
    {
        Schema::dropIfExists('satriasp_paketbuilder_main_includes_relation');
    }
    
    public function down()
    {
        Schema::create('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('main_id')->unsigned();
            $table->integer('includes_id')->unsigned();
        });
    }
}
